create database register;
use register;
create table User(
userId int primary key not null auto_increment,
name varchar(50),
email varchar(100),
sex enum("F","M"),
date date
);
select * from User;

insert into User(name,email,sex,date) values("fe","fe@gmail.com","F","2010-04-10")