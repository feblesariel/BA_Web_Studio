<?php
$name     =  $_POST['name'];
$email    =  $_POST['email'];
$phone    =  $_POST['phone'];
$message  =  $_POST['message'];

$header .= 'From: ' . $email  . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$to = "info@bawebstudio.com";
$subjet = "Sent from bawebstudio.com";
$body = "Name: ".$name."\nE-mail: ".$email."\nWhatsApp: ".$phone."\nMessage: ".$message;

if ($name != "") {
mail($to,$subjet,$body,$header);
header("Location: https://bawebstudio.com/en/");    
} else
header("Location: https://bawebstudio.com/en/");

?>