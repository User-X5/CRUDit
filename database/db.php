<?php

    session_start();
    

    $host = "localhost";
    $name = "root";
    $pass = "";
    $dbn  = "finalproject";


    $connect = mysqli_connect( $host, $name, $pass, $dbn);



    
    /*  //test connection
    
    if($connect) {
        echo "connected";
    }else {
        echo "error";
    }
        
    */

?>