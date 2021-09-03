<?php
//get data from form  

$name = $_POST['firstname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "sivaganesh2k@gmail.com";
$subject = "Mail From Yours Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@myportfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>