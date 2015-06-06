# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "trusty64"
  config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

  config.vm.network :forwarded_port, guest: 80, host: 6677
  config.vm.network :private_network, ip: "192.168.66.77"

  config.vm.provider :virtualbox do |vb|
    vb.name = "medicaid.app"
    vb.customize ["modifyvm", :id, "--memory", "2048"]
    vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
end
  config.vm.provision "shell", inline: <<-shell

  	sudo hostname medicaid.app
  	sudo apt-get update
  	sudo apt-get install -y unzip vim git-core curl wget build-essential python-software-properties
  	sudo add-apt-repository -y ppa:nginx/stable
  	sudo apt-get update
  	sudo apt-get install -y nginx
  	wget -O - http://dl.hhvm.com/conf/hhvm.gpg.key | sudo apt-key add -
  	echo deb http://dl.hhvm.com/ubuntu trusty main | sudo tee /etc/apt/sources.list.d/hhvm.list
  	apt-key adv --keyserver keys.gnupg.net --recv-keys 1C4CBDCDCD2EFD2A
  	sudo sh -c "echo 'deb http://repo.percona.com/apt trusty main' >> /etc/apt/sources.list"
  	sudo sh -c "echo 'deb-src http://repo.percona.com/apt trusty main' >> /etc/apt/sources.list"
  	sudo apt-get update
  	sudo apt-get install -y hhvm
  	sudo /usr/share/hhvm/install_fastcgi.sh
  	sudo update-rc.d hhvm defaults
	sudo sed -i 's/www-data/vagrant/g' /etc/init.d/hhvm
	sudo sed -i 's/ADDITIONAL_ARGS=""/ADDITIONAL_ARGS="-v ResourceLimit.SocketDefaultTimeout=30 -v Http.SlowQueryThreshold=30000"/g' /etc/init.d/hhvm
  	sudo service hhvm restart
  	sudo /usr/bin/update-alternatives --install /usr/bin/php php /usr/bin/hhvm 60
  	sudo rm /etc/nginx/sites-enabled/default
  	wget http://techunify.com/nginx_conf_laravel -O /etc/nginx/sites-available/$(hostname)
  	sed -i 's/hostname/'$(hostname)'/g' /etc/nginx/sites-available/$(hostname)
  	sudo ln -s /etc/nginx/sites-available/$(hostname) /etc/nginx/sites-enabled/$(hostname)
	sudo sed -i 's/www-data/vagrant/g' /etc/nginx/nginx.conf
  	sudo service nginx restart
	sudo wget https://getcomposer.org/installer
	hhvm -v ResourceLimit.SocketDefaultTimeout=30 -v Http.SlowQueryThreshold=30000 installer
	sudo mv composer.phar /usr/local/bin/composer
	sudo rm installer
	echo percona-server-server-5.6 percona-server-server/root_password password  'password' | sudo debconf-set-selections
	echo percona-server-server-5.6 percona-server-server/root_password_again password 'password'  | sudo debconf-set-selections
  	sudo apt-get -y install percona-server-server-5.6 percona-server-client-5.6
	chmod -R 775 /vagrant/app/storage
	cd /vagrant
	sudo hhvm -v ResourceLimit.SocketDefaultTimeout=30 -v Http.SlowQueryThreshold=30000 /usr/local/bin/composer update
	php artisan dump-autoload
    mysql -uroot -ppassword -e "create database 1"
    sudo swapon -s
  	sudo dd if=/dev/zero of=/swapfile bs=1024 count=1024k
  	sudo mkswap /swapfile
  	sudo swapon /swapfile
  	echo "/swapfile       none    swap    sw      0       0" | sudo tee -a /etc/fstab
  	echo 10 | sudo tee /proc/sys/vm/swappiness
  	echo vm.swappiness = 10 | sudo tee -a /etc/sysctl.conf
  	sudo chown root:root /swapfile
  	sudo chmod 0600 /swapfile
  	cd /vagrant
  	composer install
    sudo php artisan migrate --force
    sudo php artisan db:seed --force
  shell
end