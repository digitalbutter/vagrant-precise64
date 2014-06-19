#vagrant-precise64
Vagrant configuration for a virtual machine designated for local web development.

##Table of Contents
* [Requirements](#requirements)
* [Set-up](#set-up)
  * [Details](#details)
* [Usage](#usage)
  * [Common](#common)
  * [Maintenance](#maintenance)
  * [Troubleshooting](#troubleshooting)
* [Known Issues](#known-issues)
  * [vagrant-hostsupdater](#vagrant-hostsupdater)
  * [Sublime Text 2](#sublime-text-2)
  * [MODx Mirror Plugin](#modx-mirror-plugin)
* [Related Links](#related-links)

##Requirements
* [Vagrant](http://www.vagrantup.com/downloads.html)
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [VirtualBox Extension Pack](https://www.virtualbox.org/wiki/Downloads)

##Set-up
This Vagrant configuration has only been tested on Mac OS X 10.9.2 and above.

Before continuing, install the requirements listed above.

Clone this repository.

```
$ git clone git@github.com:digitalbutter/vagrant-precise64.git
```

You will need to obtain the `package.box` file that contains the initial virtual machine. Copy it to the same path as this file.

Run the `init.sh` script in the root of the working directory.

```
$ ./init.sh
```

###Details
The following items are automated with the `init.sh` script.

Add the box to Vagrant's local box repository.

```
$ cd vagrant-precise64
$ vagrant box add --name ubuntu-server-12.04.4 package.box
```

Install the vagrant-hostsupdater plugin if you haven't already. Please refer [below](#known-issues) if you run into any problems.

```
$ vagrant plugin install vagrant-hostsupdater
```

Bring up the Vagrant virtual machine. This will initialize the virtual machine, bootstrap it, and provision it.

```
$ vagrant up
```

##Usage

###Common
To bring up your Vagrant virtual machine:

```
$ vagrant up
```

To bring down your Vagrant virtual machine:

```
$ vagrant halt
```

To access your Vagrant virtual machine's shell:

```
$ vagrant ssh
```

The IP is set in the `Vagrantfile`. The default is 10.0.1.15. Therefore you can also access your machine's shell using SSH normally:

```
$ ssh ubuntu@10.0.1.15
```

The password for the `ubuntu` and `root` accounts is `ubuntu`.

###Maintenance
When provisioning rules are updated in the `Vagrantfile`, the machine can be provisioned again:

```
$ vagrant provision
```

When you update the `Vagrantfile` (e.g., update HOSTS array, etc), you will want to reload the machine so the changes take effect:

```
$ vagrant reload
```

New updates to the configuration may also come in via Git on this repository.

```
$ git pull
$ vagrant reload
```

###Troubleshooting

Has everything gone horribly wrong? Perform the following steps to start fresh.

1. Make sure the changes on your projects in the virtual machine are committed and pushed to Github before continuing.
2. `$ vagrant destroy`
3. `$ vagrant up`

##Known Issues
###vagrant-hostsupdater
When installing certain Vagrant plugins, there appears to be a problem related to the nokogiri Ruby gem.

This problem is discussed [here](https://github.com/mitchellh/vagrant/issues/3769) in length.

To debug the issue:

```
/Applications/Vagrant/embedded/bin/gem install nokogiri -v '1.6.2.1'
```

There appear to be several potential solutions/workarounds for this problem:

* Add `s.add_dependency(%q<nokogiri>, ["< 1.6.2"])` to `/Applications/Vagrant/embedded/gems/specifications/vagrant-1.6.2.gemspec`
* Install missing dependency for nokogiri
  * Install Xcode command line tools

    ```
    xcode-select --install
    ```

  * Install libxml2
    * Install libiconv

      ```
      wget http://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.13.1.tar.gz
      tar xvfz libiconv-1.13.1.tar.gz
      cd libiconv-1.13.1
      ./configure --prefix=/usr/local/Cellar/libiconv/1.13.1
      make
      sudo make install
      brew link libiconv
      ```

    * Using macports or homebrew ([reference](http://nokogiri.org/tutorials/installing_nokogiri.html))

      ```
      brew install libxml2 libxslt
      brew link libxmls2 libxslt
      ```

  * Build nokogiri with system libraries

    ```
    NOKOGIRI_USE_SYSTEM_LIBRARIES=true vagrant plugin install vagrant-hostsupdater
    ```

###Sublime Text 2
There is a bug with Sublime that causes the NFS shared path to become out of sync discussed [here](https://serverfault.com/questions/534507/vagrant-nfs-share-doesnt-show-updated-file-if-size-doesnt-change)

###MODx Mirror Plugin
The old mirror plugin does not add an EOF newline to the files it creates. An updated version of the plugin is available [here](https://github.com/digitalbutter/MODX-Mirror/releases)

##Related Links
* [digitalbutter/vagrant-scripts](https://github.com/digitalbutter/vagrant-scripts)
