CREATE DATABASE IF NOT EXISTS clg_DB;
USE clg_DB;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL
);
INSERT INTO users (user_name, password, name)
VALUES ('sachin', 'sachin', 'sachin'),;