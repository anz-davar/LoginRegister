create database login_register; # create database

use login_register; # switch(use) to  this database(if we have multiple databases on server)

create table users (
                       id INT AUTO_INCREMENT PRIMARY KEY ,
                       email varchar(50) unique not null ,
                       password varchar(50) not null,
                       username varchar(50) unique not null
);