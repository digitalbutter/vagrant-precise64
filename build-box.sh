vagrant package --base ubuntu-server-12.04.4
vagrant box remove ubuntu-server-12.04.4
vagrant box add --name ubuntu-server-12.04.4 package.box
