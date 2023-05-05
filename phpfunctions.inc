<?php
    // start the session
    session_start();
    
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
<?php
        if ( isset( $_SESSION["Email"] ) ) 
        {
            echo "<p class='nav-right right newsize25'>".$_SESSION["Email"]." | <a href='logout.php'>Log Out</a></p>\n";
        }
        else
        {
            echo "<a class='nav-right right newsize25' href='./login.php'>Register Account</a>";
        }
?>
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
    function DatabaseConnect()
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

        return $Connection;
    }
?>

<?php
    function MenuItemGet( $ItemCat )
    {
        $Connection = DatabaseConnect();

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

        $Connection = DatabaseConnect();

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

            echo "<h3>".$DrinkCats[$i]." <span class='right'>$".$Price."</span></h3>\n";
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
            echo "<button class='topbottom whiteText categories' onclick='createAjax(`categoryDisplay`, `./menuItems.php`, `".$CategoryArr[ $i ]."`);'>".$CategoryArr[ $i ]."</button>";
        }
    }
?>

<?php 
    function CreateNewUser()
    {
        $email = $_POST["USER_EMAIL"];
        if ( isset( $_POST["USER_FNAME"] ) )
        {
            if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) 
            {
                $emailErr = "Invalid email format";
                echo '<script type="text/javascript">
                    alert(`'.$emailErr.'`);
                    window.location.href="./login.php";
                </script>';
                exit();
            }

            $Connection = DatabaseConnect();

            $SQL = "INSERT INTO users( USER_EMAIL, USER_PASSWORD, USER_FNAME, USER_LNAME, USER_ADDRESS, USER_CITY, USER_STATE, USER_ZIP) VALUES (";
            $SQL .= "'".$_POST['USER_EMAIL']."', ";
            $SQL .= "'".$_POST['USER_PASSWORD']."', ";
            $SQL .= "'".$_POST['USER_FNAME']."', ";
            $SQL .= "'".$_POST['USER_LNAME']."', ";
            $SQL .= "'".$_POST['USER_ADDRESS']."', ";
            $SQL .= "'".$_POST['USER_CITY']."', ";
            $SQL .= "'".$_POST['USER_STATE']."', ";
            $SQL .= "'".$_POST['USER_ZIP']."');";

            $Results = $Connection->query( $SQL );

            if ( $Results )
            {
                // success message
                $success = "Account successfully created!";
                echo '<script type="text/javascript">
                        alert(`'.$success.'`);
                        window.location.href="./login.php";
                    </script>';
            }
            else
            {
                $errMsg = "Error occured when creating account. Please try again."; 
                echo '<script type="text/javascript">
                        alert(`'.$errMsg.'`);
                        window.location.href="./login.php";
                    </script>';
            }
            $Connection->close();
        }
         else
        {
            // no post data notify the user
            $fail = "Account could not be created. More information is needed.";
            echo '<script type="text/javascript">alert('.$fail.');</script>';
        }

    }
?>