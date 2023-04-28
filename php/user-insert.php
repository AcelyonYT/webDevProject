<?php require("../phpfunctions.inc") ?>
<?php 
    $StyleArray = [];
    $JSArray = [];
    HTMLStart("User Created", $StyleArray, $JSArray);
?>
    <h1>Account Created!</h1>
        <?php
            // call the insert function
            CreateNewUser();
        ?>
        <a href="index.php">Return to Main Page</a>
<?php
    HTMLEnd();
?>