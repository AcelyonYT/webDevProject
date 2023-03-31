<?php include("../phpfunctions.inc") ?>
<?php
    HTMLStart("Road Kill Grill");
?>
    <link rel="stylesheet" href="./css/homeStyle.css">
<?php 
    HTMLStartCont();
    PageNav();
    PageHeader("Home");
?>
    <main class="homeMain middle">
        <h2 class="newsize whiteText textCenter">Welcome to Road Kill Grill</h2>
        <div class="slides fade">
            <img class="full" src="./images/Cheeseburger-Salad-2048x1365-1024x683-3148355378.jpg">
        </div>
    
        <div class="slides fade">
            <img class="full" src="./images/fast-food-1337656779.jpg">
        </div>
    
        <div class="slides fade">
            <img class="full" src="./images/bbq-food-685468004.jpg">
        </div>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
?>
    <script src="./javascript/slideshow.js"></script>
<?php 
    HTMLEnd();
?>