# Spaceship Enlistment Service

![GitHub Logo](splash.jpg)

Description goes here.

##### Installation Instructions:
###### Initial build:
```
$ git clone git@github.com:jmvbambico/spaceship.git spaceship
$ cd /spaceship
$ sudo docker build -t spaceship .
```

###### Run:
```
$ sudo docker run -p 8000:80 -v ${PWD}/mysql:/var/lib/mysql spaceship
```

###### Open:

`http://localhost:8000`
