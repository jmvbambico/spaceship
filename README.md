# Spaceship Enlistment Service

![GitHub Logo](/splash.jpg)

The Rebel Alliance has obliterated much of our clone factories in Planet Kamino. As such, the Emperor has decided to open recruitment to mitigate our short supply of stormtroopers. You have been tasked to develop a cunning portal for potential recruits to enlist for the Galactic Empire all in the guise of intergalactic space travel and migration.

### Installation Instructions:

#### LAMP Stack Dependencies:
A standard LAMP (Apache, PHP, MySQL) stack is required to run this application. You may run the following to get started. If you are on windows, you may use [XAMPP](https://www.apachefriends.org/index.html).
```
$ sudo apt-get install apache2 mysql-server
```

##### Initial build:
Clone this repository (preferably on /var/www/html) to make a local copy:
```
$ git clone git@github.com:jmvbambico/spaceship.git spaceship
$ cd /spaceship
```

##### Open:
<http://localhost/spaceship/>

#### Running via Docker:
The repository includes a Dockerfile ready for deployment. If you have docker installed, you may run the following:

##### Run:
```
$ sudo docker build -t spaceship .
$ sudo docker run -p 8000:80 -v ${PWD}/mysql:/var/lib/mysql spaceship
```

##### Open:
<http://localhost:8000>
