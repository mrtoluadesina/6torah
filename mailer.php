<?php
$email_status= false;

if (isset($_POST['submit'])){

     if(isset($_POST['email']) && $_POST['email'] != ''){
    
          if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

               $email=$_POST['email'];
               $firstname=$_POST['firstname'];
               $lastname=$_POST['lastname'];
               $message=$_POST['message'];
               $receiver="jennifer000@rocketmail.com";

               $headers = "From: " . $email;
               $body= "You have received a mail from " .$firstname.".\n\n".$message;

               mail($receiver,"the Subject",$body,$headers);

               $email_status=true;

               //header("Location : ");
          }

     }

}




