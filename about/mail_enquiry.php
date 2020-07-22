<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];
$message1=$_POST['message'];
$comp_name=$_POST['comp_name'];
$comp_web=$_POST['comp_web'];
$budget=$_POST['budget'];
$service=$_POST['service'];



$to = 'ganesh.salunke@nlpcube.com'; 
$subject ='Enquiry on Webiste'; 
$message = "<b>Dear Sir/Mam</b>"; 
$message .= "<h6> Mr. $name made Enquiry on Web Site. </h6>"; 
$message .= "<b>Name: $name</b>";
$message .= "<b>Contact: $phone</b>";
$message .= "<b>Email: $email</b>";
$message .= "<b>Service: $servce</b>";
$message .= "<b>Budget: $budget</b>";
$message .= "<b>Company Name: $comp_name</b>";
$message .= "<b>Company Webiste: $comp_web</b>";
$message .= "<br>";
$message .= "<b>Message:$message1</b>";
$header = "From: $mail \r\n"; 
// $header .= "Cc:afgh@somedomain.com \r\n"; 
$header .= "MIME-Version: 1.0\r\n"; 
$header .= "Content-type: text/html\r\n"; 

$retval = mail ($to,$subject,$message,$header); 
 ?>