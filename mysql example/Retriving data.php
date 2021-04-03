<?php


    $link = mysqli_connect("localhost","deependra","password@123","example") ;
    if(mysqli_connect_error()) {
        die ("Their was an error in connecting to the database");
    }

    $query = "SELECT * FROM users";

    if($result = mysqli_query($link, $query)){
       $row =  mysqli_fetch_array($result);
       
       echo "your email is".$row[1];
    }

?>