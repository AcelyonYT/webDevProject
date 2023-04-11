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
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("burgers", " Royal Racoon Burger ", "A massive burger built for a king topped with lettuce, tomato,onion, cheddar cheese, and our secret road style sauce", 12.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("burgers", "Road Kill Burger", "A burger on a pretzel bun, loaded with cheese sauce, and topped with crispy fried onions", 12.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("burgers", "Totaled Car Burger", "A massive quarter pound burger topped with gruyere cheese, sprouts, caramelized onions, mushrooms, and a garlic aioli", 13.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("burgers", "I Can't Believe It's Not Opossum Burger", "This vegetarian burger made with impossible meat will blow you mind! Topped with lettuce, tomato, onion, cheddar cheese, and our secret road style sauce", 11.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("poultry", "Flattened Chicken Sandwich", "A breaded in our spice blend and fried chicken breast on a bun with garlic aioli, lettuce, and tomato", 9.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("poultry", "Wild Bird Sandwich", "locally hunted wild bird breaded with our special spice blend and fried. Served on a bun with our special hot sauce and pickles", 11.99)
;
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES("poultry", "Chicken Finger Basket", "4 chicken fingers served with fries and a side of our garlic aioli", 8.99)
;


