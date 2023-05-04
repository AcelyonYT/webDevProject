<?php
    require "phpfunctions.inc";

    session_destroy();

    header("Location: index.php");
?>