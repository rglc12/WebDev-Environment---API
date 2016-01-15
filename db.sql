CREATE DATABASE WebDevEnvironment;

USE WebDevEnvironment;

CREATE TABLE User(
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  logbook TEXT
);

CREATE TABLE Catagory(
  id INT PRIMARY KEY AUTO_INCREMENT,
  catagory_name VARCHAR(30) NOT NULL,
  catagory_description TEXT NOT NULL
);

CREATE TABLE Question(
  id INT PRIMARY KEY AUTO_INCREMENT,
  userID INT NOT NULL,
  catagoryID INT NOT NULL,
  question TEXT NOT NULL,
  detail TEXT,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT userIDFK FOREIGN KEY (userID) REFERENCES User(id),
  CONSTRAINT catagoryIDFK FOREIGN KEY (catagoryID) REFERENCES Catagory(id)
);

CREATE TABLE Reply(
  id INT PRIMARY KEY AUTO_INCREMENT,
  questionID INT NOT NULL,
  userID INT NOT NULL,
  reply TEXT NOT NULL,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT user_IDFK FOREIGN KEY (userID) REFERENCES User(id),
  CONSTRAINT questionIDFK FOREIGN KEY (questionID) REFERENCES Question(id)
);
