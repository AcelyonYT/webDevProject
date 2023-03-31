<?php
    // function to start HTML page
    function HTMLStart( $title ) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title ?></title>
            <link rel="stylesheet" href="../css/stylesheet.css">
<?php        
    }
?>

<?php
    // function to finish starting HTML page
    function HTMLStartCont() {
?>
    </head>
    <body class="container displayGrid">
<?php       
    }
?>

<?php
    // function to end HTML page
    function HTMLEnd() {
?>
        </body>
        </html>
<?php> 
    }
?>

<?php
    // function to write the navigation
    function PageNav() {
?>
        <!-- navigation stuff -->
        <nav class="topbottom">
            <ul class="nav-bar textCenter">
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./index.html">Home</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./about.html">About</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./menu.html">Menu</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./takeout.html">Order</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./contact.html">Contact</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./map.html">Map</a></li>
            </ul>
        </nav>
<?php        
    }
?>

<?php
    // function to write the footer
    function PageHeader( $HeaderTitle ) {
?>
        <!-- Header -->
        <header>
            <h1 class="indentleft whiteText"><?php echo $HeaderTitle ?></h1>
        </header>
<?php        
    }
?>

<?php
    // function to write the footer
    function PageFooter() {
?>
        <!-- Footer -->
        <footer class="topbottom">
            <p class="indentleft">copyright 2023</p>
        </footer>
<?php        
    }
?>

<?php
    // function to write the sidebar
    function Sidebar1() {
?>
        <!-- side bar1-->
        <aside class="sidebar1 middle">
        </aside>
<?php        
    }
?>

<?php
    // function to write the sidebar
    function Sidebar2() {
?>
        <!-- side bar1-->
        <aside class="sidebar2 middle">
        </aside>
<?php        
    }
?>