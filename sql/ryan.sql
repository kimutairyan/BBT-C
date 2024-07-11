SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- create database

DROP DATABASE IF EXISTS ryan;
CREATE DATABASE IF NOT EXISTS ryan DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ryan;

-- create table

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    id int(1) NOT NULL AUTO_INCREMENT,
    name varchar(8) NOT NULL ,
    dateCreated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dateUpdated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY (name)
)ENGINE=InnoDB;

-- truncate table

TRUNCATE TABLE 'table_1';

-- insert data

INSERT INTO 'table_1'('id', 'name', 'dateCreated', 'dateUpdated')
VALUES('1','Ryan','','');