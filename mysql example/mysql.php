<?php


    mysqli_connect("localhost","deependra","password@123") ;
    if(mysqli_connect_error()) {
        echo ("Their was an error in connecting to the database");
    }else{
        echo ("Database Connected");
    }


?>