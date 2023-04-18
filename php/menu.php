<?php require("../phpfunctions.inc") ?>
<?php
    $StyleArray = ["../css/innergridStyle.css", "../css/menuStyle.css"];
    $JSArray = [];
    HTMLStart("Road Kill Grill", $StyleArray, $JSArray);
    PageNav();
    PageHeader("Menu");
    Connect();
?>
    <!-- Main -->
    <main class="middle innergrid displayGrid">
        <div class="leftside">
            <img class="full" src="../images/logo.PNG">
            <?php 
                MenuItemGet("Appetizers");
                MenuItemGet("Burgers");
            ?>
        </div>          
        <div class="rightside">
            <?php 
                
                MenuItemGet("Poultry");
                MenuItemGet("Salads");
                MenuItemGet("Kids");
            ?>
            <!-- drink list -->
            <h1 class="menuHeader textCenter whiteText">Drinks</h1>
            <h3> Soda <span class="price">$1.99</span></h3>
            <p>Flavors: Coke, Diet Coke, Sprite, Root Beer, Mellow Yellow, Ginger Ale,
                    and Orange</p>
            <h3> Lemonade <span class="price">$1.99</span></h3>
            <p>Flavors: regular, raspberry, strawberry, blueberry and pineapple</p>
            <h3> Iced Tea <span class="price">$1.99</span></h3>
            <p>Flavors: sweet, unsweet, peach, raspberry, and mango</p>
            <h3> Milkshakes <span class="price">$3.99</span></h3>
            <p>Flavors: Chocolate, Vanilla, Strawberry, Cookie Monster, S'mores</p>
        </div>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>