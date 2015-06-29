Redis training
==============

Index
=====
1- What is redis?

2- Make queries in command line mode

3- PHP in action with redis

4- Exercices


Requirements
============

1- Redis server / redis client  
2- Git  
3- Composer  

Installation Steps
===================

1. git clone https://github.com/2085020/formacion-redis.git
2. Go to formacion-redis directory
3. curl -sS https://getcomposer.org/installer | php
4. php composer.phar install

Start the server
================
execute: php app/console server:run

open browser to http://127.0.0.1:8000/


Vagrant
=======

you can also start vagrant  
vagrant up

Exercices
=========

1. Set a value to var1 and print in screen
2. Set var1 = 1 and increment it by 1 10 times
3. insert 10 elements into a list and pop them FIFO
4. Use a hash to save data from a user (name, surname, email, telf)
5. Implement the load of stock of 10 products product_PK 1 to 10 by random value between 10 and 20
6. Implement 2 functions to add or remove 1 or more values of this stock