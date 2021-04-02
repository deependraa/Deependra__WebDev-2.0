<?php

   $emailTo = "deependra6260@gmail.com";
   $subject = "How are you";
   $body = "Please give me your contact number";
   $header = "From : deependrasingh12@gmail.com";
   if(mail($emailTo, $subject, $body, $header)){
       echo "mail was sent successfully";
   }else{
       echo "Mail not sent";
   }

?>

