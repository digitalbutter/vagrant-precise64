#!/bin/bash

LOG="init.log"
echo >> $LOG
echo "=========" >> $LOG
date >> $LOG

# Git
echo -e "\033[32mSetting Git account preferences\033[0m"

GIT=`which git`

GIT_NAME=`$GIT config --get user.name`
GIT_EMAIL=`$GIT config --get user.email`
GIT_BOOTSTRAP="git.sh"
if [ ! -z "$GIT_NAME" ]
then
    echo "user.name: $GIT_NAME"
    read -p "Is this the name associated with your Git account? [y/N] " -r
    if [[ ! $REPLY =~ ^[Yy]$ ]]
    then
        GIT_NAME=
    fi
fi
if [ -z "$GIT_NAME" ]
then
    read -p "What is your name? " -r
    GIT_NAME=`echo "$REPLY"`
fi

if [ ! -z "$GIT_EMAIL" ]
then
    echo "user.email $GIT_EMAIL"
    read -p "Is this the email associated with your Git account? [y/N] " -r
    if [[ ! $REPLY =~ ^[Yy]$ ]]
    then
        GIT_EMAIL=
    fi
fi
if [ -z "$GIT_EMAIL" ]
then
    read -p "What is the email associated with your Git account? " -r
    GIT_EMAIL=`echo "$REPLY"`
fi

echo "Writing Git bootstrap script"
USER_NAME="ubuntu"
echo "su - $USER_NAME -c \"git config --global user.name '$GIT_NAME'\"" > $GIT_BOOTSTRAP
echo "su - $USER_NAME -c \"git config --global user.email '$GIT_EMAIL'\"" >> $GIT_BOOTSTRAP
echo "su - $USER_NAME -c \"git config --global core.autocrlf input\"" >> $GIT_BOOTSTRAP
echo "su - $USER_NAME -c \"git config --global core.fileMode false\"" >> $GIT_BOOTSTRAP

# Vagrant
echo
echo -e "\033[32mConfiguring Vagrant\033[0m"

VAGRANT_BOX_NAME="ubuntu-server-12.04.4"
VAGRANT_BOX_PATH="package.box"
if ! vagrant box list | grep -q "$VAGRANT_BOX_NAME"
then
    echo "Adding box..."
    vagrant box add --name "$VAGRANT_BOX_NAME" "$VAGRANT_BOX_PATH"
else
    echo "Vagrant box exists already"
fi

VAGRANT_HOSTSUPDATER_NAME="vagrant-hostsupdater"
if ! vagrant plugin list | grep -q "$VAGRANT_HOSTSUPDATER"
then
    echo "Installing plugin..."
    vagrant plugin install "$VAGRANT_HOSTSUPDATER" >> $LOG 2>&1
    if [ ! $? -eq 0 ]
    then
        echo "Install error, installing missing dependencies"
        if ! pkgutil --pkg-info=com.apple.pkg.DeveloperToolsCLI
        then
            echo "Xcode Command Line Tools is not installed"
            echo -e "Run \033[31mxcode-select --install\033[0m to install it first before running this script again."
            exit 1
        fi
        /Applications/Vagrant/embedded/bin/gem install nokogiri -v '1.6.2.1' >> $LOG 2>&1
        
        echo "Installing homebrew for Mac"
        ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
        PATH=/usr/local/bin:$PATH
        brew update
        brew doctor
        
        echo "Installing dependencies"
        curl "http://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.13.1.tar.gz" | tar xvz
        cd "libiconv-1.13.1"
        ./configure --prefix=/usr/local/Cellar/libiconv/1.13.1
        make
        sudo make install
        brew link libiconv

        brew install libxml2 libxslt
        brew link libxml2 libxslt

        NOKOGIRI_USE_SYSTEM_LIBRARIES=true vagrant plugin install "$VAGRANT_HOSTSUPDATER"
    fi
fi

echo
echo "Done"
echo -e "Run \033[31mvagrant up\033[0m to bring up and provision the virtual machine"
