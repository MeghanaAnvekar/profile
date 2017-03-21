create database my_details;

use my_details;

create table personal(name varchar(20),age int,dob date,year int);

create table qual(contents varchar(100));

create table interests(hobbies varchar(30));

create table achievements(contents varchar(100));

create table contacts(contact varchar(10),address varchar(100));

insert into personal(name,age,dob,year) VALUES('Meghana Anvekar','20','1997-01-27','2015');

insert into qual(contents) VALUES('High School Graduate');

insert into interests(hobbies) VALUES('Reading Novels');

insert into interests(hobbies) VALUES('Singing');

insert into interests(hobbies) VALUES('Travelling');

insert into interests(hobbies) VALUES('Cooking');

insert into interests(hobbies) VALUES('Internet Surfing');

insert into achievements(contents) VALUES('I am a good person :)');

 insert into contacts(contact,address) VALUES('9999999999','home');

