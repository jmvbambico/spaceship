# Spaceship Enlistment Service

![GitHub Logo](/splash.jpg)

The Rebel Alliance has obliterated much of our clone factories on Planet Kamino. As such, the Emperor has decided to open recruitment to mitigate our short supply of stormtroopers. You have been tasked to develop a cunning portal for potential recruits to enlist for the Galactic Empire all in the guise of intergalactic space travel and migration.

### Installation Instructions:

##### Initial build:
Clone this repository preferably on `/var/www/html` if you plan to run this on your local LAMP stack:
```
$ git clone git@github.com:jmvbambico/spaceship.git spaceship
$ cd /spaceship
```

#### via Docker:
This repository includes a Dockerfile ready for easy deployment. If you have docker installed, you may run the following:

##### Run:
```
$ sudo docker build -t spaceship .
$ sudo docker run -p 8000:80 -v ${PWD}/mysql:/var/lib/mysql spaceship
```

##### Open:
<http://localhost:8000>

#### via LAMP Stack:
If you prefer to run this application via a standard LAMP (Apache, PHP, MySQL) stack otherwise, you may run the following to install the required dependencies manually. If you are on Windows, you may use [XAMPP](https://www.apachefriends.org/index.html).
```
$ sudo apt-get install apache2 mysql-server
```

##### Open:
<http://localhost/spaceship/>