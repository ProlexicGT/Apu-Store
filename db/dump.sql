CREATE DATABASE apustore;

CREATE TABLE users (
    user_id int NOT NULL PRIMARY KEY,
    email_address varchar(255) NOT NULL,
    password varchar(255) NOT NULL
);