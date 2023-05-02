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
    $Title = "Login";
    $StyleArray = ["../css/stylesheet.css"];
    $JSArray = [];
    // write out the beginning of the web page
    HTMLStart( $Title, $StyleArray, $JSArray );
    // write out the header
    PageHeader( $Title );
?>
    <main>
        <form action="index.php" method="POST">
            <p>Username: <input name="UserName" type="text" required="true" /></p>
            <p>Password: <input name="Password" type="password" required="true" /></p>
            <p><button type="submit">Login</button></p>
        </form>
        <p>Don't have an account? <button onclick="">Register Here!</button></p>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>