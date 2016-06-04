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
     <Directory /var/www/html/example.com/public_html/>
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

#### Install Git

Change back to the root directory.
```
cd ~/../
```

And install it.
```
apt-get install git-all
```

#### Clone the repo

Go to Github, BitBucket, etc. and create a repo. Find the ssh link.

```
cd ~/.ssh
ssh-keygen
```

It will return something like this:
```
Generating public/private rsa key pair.
Enter file in which to save the key (/home/schacon/.ssh/id_rsa):
Created directory '/home/schacon/.ssh'.
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /home/schacon/.ssh/id_rsa.
Your public key has been saved in /home/schacon/.ssh/id_rsa.pub.
The key fingerprint is:
d0:82:24:8e:d7:f1:bb:9b:33:53:96:93:49:da:9b:e3 schacon@mylaptop.local
```

Run the following command to get the key and you will be adding it to the repo.
```
cat ~/.ssh/id_rsa.pub
```

It will return this:
```
ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEAklOUpkDHrfHY17SbrmTIpNLTGK9Tjom/BWDSU
GPl+nafzlHDTYW7hdI4yZ5ew18JH4JW9jbhUFrviQzM7xlELEVf4h9lFX5QVkbPppSwg0cda3
Pbv7kOdJ/MTyBlWXFCR+HAo3FXRitBqxiX1nKhXpHAZsMciLq8V6RjsNAQwdsdMFvSlVK/7XA
t3FaoJoAsncM1Q9x5+3V0Ww68/eIFmb1zuUFljQJKprrX88XypNDvjYNby6vw/Pb0rwert/En
mZ+AW4OZPnTPI89ZPmVMLuayrD2cE86Z/il8b+gw3r3+1nKatmIkjn2so1d01QraTlMqVSsbx
NrRFi9wrf+M7Q== schacon@mylaptop.local
```

Copy and paste this on the repo under settings.

The link would look something like this:
```
git@github.com:kweaver00/tutorials.git
```

On the server, replace `example.com` with your domain:
```
cd ~/../var/www/html/example.com/
```

Now clone it:
```
git clone git@github.com:kweaver00/tutorials.git
```

Delete the existing `public_html` folder. Run:
```
rm -rf public_html
ls
mv ./tutorials ./public_html
```

`tutorials` was one of the folders listed other than `logs`.


#### Adding PHPMyAdmin

Install PHPMyAdmin
```
apt-get install phpmyadmin
```

Open the folder (git repo), the `public_html`:
```
cd ./public_html
```

Link to PHPMyAdmin:
```
cd /var/www/example.com/public_html
sudo ln -s /usr/share/phpmyadmin
```

Change `example.com` to your domain.


### Add Curl

```
apt-get install php5-curl
service apache2 restart
```


### Add Free SSL

Go to your root directory.
```
cd .
```

First we are going to update our server. By running these commands,
```
sudo apt-get update
```

Clone the repo
```
sudo git clone https://github.com/letsencrypt/letsencrypt /opt/letsencrypt
```

Change directories to the Let's Encrypt directory.
```
cd /opt/letsencrypt
```

I'm going to use `example.com` but you should use your own website.
```
./letsencrypt-auto --apache -d example.com -d www.example.com
```

Test it out! Replace `example.com`
```
https://www.ssllabs.com/ssltest/analyze.html?d=example.com&latest
```

Let's Encrypt certificates are valid for 90 days, but itâ€™s recommended that you renew the certificates every 60 days to allow a margin of error. The Let's Encrypt client has a renew command that automatically checks the currently installed certificates and tries to renew them if they are less than 30 days away from the expiration date.
```
./letsencrypt-auto renew
```

Updating Let's Encrypt (Optional)
```
cd /opt/letsencrypt
sudo git pull
```