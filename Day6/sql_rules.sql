/* SQL - Structured Query Language */
/*
Basics rules:
- The symbol * means 'all the attibutes'
- Strings have to be surrounded by simple quotes
- Date also have to be surrounded by simple quotes
- Numbers shouldn't be surround by quotes
*/

CREATE DATABASE movieDB;

CREATE TABLE movies (
    movie_id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    releaseYear YEAR
);