<?php include("phpfunctions.inc") ?>
<?php
    HTMLStart("Road Kill Grill");
?>
    <link rel="stylesheet" href="../css/takeoutStyle.css">
    <link rel="stylesheet" href="../css/innergridStyle.css">
    <script src="../javascript/takeoutScript.js" defer></script>
<?php 
    HTMLStartCont();
    PageNav();
    PageHeader("Take-Out");
?>
    <main class="displayGrid middle innergrid">
        <div class="leftside">
            <div class="textCenter">
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/appetizers.html');">Appetizers</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/burgers.html');">Burgers</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/poultry.html');">Poultry</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/salads.html');">Salads</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/kids.html');">Kids</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/drinks.html');">Drinks</button>
            </div>
            <section id="categoryDisplay">
                <h3>Click button to display category menu</h3>
                
            </section>
        </div>
        <div class="rightside">
            <h3><img src="../images/shoppingCart.png"> Shopping Cart</h3>
            <div id="orderlist" class="middle cartlist" ondragover="AllowDrop(event);" ondrop="Drop(event, 'orderlist');">
            </div>
            <div class="price price-box">
                <p class="total"> Total:</p>
                <p class="tax"> Tax:</p>
                <p class="subtotal"> Subtotal:</p>
            </div>
        </div>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>