# Spaceship Enlistment Service

![GitHub Logo](/splash.jpg)

The Rebel Alliance has obliterated much of our clone factories on Planet Kamino. As such, the Emperor has decided to open recruitment to mitigate our short supply of stormtroopers. You have been tasked to develop a cunning portal for potential recruits to enlist for the Galactic Empire all in the guise of intergalactic space travel and migration.

### Installation Instructions:

##### Initial build:
Clone this repository preferably on `/var/www/html` if you plan to run this on a local LAMP (Apache, PHP, MySQL) stack:
```
$ git clone git@github.com:jmvbambico/spaceship.git spaceship
$ cd /spaceship
```

#### via local LAMP Stack:
If you don't prefer running this application over a Docker container, you may run the following to install the required dependencies manually. If you are on Windows, you may use [XAMPP](https://www.apachefriends.org/index.html).
```
$ sudo apt-get install apache2 php mysql-server
```
Install the application: <http://localhost/spaceship/install>

#### via [Docker](https://docs.docker.com/install/):
This application ships with a Dockerfile that builds on top of a readily available LAMP base image. If you have docker installed, you may run the following:
```
$ sudo docker build -t spaceship .
$ sudo docker run -p 8000:80 -v ${PWD}/mysql:/var/lib/mysql spaceship
```
Install the application: <http://localhost:8000/install>

###### List of Registrants:
All registrations go into either <http://localhost:8000/registry> or <http://localhost/spaceship/registry> depending on where you launched the application.

###### Known issues:
`PHP7 Mcrypt` - Mcrypt has been deprecated as of PHP7.1 and is officially dropped on PHP7.2. Since CodeIgniter still requires this dependecy, you may encounter a missing dependency lookup error. Should such an issue arise, please install it manually using this [guide](https://stackoverflow.com/questions/34083470/php7-laravel-mcrypt-issue). This issue has been addressed on the Docker build however.
