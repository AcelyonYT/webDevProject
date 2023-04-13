<?php require("../phpfunctions.inc") ?>
<?php
    $StyleArray = ["../css/takeoutStyle.css", "../css/innergridStyle.css"];
    $JSArray = ["../javascript/takeoutScript.js"];
    HTMLStart("Road Kill Grill", $StyleArray, $JSArray);
    PageNav();
    PageHeader("Take-Out");
?>
    <main class="displayGrid middle innergrid">
        <div class="leftside">
            <div class="textCenter">
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/appetizers.php');">Appetizers</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/burgers.php');">Burgers</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/poultry.php');">Poultry</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/salads.php');">Salads</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/kids.php');">Kids</button>
                <button class="topbottom whiteText categories" onclick="GetCategory('./orderItems/drinks.php');">Drinks</button>
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