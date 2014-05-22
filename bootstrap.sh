#!/bin/bash

USER_NAME="ubuntu"
USER_HOME="/home/ubuntu"
GIT=`which git`

function run {
    echo $1
    su - $USER_NAME -c "$1"
}

# clone vagrant scripts and symlink
if [ ! -d "$USER_HOME/src/vagrant-scripts/.git" ]
then
    echo 'cloning vagrant-scripts.git'
    run 'mkdir "'$USER_HOME'/bin" "'$USER_HOME'/src"'
    run ''$GIT' clone https://github.com/digitalbutter/vagrant-scripts.git "'$USER_HOME'/src/vagrant-scripts"'
    run 'ln -s "'$USER_HOME'/src/vagrant-scripts" "'$USER_HOME'/bin"'
else
    echo 'pulling vagrant-scripts.git'
    run ''$GIT' --work-tree="'$USER_HOME'/src/vagrant-scripts" --git-dir="'$USER_HOME'/src/vagrant-scripts/.git" pull'
fi

# set up crontab for self updating
echo 'check crontab'
crontab -u ubuntu -l > /tmp/crontab
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
