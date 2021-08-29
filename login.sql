create database loginform;
 
 use loginform;

 create table user(
     id int not null auto_increment,
     email varchar(30),
     password varchar(30),
     telephone int,
     slug varchar(30),
     primary key(id)
 );