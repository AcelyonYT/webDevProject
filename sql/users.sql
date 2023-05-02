-- Active: 1679940753444@@127.0.0.1@3306@homework
CREATE TABLE users (
    USER_EMAIL              VARCHAR(60) PRIMARY KEY,
    USER_PASSWORD           VARCHAR(60),
    USER_FNAME              VARCHAR(50),
    USER_LNAME              VARCHAR(50),
    USER_ADDRESS            VARCHAR(50),
    USER_CITY               VARCHAR(50),
    USER_STATE              CHAR(2),
    USER_ZIP                CHAR(5)
);