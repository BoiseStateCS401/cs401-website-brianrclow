-- Brian Clow
-- This is my database schema for my webdev project

-- the webdev database on mysql
USE webDev;

DROP TABLE IF EXISTS users;

-- this will be the table of current users
CREATE TABLE users (
	userId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,         -- userID used as primary for all data
    name VARCHAR (50) NOT NULL,                             -- name of user
	email VARCHAR(100) NOT NULL UNIQUE,                     -- email of user
	password VARCHAR (256) NOT NULL                         -- password for user
);


-- Insert test data into your table so you have something to start with.
INSERT INTO users (name, email, password) VALUES('brian','brian@gmail.com','Password123');
INSERT INTO users (name, email, password) VALUES('robert','robert@gmail.com','Password123');
INSERT INTO users (name, email, password) VALUES('clow','clow@gmail.com','Password123');
