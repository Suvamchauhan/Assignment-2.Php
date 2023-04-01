CREATE DATABASE assignment_2;
USE assignment_2;
CREATE TABLE users
(
    userId        int PRIMARY KEY AUTO_INCREMENT,
    username      varchar(200) UNIQUE,
    password      varchar(200),
    password_hash varchar(200)
);
CREATE TABLE pages
(
    pageId      int PRIMARY KEY AUTO_INCREMENT,
    pageTitle   varchar(255),
    pageContent text
);
CREATE TABLE logo
(
    logoId int PRIMARY KEY AUTO_INCREMENT,
    logo   varchar(255)
);