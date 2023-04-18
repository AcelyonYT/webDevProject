-- Active: 1679940753444@@127.0.0.1@3306@homework
CREATE TABLE MENU (
    ITEM_ID             INTEGER AUTO_INCREMENT PRIMARY KEY,
    ITEM_NAME           VARCHAR(60),
    ITEM_CATEGORY       VARCHAR(10),
    ITEM_PRICE          DECIMAL(10,2),
    ITEM_DESCRIPTION    VARCHAR(10000)
);

-- Appetizers
INSERT INTO menu( ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE )
    VALUES
        ("appetizers", "Tire Track Fries", "Fries loaded with nacho cheese, caramelized onions, bacon, and our secret road style sauce!", 9.99),
        ("appetizers", "Road Style Nachos", "Corn tortilla chips smothered in nacho cheese sauce, topped with jalapenos, pico de gallo, refried beans, guacamole, sour cream, and our secret road style sauce!", 7.99),
        ("appetizers", "Fried Pickles", "House-made pickles battered and fried served with our house-made peppercorn ranch!", 6.99),
        ("appetizers", "Mozzarella Sticks", "Fries loaded with nacho cheese, caramelized onions, bacon, and our secret road style sauce!", 5.99),
        ("kids", "Chicken Fingers", "2 chicken fingers with a side of fries served on a racoon shaped plate.", 5.99),
        ("kids", "Grilled Cheese", "An american cheese grilled cheese with a side of fries served on a opossum shaped plate.", 4.99),
        ("kids", "Mac and Cheese with Hot Dogs", "Our mac and cheese with sliced hot dogs served in a car shaped plate.", 5.99),
        ("kids", "Junior Burger", "A plain hamburger or cheese burger with a side of fries served up in a car shaped plate.", 6.99),
        ("salads", "Mystery Meat Salad","A fresh bed of spring mix topped with grilled meat, onions, fried green peppers, olives, grilled mushrooms, parmesan cheese, and our house-made italian dressing.", 10.99),
        ("salads", "Roast Wild Bird Salad","Locally sourced wild bird roasted and plated on a bed of greens topped with grilled onion, artichoke hearts, parmesan cheese, and house-made basalmic dressing", 11.99),
        ("salads", "Roadside Greens Salad","Spring mix greens topped with pomegranate seeds, apple, feta cheese, walnuts, and house-made honey basalmic dressing.", 9.99),
        ("drinks", "Coke","Soda", 1.99),
        ("drinks", "Diet Coke","Soda", 1.99),
        ("drinks", "Sprite","Soda", 1.99),
        ("drinks", "Root Beer","Soda", 1.99),
        ("drinks", "Mellow Yellow","Soda", 1.99),
        ("drinks", "Ginger Ale","Soda", 1.99),
        ("drinks", "Orange Soda","Soda", 1.99),
        ("drinks", "Lemonade","Lemonade", 1.99),
        ("drinks", "Raspberry Lemonade","Lemonade", 1.99),
        ("drinks", "Strawberry Lemonade","Lemonade", 1.99),
        ("drinks", "Blueberry Lemonade","Lemonade", 1.99),
        ("drinks", "Pineapple Lemonade","Lemonade", 1.99),
        ("drinks", "Sweet Iced Tea","Iced Tea", 1.99),
        ("drinks", "Unsweet Iced Tea","Iced Tea", 1.99),
        ("drinks", "Peach Iced Tea","Iced Tea", 1.99),
        ("drinks", "Raspberry Iced Tea","Iced Tea", 1.99),
        ("drinks", "Mango Iced Tea","Iced Tea", 1.99),
        ("drinks", "Chocolate Milkshake","Milkshake", 3.99),
        ("drinks", "Vanilla Milkshake","Milkshake", 3.99),
        ("drinks", "Strawberry Milkshake","Milkshake", 3.99),
        ("drinks", "Cookie Monster Milkshake","Milkshake", 3.99),
        ("drinks", "S'mores Milkshake","Milkshake", 3.99),
        ("burgers", "Royal Racoon Burger ", "A massive burger built for a king topped with lettuce, tomato,onion, cheddar cheese, and our secret road style sauce", 12.99),
        ("burgers", "Road Kill Burger", "A burger on a pretzel bun, loaded with cheese sauce, and topped with crispy fried onions", 12.99),
        ("burgers", "Totaled Car Burger", "A massive quarter pound burger topped with gruyere cheese, sprouts, caramelized onions, mushrooms, and a garlic aioli", 13.99),
        ("burgers", "I Can't Believe It's Not Opossum Burger", "This vegetarian burger made with impossible meat will blow you mind! Topped with lettuce, tomato, onion, cheddar cheese, and our secret road style sauce", 11.99),
        ("poultry", "Flattened Chicken Sandwich", "A breaded in our spice blend and fried chicken breast on a bun with garlic aioli, lettuce, and tomato", 9.99),
        ("poultry", "Wild Bird Sandwich", "locally hunted wild bird breaded with our special spice blend and fried. Served on a bun with our special hot sauce and pickles", 11.99),
        ("poultry", "Chicken Finger Basket", "4 chicken fingers served with fries and a side of our garlic aioli", 8.99)
;