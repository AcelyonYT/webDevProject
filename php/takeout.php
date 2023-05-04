<?php require("../phpfunctions.inc") ?>
<?php
    $StyleArray = ["../css/takeoutStyle.css", "../css/innergridStyle.css"];
    $JSArray = ["../javascript/takeoutScript.js", "../javascript/ajax.js"];
    HTMLStart("Road Kill Grill", $StyleArray, $JSArray);
    PageNav();
    PageHeader("Take-Out");
?>
    <main class="displayGrid middle innergrid">
        <div class="leftside">
            <div class="textCenter">
                <?php
                    $CataArr = ["Appetizers", "Burgers", "Poultry", "Salads", "Kids", "Drinks"];
                    takeoutButtons( $CataArr );
                ?>
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