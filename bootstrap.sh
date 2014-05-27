#!/bin/bash

USER_NAME="ubuntu"
USER_HOME="/home/ubuntu"
GIT=`which git`

function run {
    echo $1
    su - $USER_NAME -c "$1"
}

# clone vagrant scripts and symlink
if [[ ! -d "$USER_HOME/src/vagrant-scripts/.git" ]]
then
    echo 'cloning vagrant-scripts.git'
    run 'mkdir "'$USER_HOME'/bin" "'$USER_HOME'/src"'
    run ''$GIT' clone https://github.com/digitalbutter/vagrant-scripts.git "'$USER_HOME'/src/vagrant-scripts"'
else
    echo 'pulling vagrant-scripts.git'
    run ''$GIT' --work-tree="'$USER_HOME'/src/vagrant-scripts" --git-dir="'$USER_HOME'/src/vagrant-scripts/.git" pull'
fi

# symlinks to ~/bin
if [[ ! -L "$USER_HOME/bin/site_up" ]]
then
    run 'cd bin && ln -s "../src/vagrant-scripts/site_up.sh" "'$USER_HOME'/bin/site_up"'
fi
if [[ ! -L "$USER_HOME/bin/site_down" ]]
then
    run 'cd bin && ln -s "../src/vagrant-scripts/site_down.sh" "'$USER_HOME'/bin/site_down"'
fi
if [[ ! -L "$USER_HOME/bin/copy_config" ]]
then
    run 'cd bin && ln -s "../src/vagrant-scripts/copy_config.sh" "'$USER_HOME'/bin/copy_config"'
fi
if [[ ! -L "$USER_HOME/bin/dump_database" ]]
then
    run 'cd bin && ln -s "../src/vagrant-scripts/dump_database.sh" "'$USER_HOME'/bin/dump_database"'
fi
if [[ -L "$USER_HOME/bin/vagrant-scripts" ]]
then
    rm "$USER_HOME/bin/vagrant-scripts"
fi

# set up crontab for self updating
echo 'check crontab'
crontab -u $USER_NAME -l > /tmp/crontab
if ! grep -q "vagrant-scripts/update_self" /tmp/crontab
then
    echo 'update crontab'
    echo "0 12 * * * $USER_HOME/bin/vagrant-scripts/update_self.sh" >> /tmp/crontab
    crontab -u ubuntu /tmp/crontab
fi
rm /tmp/crontab

# update some locale env variables
export LANG="en_US.UTF-8"
export LANGUAGE="en_US.UTF-8"
export LC_ALL="en_US.UTF-8"
export LC_CTYPE="en_US.UTF-8"
locale-gen en_US.UTF-8

# configuration fixes
sed -i -r 's/(AcceptEnv .*)/#\1/' /etc/ssh/sshd_config

# ntp
ntpdate ntp.ubuntu.com
