<?php

/*Database Information*/

const DBHOST = "localhost";         // Host Name
const DBUSER= "root";               // Username for the database
const DBPASS = "root";              // Database Password
const DBNAME = "WebDevEnvironment"; // Database Name

/*Database Tables*/

const DBTABLES = "CREATE TABLE IF NOT EXISTS User (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Logbook (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  logbook TEXT
);

CREATE TABLE IF NOT EXISTS Question (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  question TEXT NOT NULL,
  detail TEXT,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Reply (
  id INT PRIMARY KEY AUTO_INCREMENT,
  questionID INT NOT NULL,
  username VARCHAR(255) NOT NULL,
  reply TEXT NOT NULL,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT questionIDFK FOREIGN KEY (questionID) REFERENCES Question(id)
);"

?>
