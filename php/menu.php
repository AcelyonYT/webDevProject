<?php require("../phpfunctions.inc") ?>
<?php
    $StyleArray = ["../css/innergridStyle.css", "../css/menuStyle.css"];
    $JSArray = [];
    HTMLStart("Road Kill Grill", $StyleArray, $JSArray);
    PageNav();
    PageHeader("Menu");
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
                $Drinks = ["Soda", "Lemonade", "Iced Tea", "Milkshakes"];
                DrinkItemGet( $Drinks );
                MenuItemGet("Poultry");
                MenuItemGet("Salads");
                MenuItemGet("Kids");
            ?>
        </div>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>