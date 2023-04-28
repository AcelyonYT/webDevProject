create table users
(
    USER_EMAIL           varchar(50),
    USER_PASSWORD        varchar(50),
    USER_FNAME            varchar(50),
    USER_LNAME            varchar(50),
    USER_ADDRESS         varchar(50),
    USER_CITY            varchar(50),
    USER_STATE           char(2),
    USER_ZIP             char(5),
        primary key( USER_EMAIL )
);