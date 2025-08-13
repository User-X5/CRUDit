<?php
    session_start();

    if( !(isset($_SESSION['name'])))
    { 
        header("location: /finalproject/index.php"); 
    }
    
    if(isset($_SESSION['name']) || isset($_SESSION['role'])) {
        session_unset();
        session_destroy();

        header("location: /finalproject/index.php");
    }
?>