<?php
     $link = mysqli_connect("localhost","deependra","password@123","example") ;
     if(mysqli_connect_error()) {
         die ("Their was an error in connecting to the database");
     }

    if(array_key_exists('email' , $_POST ) OR array_key_exists('password', $_POST) ){
        if($_POST('email')==""){
            echo "The email is required";
        }else if($_POST('password') == ""){
            echo "The password is required";
        }else{
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."' ";   
            $result = mysqli_query($query, $link);
            if(mysqli_num_rows($result) > 0 ){
                echo "This email is laready been taken";
            }else{
                $query = " INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."' ,
                ('" .mysqli_real_escape_string($link,$_POST['password'])."')";

                if(mysqli_query($link,$query)){
                    echo "You are successfully signed in";
                }else{
                    echo "Theis is a probleum signing you in. Please try again later";
                }
            }
        }
    }

   
    $name = "Lionado 'De Caprio";
    // $query = "SELECT * FROM users WHERE id= 1";
    // $query = "SELECT * FROM users WHERE email LIKE '%gmail.com' ";
    // $query = "SELECT * FROM users WHERE email LIKE '%gmail%' ";
    // $query = "SELECT email FROM users WHERE id =1 ";
    // $query = "SELECT email FROM users WHERE id >=2 AND email LIKE '%gmail%' ";
    // $query = "SELECT email FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."' ";




    // if($result = mysqli_query($link, $query)){
    //     while($row =  mysqli_fetch_array($result)){
    //         print_r($row);
    //     }
       
       
    // }
    

?>
 <form action="POST">
        
        <input name="email" type="text" placeholder="Email">
        <input type="password" name="password" placeholder="Enter password">
        <input type="Submit" value="SignUp">
 </form>