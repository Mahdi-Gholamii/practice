CREATE DATABASE setup;

USE setup;

CREATE TABLE product (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    description TEXT
);

CREATE TABLE user (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
	role VARCHAR(100),
    password VARCHAR(100)
);