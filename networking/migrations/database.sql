CREATE DATABASE IF NOT EXISTS `docker_course`;

USE docker_course;

CREATE TABLE IF NOT EXISTS `users`
(
    `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL
);

INSERT INTO users (name, lastname) VALUES ("Andreu", "Sala");
INSERT INTO users (name, lastname) VALUES ("John", "Doe");
INSERT INTO users (name, lastname) VALUES ("Man", "Foo");