<?php
$email_status= false;

if(isset($_POST['email']) && $_POST['email'] != ''){
    
     if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

         $email=$_POST['email'];
         $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $message=$_POST['message'];
         $receiver="jennifer000@rocketmail.com";

        mail($receiver,"the message",$message);

        $email_status=true;

     }

}



