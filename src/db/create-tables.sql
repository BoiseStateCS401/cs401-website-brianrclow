-- Brian Clow
-- This is my database schema for my webdev project

-- the webdev database on mysql
USE webDev;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS tasks;

-- this will be the table of current users
CREATE TABLE users (
	userId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,         -- userID used as primary for all data
    name VARCHAR (50) NOT NULL,                             -- name of user
	email VARCHAR(100) NOT NULL UNIQUE,                     -- email of user
	password VARCHAR (256) NOT NULL                         -- password for user
);

-- this will be the table of current tasks
CREATE TABLE tasks (
    taskId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,         -- id of task
    FOREIGN KEY (userId) REFERENCES users(userId),          -- who posted task
    title VARCHAR(100) NOT NULL,                            -- title of task
    description VARCHAR(256) NOT NULL,                      -- description of task
    dueDate DATE NOT NULL                                   -- when is task due
);

-- Insert test data into your table so you have something to start with.
INSERT INTO users (name, email, password) VALUES('brian','brianclow@u.boisestate.edu','Password123');
INSERT INTO users (name, email, password) VALUES('robert','brianrclow@gmail.com','Password123');
INSERT INTO users (name, email, password) VALUES('clow','theavocadoking14@gmail.com','Password123');

-- Insert test data into table for a task
INSERT INTO tasks (userId, title, description, dueDate) VALUES('1','dishes','we need get the dishes done!','2019-11-01');
INSERT INTO tasks (userId, title, description, dueDate) VALUES('2','laundry','we need get the clothes washed!','2019-11-05');
