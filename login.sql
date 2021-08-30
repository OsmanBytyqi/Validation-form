create database loginform;
 
 use loginform;

 create table user(
     id int not null auto_increment,
     username varchar(20),
     email varchar(50),
     password varchar(30),
     telephone varchar(30),
     slug varchar(30),
     primary key(id)
 );