<?php
$name=$_POST['name'];
$mail=$_POST['email'];
$message1=$_POST['message'];



// echo $name;
// echo $mail;
// echo $subjectdata;
// echo $message1;

// echo "<h1> Mr. $name Send you Enquiry From Web Site. </h1>";
// echo "<b style='font-size:50px'> $massage </b>";
// echo "<b style='font-size:50px'> $Select </b>";
//   die();
$to = 'ganesh.salunke@nlpcube.com'; 
$subject ='Enquiry on Webiste'; 
$message = "<b>Dear Sir/Mam</b>"; 
$message .= "<h6> Mr. $name tried contacting us from Web Site. </h6>"; 
// $message .= "<b>Query:$subjectdata</b>";
$message .= "<br>";
$message .= "<b>Message:$message1</b>";
$header = "From: $mail \r\n"; 
// $header .= "Cc:afgh@somedomain.com \r\n"; 
$header .= "MIME-Version: 1.0\r\n"; 
$header .= "Content-type: text/html\r\n"; 

$retval = mail ($to,$subject,$message,$header); 
 ?>