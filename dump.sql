CREATE DATABASE APUSTORE;
CREATE TABLE USERS (
    email nvarchar(26) primary key,
    password nvarchar(20),
    firstname nvarchar(26),
    lastname nvarchar(26)
);
