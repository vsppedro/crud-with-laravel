# Crud With Laravel
A simple crud using Laravel and Materrialize on Cloud9.

## Make a account on Cloud9

* https://c9.io/

## Make a workspace for php

## Update PHP to 7.0.0

* sudo add-apt-repository ppa:ondrej/php
* sudo apt-get update
* sudo apt-get install libapache2-mod-php7.0
* sudo a2dismod php5
* sudo a2enmod php7.0
* service apache2 restart
* sudo apt-get install php7.0-dom
* sudo apt-get install php7.0-mbstring
* sudo apt-get install php7.0-zip
* sudo apt-get install php7.0-mysql
* sudo apt-get install php7.0-sqlite

## Getting Started with Laravel

* sudo composer self-update

## As Lavarel is serving its content from the public directory we need to modify the apache config using nano (a text editor):

* sudo nano /etc/apache2/sites-enabled/001-cloud9.conf

### Then do the following:

// Change this line <br>
DocumentRoot /home/ubuntu/workspace

// To following <br>
DocumentRoot /home/ubuntu/workspace/public

* Source: https://community.c9.io/t/getting-started-with-laravel/1608

## Update Laravel

* sudo composer update

## Setup your database to work with Laravel

* mysql-ctl cli
* use c9;
* select @@hostname;
* exit

# This tutorial is still being made. My apologies.
