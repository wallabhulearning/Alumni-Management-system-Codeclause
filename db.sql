CREATE DATABASE alumni_management;

USE alumni_management;

CREATE TABLE alumni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    graduation_year INT NOT NULL,
    major VARCHAR(255),
    job_title VARCHAR(255),
    company VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(20)
);
