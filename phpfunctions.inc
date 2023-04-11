<?php
    // function to start HTML page
    function HTMLStart( $title, $StyleArray, $JSArray ) {
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
        // Loops through an array and returns a link tag with the stylesheets
        for( $i = 0; $i < count($StyleArray); $i++ )
        {
            echo "<link rel='stylesheet' href='".$StyleArray[$i]."'>";
        }

        // Checks if we have any js files
        if( count($JSArray) > 0) 
        {
            // Loops through an array and returns a script tag with the js file
            for( $i = 0; $i < count($JSArray); $i++ )
            {
                echo "<script src='".$JSArray[$i]."' defer></script>";
            }
        }
?>
        </head>
        <body class="container displayGrid">
<?php 
    }
?>

<?php
    // function to write the navigation
    function PageNav() {
?>
        <!-- navigation stuff -->
        <nav class="topbottom">
            <ul class="nav-bar textCenter">
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./index.php">Home</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./about.php">About</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./menu.php">Menu</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./takeout.php">Order</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./contact.php">Contact</a></li>
                <li class="nav-list"><a class="links whiteText noDec newsize25" href="./map.php">Map</a></li>
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

<?php
    // function to end HTML page
    function HTMLEnd() {
?>
        </body>
        </html>
<?php
    }
?>