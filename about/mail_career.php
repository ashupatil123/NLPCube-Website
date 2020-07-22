<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];
$position=$_POST['position'];
$message1=$_POST['message'];


$to = 'ganesh.salunke@nlpcube.com'; 
$subject ='Enquiry on Webiste'; 
$message = "<b>Dear Sir/Mam</b>"; 
$message .= "<h6> Mr. $name applied for a Job in NLP Cube. </h6>"; 
$message .= "<b>Name: $name</b>";
$message .= "<b>Contact: $phone</b>";
$message .= "<b>Email: $email</b>";
$message .= "<b>Position: $position</b>";

$message .= "<br>";
$message .= "<b>Message:$message1</b>";
// $header = "From: $mail \r\n"; 
// $header .= "Cc:afgh@somedomain.com \r\n"; 
$header .= "MIME-Version: 1.0\r\n"; 
$header .= "Content-type: text/html\r\n"; 

$retval = mail ($to,$subject,$message,$header); 
 ?>