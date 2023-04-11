-- Active: 1679940753444@@127.0.0.1@3306@homework
CREATE TABLE MENU (
    ITEM_ID             INTEGER AUTO_INCREMENT PRIMARY KEY,
    ITEM_NAME           VARCHAR(30),
    ITEM_CATEGORY       VARCHAR(10),
    ITEM_PRICE          DECIMAL(10,2),
    ITEM_DESCRIPTION    VARCHAR(10000)
);

INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("appetizers", "Tire Track Fries", "Fries loaded with nacho cheese, caramelized onions, bacon, and our secret road style sauce!", 9.99)
;