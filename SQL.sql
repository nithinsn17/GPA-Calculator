show databases;
create database DevOpsProject;
use DevOpsProject;
show tables;

create table users(
email varchar(264) ,
password varchar(264) 
);
drop table users;
select * from users;
truncate table users;