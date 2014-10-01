Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/trusty32"
  config.vm.box_url = "https://vagrantcloud.com/ubuntu/boxes/trusty32/versions/1/providers/virtualbox.box"

  config.vm.provider :virtualbox do |vb|
    vb.name = "ansible-lnmp"
    vb.customize ["modifyvm", :id, "--memory", "512"]
  end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbook.yml"
  end
  
  config.vm.network :forwarded_port, guest: 80, host: 8080	# nginx
  config.vm.network :forwarded_port, guest: 3306, host: 3306    # mysql
   
  config.vm.synced_folder "~/Vagrant/ansible-lnmp/www/", "/usr/share/nginx/www"

end
