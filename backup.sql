CREATE DATABASE IF NOT EXISTS docker;

USE docker;

CREATE TABLE IF NOT EXISTS clothes (`name` VARCHAR(50), `price` VARCHAR(50));

INSERT INTO clothes (`name`, `price`) VALUES ("Shirt", "50");
INSERT INTO clothes (`name`, `price`) VALUES ("Jeans jacket", "100");
INSERT INTO clothes (`name`, `price`) VALUES ("Headband", "10");
