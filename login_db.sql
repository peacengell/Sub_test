

CREATE DATABASE login_sys;

use login_sys;

CREATE TABLE users (

uid INT PRIMARY KEY AUTOINCREMENT,
username VARCHAR(30) UNIQUE,
password VARCHAR(50),
name VARCHAR(100),
email VARCHAR(70) UNIQUE

);

