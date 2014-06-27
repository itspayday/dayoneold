# Vagrantfile & Puppet manifests for Botangle / CakePHP

## Software requirements

You need to install the following to work with our setup:

- [VirtualBox][virtualbox]
- [Vagrant][vagrant]
- vagrant-hostmanager

[virtualbox]: https://www.virtualbox.org/wiki/Downloads
[vagrant]: http://www.vagrantup.com/downloads.html

Once the first two items are installed, then install `vagrant-hostmanager` as follows:

    vagrant plugin install vagrant-hostmanager

## Getting started

- In the Terminal / console, type `vagrant up`.  This will build a VM for you with our settings applied
- Once done, type `vagrant ssh` and then `cd /var/www/app`
- Run `composer.phar install`, which will load up all our various libraries
- Run `Console/cake Migrations.migration run`
- Run `Console/cake Migrations.migration run -p Users`
- Run `Console/cake schema create sessions` to build a sessions table to be used in the DB.  Answer yes both times.

You should be able to access your Botangle setup now in a web browser: [http://app.botangle.dev](http://app.botangle.dev)

Note: we use migrations (see above) heavily as we make changes to the DB, so if you haven't used them before, please
spend a bit of time learning how they work.

## To start sending in code
Please see the Contributing.md file

## Other things to know
There is a backend to the system ([http://app.botangle.dev/snapez](http://app.botangle.dev/snapez)).  You can get in with
the following credentials:

User: admin
Password: 123456

## MySQL

You need to use an SSH connection.

With the information below you can connect to the MySQL server running on the virtual machine.

## Default information

* SSH Host: 192.168.200.20 (`192.168.200.1` is your machine)
* SSH User: vagrant
* SSH Pass: vagrant
* SSH Port: 2222 (default by vagrant)
* MySQL Host: 127.0.0.1
* MySQL Port: 3306
* MySQL User: botangle
* MySQL Pass: botangle
* MySQL DB:   botangle

### Import database

If file exists `database.sql.gz` in the main directory (where the Vagrantfile is), puppet will import the database during the first `up`.

## Virtualhost

Per default the variable `YII_DEBUG` is set to true for this Apache setup, but will be false automatically on deploy.

The virtualhost is set on the `htdocs` directory.

## Mails

[MailCatcher][mailcatcher] is installed and configured into the `/etc/php5/apache2/php.ini` file.

### How it works

If mailcatcher is stopped: all emails are lost.

If mailcatcher is started: **all emails are catched**.

If you want to start MailCatcher, simply run this command (with vagrant user) : `mailcatcher --ip 0.0.0.0`

Then go to : http://app.botangle.dev:1080

If you need to stop the mailcatcher daemon : Clic on "Quit" on the top right corner of the MailCatcher Web UI.

## Running Migrations for CakePHP
Inside of the vagrant machine (you can use `vagrant ssh` to get in) in the app folder (`/var/www/app`), run this command:

```Console/cake Migrations.migration run```

More details available here: https://github.com/CakeDC/migrations/blob/2.1/readme.md

## Packages

Are installed:

* apache-mpm-itk (with yii2 virtualhost)
* mysql-server (with custom my.cnf)
* mysql-client
* php5 (and the following modules)
    - bcmatch
    - bz2
    - calendar
    - ctype
    - curl
    - date
    - dba
    - dom
    - ereg
    - exif
    - fileinfo
    - filter
    - ftp
    - gd
    - gettext
    - hash
    - iconv
    - intl
    - json
    - libxml
    - mbstring
    - mcrypt
    - mhash
    - mysql
    - mysqli
    - openssl
    - pcre
    - pdo
    - pdo_mysql
    - phar
    - posix
    - readline
    - reflection
    - session
    - shmop
    - simplexml
    - soap
    - sockets
    - spl
    - sysvmsg
    - tidy
    - tokenizer
    - wddx
    - xdebug
    - xml
    - xmlreader
    - xmlwriter
    - zip
    - zlib
* screen (with custom .screenrc for root)
* vim
* wget
* curl
* git
* composer.phar
* mailcatcher (gem)

[mailcatcher]: http://mailcatcher.me

## Credit
Giving credit where credit is due.  Almost all of the hard work on this was done here:
https://github.com/monsieurbiz/vagrant-magento

## CakePHP info

[![CakePHP](http://cakephp.org/img/cake-logo.png)](http://www.cakephp.org)

CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.
Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.

Some Handy Links
----------------

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[CookBook](http://book.cakephp.org) - THE CakePHP user documentation; start learning here!

[API](http://api.cakephp.org) - A reference to CakePHP's classes

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[Community Center](http://community.cakephp.org) - A source for everything community related

[Training](http://training.cakephp.org) - Join a live session and get skilled with the framework

[CakeFest](http://cakefest.org) - Don't miss our annual CakePHP conference

[Cake Software Foundation](http://cakefoundation.org) - Promoting development related to CakePHP

Get Support!
------------

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake

[Google Group](https://groups.google.com/group/cake-php) - Community mailing list and forum

[GitHub Issues](https://github.com/cakephp/cakephp/issues) - Got issues? Please tell us!

[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)

![Cake Power](https://raw.github.com/cakephp/cakephp/master/lib/Cake/Console/Templates/skel/webroot/img/cake.power.gif)
