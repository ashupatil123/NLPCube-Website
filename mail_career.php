<?php

if(isset($_POST['submit'])){
	$con = mysqli_connect('localhost','root','','nlpadmin');
    if($con){

        // echo " Databse connection is succesfull.";

    }
    else{
      echo "connection is not established";
    }

    mysqli_select_db($con,'nlpadmin');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $position = $_POST['position'];
    $msg = $_POST['msg'];


	$targetDir ="admin/resume/";
     
    $fileName = basename($_FILES['pic']['name']);
                        
    $targetFilePath = $targetDir.$fileName;
      	
	if(move_uploaded_file($_FILES["pic"]["tmp_name"], $targetFilePath))
	{
	$insertValuesSQL = "resume/".$fileName;

	}
	$insertValuesSQL= "INSERT INTO `jobs`(`name`, `email`, `contactno`, `position`, `file_name`, `msg`) 
		VALUES ('$name','$email',$contactno,'$position','$insertValuesSQL','$msg')";

	mysqli_query($con,$insertValuesSQL);
}
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NLP Cube | Resume Upload</title>
    
    <meta name="description" content="NLP Cube - Professional and Creative Augmented Reality Software, Mobile Application and Website Development company based in Pune India. Also offering other services ecommerce websites development, web application development, ecommerce development,search engine optimization services in Pune, India." />
    <meta name="keywords" content="Android application development company,website development company,software development company, mobile application development, Augmented Reality Development Company,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="NLP Cube, Pune" />
    <meta name="development" content="NLP Cube" />
    <meta name="robots" content="index, follow" />
    <meta name="REVISIT-AFTER" content="2 days" />
    <meta name="url" content="www.nlpcube.com" />
    <link href="www.nlpcube.com" rel="canonical" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" href="assets/img/logo/cube-32.png">
    <link rel="icon" href="assets/img/logo/cube-32.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/elements.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		h2.token{
			text-align: center;
		}
	</style>
</head>

        <a href="#slider-section" class="scrolltotop"><span class="ti-angle-double-up"></span> </a>

<body class="home-one">
        <div class="preloader-wrapper">
            <div class="preloader loading">
              <span class="slice"></span>
              <span class="slice"></span>
              <span class="slice"></span>
              <span class="slice"></span>
              <span class="slice"></span>
              <span class="slice"></span>
            </div>
         </div> 
<section id="countdown-area" class="countdown-area homepage-3 homepage-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="countdown-table wow fadeInUp" data-wow-duration="2s" data-wow-delay=".25s">
                        <div class="countdown-table-cell">
                            <h2 class="token">Resume Uploaded Successfully</h2>
							<h4>Our team will get back to you soon.</h4>
                            

                            <div class="post-meta clearfix">
                                
                                <div class="buy-coin pull-right">
                                    <a href="career.php" class="buy-coin-btn">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/ajax-subscribe.js"></script>
    
    <script src="assets/js/main.js"></script>
    


</body>

</html>


<?php
// $name=$_POST['name'];
// $phone=$_POST['phone'];
// $mail=$_POST['email'];
// $position=$_POST['position'];
// $message1=$_POST['message'];


// $to = 'ganesh.salunke@nlpcube.com'; 
// $subject ='Enquiry on Webiste'; 
// $message = "<b>Dear Sir/Mam</b>"; 
// $message .= "<h6> Mr. $name applied for a Job in NLP Cube. </h6>"; 
// $message .= "<b>Name: $name</b>";
// $message .= "<b>Contact: $phone</b>";
// $message .= "<b>Email: $email</b>";
// $message .= "<b>Position: $position</b>";

// $message .= "<br>";
// $message .= "<b>Message:$message1</b>";
// $header = "From: $mail \r\n"; 
// $header .= "Cc:afgh@somedomain.com \r\n"; 
// $header .= "MIME-Version: 1.0\r\n"; 
// $header .= "Content-type: text/html\r\n"; 

// $retval = mail ($to,$subject,$message,$header); 
 ?>