<?php
    session_start();    
    session_unset();
    sessison_destroy();
    header("location: Mainpage.php");
    exit;
?>