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
        <div class="nav-container displayGrid navArea topbottom textCenter full">
            <nav class="nav-left">
                <ul class="nav-bar">
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./index.php">Home</a></li>
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./about.php">About</a></li>
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./menu.php">Menu</a></li>
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./takeout.php">Order</a></li>
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./contact.php">Contact</a></li>
                    <li class="nav-list"><a class="links whiteText noDec newsize25" href="./map.php">Map</a></li>
                </ul>
            </nav>
            <a class="nav-right right newsize25 " href="./login.php">Register Account</a>
        </div>
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
<?php
    function MenuItemGet( $ItemCat )
    {
        $Server = "127.0.0.1";
        $Username = "root";
        $Password = "test";
        $Database = "homework";

        $Connection = new mysqli( $Server, $Username, $Password, $Database );

        if( $Connection->connect_error )
        {
            echo "<h2>Database Error</h2>\n";
            die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
        }

        $SQL = "SELECT ITEM_CATEGORY, ITEM_NAME, ITEM_DESCRIPTION, ITEM_PRICE FROM MENU WHERE ITEM_CATEGORY = '".$ItemCat."';";
        $Results = $Connection->query( $SQL );

        if ($Results)
        {

            echo "<h1 class='menuHeader textCenter whiteText'>".$ItemCat."</h1>\n";

            while($Row = $Results->fetch_row())
            {
                echo "<h3>".$Row[1]." <span class='right'>$".$Row[3]."</span></h3>\n";
                echo "<p>".$Row[2]."</p>\n";
            }
        }  
        else 
        {
            // no results returned
            echo "<p>No results returned from the query</p>\n";
        }

        $Connection->close();
    }
?>
<?php
    function DrinkItemGet( $DrinkCats )
    {

        $Server = "127.0.0.1";
        $Username = "root";
        $Password = "test";
        $Database = "homework";

        $Connection = new mysqli( $Server, $Username, $Password, $Database );

        if( $Connection->connect_error )
        {
            echo "<h2>Database Error</h2>\n";
            die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
        }

        echo "<h1 class='menuHeader textCenter whiteText'>Drinks</h1>\n";

        for($i=0; $i<count($DrinkCats); $i++)
        {
            
            $SQL = "SELECT ITEM_NAME, ITEM_PRICE FROM MENU WHERE ITEM_DESCRIPTION = '".$DrinkCats[$i]."';";
            $Results = $Connection->query( $SQL );
            
            $Description = "Flavors:";
            $Price = "";

            if ($Results)
            {
                
                while($Row = $Results->fetch_row())
                {
                    $Description = $Description." ".$Row[0].",";
                    $Price = $Row[1];
                }
            }
            else 
            {
                // no results returned
                echo "<p>No results returned from the query</p>\n";
            }

            echo "<h3>".$DrinkCats[$i]." <span class='price'>$".$Price."</span></h3>\n";
            echo "<p>".$Description."</p>\n";
        }

        $Connection->close();
    }
?>

<?php
    function takeoutButtons( $CategoryArr )
    {
        for( $i = 0; $i < count( $CategoryArr ); $i++ )
        {
            echo "<button class='topbottom whiteText categories' onclick='GetCategory(`categoryDisplay`, `".$CategoryArr[ $i ]."`);'>".$CategoryArr[ $i ]."</button>";
        }
    }
?>