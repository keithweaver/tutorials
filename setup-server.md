# Setting up a server

### Setup an account

1. Setup an account on [Digital Ocean](https://m.do.co/c/e855b0766788) with your email and password. 


### Deploy your server

1. Click the "Create Droplet"

2. Select Ubuntu 14.04, the size you want, the location and click create!

3. You will be emailed a password and IP address.

4. Open your terminal and log in
```
ssh root@YOUR_IP
```
Example:
```
ssh root@198.199.120.231
```
When you type in your password, you wont be able to see it.


### Getting everything setup

1. Update the server
```
apt-get update && sudo apt-get upgrade
```

#### Install Apache

```
sudo apt-get install apache2
```

2. Disable the event module and enable prefork.
```
sudo a2dismod mpm_event
sudo a2enmod mpm_prefork
```

3. Restart the server
```
service apache2 restart
```

### Configure your domain

Change all instances of `example.com`. If you use `nano` to save and write, press `command` + `o`, type the file name, press `command` + `x`. If you are using `vi` to save press `esc` then type `:wq`.

1. Navigate to the write folder.
```
cd ~/../etc/apache2/sites-available/
```

2. Create a file called `example.com.conf` but with your domain. `keithweaver.ca.conf`, `intercom.io.conf`, etc.

The contents will be as follows:
```
<VirtualHost *:80> 
     ServerAdmin youremail@gmail.com
     ServerName example.com
     ServerAlias www.example.com
     DocumentRoot /var/www/html/example.com/public_html/
     ErrorLog /var/www/html/example.com/logs/error.log 
     CustomLog /var/www/html/example.com/logs/access.log combined
     <Directory /path/to/public/website/>
        Require all granted
     </Directory>
</VirtualHost>
```

3. Create folders for the file
```
sudo mkdir -p /var/www/html/example.com/public_html
sudo mkdir /var/www/html/example.com/logs
```

4. Link sites-available and sites-enabled
```
sudo a2ensite example.com.conf
```

5. Reload the apache
```
service apache2 reload
```

#### Install MySQL

1. Install the `mysql-server` package:
```
apt-get install mysql-server 
```

#### Install PHP

1. Install PHP, and the PHP Extension and Application Repository:
```
apt-get install php5 php-pear
apt-get install php5-mysql 
```

2.  Create the log directory for PHP and give the server ownership.
```
sudo mkdir /var/log/php
sudo chown www-data /var/log/php
```

3. Reload the Apache
```
service apache2 reload
```