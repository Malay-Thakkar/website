<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$to = "its.malaythakkar@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n  Message =" . $message;
$headers = "From: its.malaythakkar@gmail.com" . "\r\n" .
"CC: malaythakkar15@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>