These are the tables needed the MySQL database

CREATE TABLE messages (
    cid int NOT NULL AUTO_INCREMENT,
    sender varchar(255) NOT NULL,
    recipient varchar(255),
    messageType int,
    message varchar(10000),
    dateSent varchar(10),
    
    PRIMARY KEY (cid)
);

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255),
    signUpDate datetime,
    profilePic varchar(10000),
    
    PRIMARY KEY (id)
);

DROP TABLE messages;