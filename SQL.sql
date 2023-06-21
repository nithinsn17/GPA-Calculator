show databases;
create database DevOpsProject;
use DevOpsProject;
show tables;

create table users(
email varchar(264) PRIMARY KEY,
password varchar(264) NOT NULL
);