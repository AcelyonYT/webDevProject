<?php require("../phpfunctions.inc") ?>
<?php
    // check for POST variables
    if ( isset( $_POST["UserName"] ))
    {
        // save the user name and password to the session
        $_SESSION["UserName"] = $_POST["UserName"];
        $_SESSION["Password"] = $_POST["Password"];
        // load page 1
        header( "Location: index.php" );
        exit();
    }
    // set the title
    $Title = "Login";
    $StyleArray = ["../css/stylesheet.css"];
    $JSArray = ["../javascript/forms.js", "../javascript/ajax.js"];
    // write out the beginning of the web page
    HTMLStart( $Title, $StyleArray, $JSArray );
    // write out the header
    PageHeader( $Title );
?>
    <main id="forms" onload="createAjax('forms', 'loginForm.php', '');">
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>