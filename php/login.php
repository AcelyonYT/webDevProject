<?php require("../phpfunctions.inc") ?>
<?php
// start the session
session_start();

// check for POST variables
if ( isset( $_POST["UserName"] ))
{
// save the user name and password to the session
$_SESSION["UserName"] = $_POST["UserName"];
$_SESSION["Password"] = $_POST["Password"];
// load page 1
header( "Location: login.php" );
exit();
}

// set the title
$Title = "Login Page";

// write out the beginning of the web page
HTMLStart( $Title, "loginStyles.css" );

// write out the header
PageHeader( $Title, $Subtitle );

// now the navigation section
PageNavigation();
?>    

<section>
    <form action="login.php" method="POST">
        <p>User Name: <input name="UserName" type="text" required="true" /></p>
        <p>Password: <input name="Password" type="password" required="true" /></p>
        <p><button type="submit">Login</button></p>
    </form>
</section>

<?php
    // now the page footer
    PageFooter();
    
    // write out the end of the web page
    HTMLEnd();
?>

     