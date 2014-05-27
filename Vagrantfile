# -*- mode: ruby -*-
# vi: set ft=ruby :

require "socket"

unless Vagrant.has_plugin?("vagrant-hostsupdater")
  raise 'vagrant-hostsupdater is not installed'
end

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu-server-12.04.4"
  config.vm.box_check_update = false

  config.ssh.username = "ubuntu"
  config.ssh.password = "ubuntu"

  config.vm.network "private_network", ip: "10.0.1.15"

  config.vm.hostname = "butter.dev"
  config.hostsupdater.aliases = [
    "deacons.butter.dev",
    "bkrm.butter.dev",
    "awa.butter.dev",
    "ptarmigan.butter.dev",
    "lab.dev"
  ]

  config.vm.synced_folder "", "/vagrant", disabled: true
  config.vm.synced_folder "www", "/var/www", type: "nfs"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Don't boot with headless mode
  #   vb.gui = true
  #
  #   # Use VBoxManage to customize the VM. For example to change memory:
  #   vb.customize ["modifyvm", :id, "--memory", "1024"]
  # end
  #
  # View the documentation for the provider you're using for more
  # information on available options.

  config.vm.provision "file", source: "#{ENV['HOME']}/.ssh", destination: "~"
  config.vm.provision "shell", path: "bootstrap.sh"
  if File.file?("git.sh")
    config.vm.provision "shell", path: "git.sh"
  end

  user = ENV['OPSCODE_USER'] || ENV['USER']
  orgname = ENV['OPSCODE_ORGNAME'] || 'butter'
  hostname = ENV['OPSCODE_NODE'] || ENV['HOSTNAME'] || Socket::gethostname
  base_box = ENV['VAGRANT_BOX'] || 'precise64'
  config.vm.provision "chef_client" do |chef|
    chef.chef_server_url = "https://api.opscode.com/organizations/#{orgname}"
    chef.client_key_path = "#{ENV['HOME']}/.chef/#{user}.pem"
    chef.validation_key_path = "#{ENV['HOME']}/.chef/#{orgname}-validator.pem"
    chef.validation_client_name = "#{orgname}-validator"
    chef.chef_server_url = "https://api.opscode.com/organizations/#{orgname}"

    chef.node_name = "#{user}-#{hostname}-vagrant"

    chef.provisioning_path = "/etc/chef"
    chef.log_level = :info
    chef.run_list = [
      "role[dev]"
    ]
  end
end
