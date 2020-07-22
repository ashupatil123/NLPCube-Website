<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NLP Cube | Get A Quote</title>
    
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
</head>

        <!-- <a href="#slider-section" class="scrolltotop"><span class="ti-angle-double-up"></span> </a> -->

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

<section class="user-details homepage-3 homepage-4">
        <div class="container">
            <div class="row">

		<?php

	 		// User Details from Modal
	 		@$name  =$_POST["name"];
			@$email =$_POST["email"];
			@$phone =$_POST["phone"];
			// @$service_req =$_POST["service_req[]"];
			@$msg =$_POST["message"];
		    
		    @$service = $_POST["service"];
		    
		    // Application
		    // @$type = $_POST["type[]"];
		    @$register = $_POST["register"];
		    @$app_money = $_POST["app-money"];
		    @$connect_app =$_POST["connect-app"];
		    @$app_look =$_POST["app-look"];
		    @$app_budget =$_POST["app-budget"];

		    // Website
		    @$website =$_POST['website'];
		    @$pages =$_POST['pages'];
		    @$admin_panel =$_POST['admin-panel'];
		    @$ecommerce =$_POST['ecommerce'];
		    @$template=$_POST['template'];
		    @$logo=$_POST['logo'];
		    @$web_budget =$_POST["web-budget"];

		    // For Both
		    @$register1 = $_POST["register1"];
		    @$app_money1 = $_POST["app-money1"];
		    @$connect_app1 =$_POST["connect-app1"];
		    @$app_look1 =$_POST["app-look1"];
		    @$website1 =$_POST['website1'];
		    @$pages1 =$_POST['pages1'];
		    @$admin_panel1 =$_POST['admin-panel1'];
		    @$ecommerce1 =$_POST['ecommerce1'];
		    @$admin_panel1 =$_POST['admin-panel1'];
		    @$template1=$_POST['template1'];
		    @$logo1=$_POST['logo1'];
		    @$both_budget =$_POST["both-budget"];
		    
				  
		?>
<div class="col-md-6 col-md-offset-3 details">
	
	<div class="row">
		<h3>User Details</h3><br />
		<b>Name :</b><?php echo "  $name"; ?> <br />
		<b>Email :</b><?php echo "  $email"; ?> <br />
		<b>Phone :</b><?php echo "  $phone"; ?> <br />
		<b>Services :</b><?php foreach(@$_POST['service_req'] as $value3) { echo $value3.', '; } ?> <br />
		<b>Message :</b><?php echo "  $msg"; ?> <br /><br />
	</div>
	
	
	<div class="row">
		<h3>User Requirements</h3>
    
	    <br /><b>Service Required:</b><br />
		<?php echo ucfirst($service); ?>
		<?php //echo '$register'; ?>
	    
	    <?php if($service == 'application'){ 

	    	echo"
			<br /><b>How user logins to Application:</b><br />"
		?>
		<?php
			foreach(@$_POST['login'] as $value) { echo $value.', '; }

			echo "

			<br /><b>Does user needs to create Profile?</b><br />
			
			$register 

			<br /><b>How will you make money from your Application?</b><br />
			
			$app_money 

			<br /><b>Does your App needs to be connected to Website?</b><br />
			
			$connect_app 

			<br /><b>How nice should your App look like?</b><br />
			
			$app_look

			<br /><b>What is your Budget range?</b><br />
			
			$app_budget

			"

			?>
			<?php
			}

			if($service == 'website'){
				
			echo"
			<br /><b>What kind of website to be developed?</b><br />
			
			$website 

			<br /><b>How many pages do you need?</b><br />
			
			$pages

			<br /><b>Do you need Admin Panel?</b><br />
			
			$admin_panel

			<br /><b>Is the website to be developed is Ecommerce?</b><br />
			
			$ecommerce

			<br /><b>How you expect the wesite to be developed?</b><br />

			$template 

			<br /><b>Do you have your Company Logo?</b><br />

			$logo
			
			<br /><b>What is your Budget range?</b><br />
			
			$web_budget

			" 

			?>
			<?php
		
			}

			if($service == 'both'){
				
			echo"
			<br /><b>How user logins to Application:</b><br />"
			?>
			<?php
			foreach(@$_POST['login1'] as $value) { echo $value.', '; } 

			echo"

			<br /><b>Does user needs to create Profile?</b><br />
			
			$register1  

			<br /><b>How will you make money from your Application?</b><br />
			
			$app_money1  

			<br /><b>Does your App needs to be connected to Website?</b><br />
			
			$connect_app1  

			<br /><b>How nice should your App look like?</b><br />
			
			$app_look1  

			<br /><b>What kind of website to be developed?</b><br />
			
			$website1  

			<br /><b>How many pages do you need?</b><br />
			
			$pages1  

			<br /><b>Do you need Admin Panel?</b><br />
			
			$admin_panel1  

			<br /><b>Is the website to be developed is Ecommerce?</b><br />
			
			$ecommerce1  

			<br /><b>How you expect the wesite to be developed?</b><br />

			$template1  

			<br /><b>Do you have your Company Logo?</b><br />

			$logo1  

			<br /><b>What is your Budget range?</b><br />
			
			$web_budget "
			?>
		<?php
			}
			// header('Location: http://nlpcube.com/mail1.php');

		?>
	</div>
	<br />
	<a href="index.php" class="btn btn-success" >Ok</a>
</div>
	<div id="toBeMailed" style="display: none;">
		<?php
			$to = 'ganesh.salunke@nlpcube.com'; 
			$subject ='Quote Enquiry'; 
			$message = "<h3>User Details</h3>"; 
			
			$message .="
		    	Name : $name <br />
		    	Email : $email<br />
		    	Phone : $phone <br />
		    	Message : $msg <br />
			";

			$message .="<h3>User Requirements</h3>";

			if($service == 'application'){ 
				$message .="
			    	<b>Service Required : </b> $service <br /><br />
					
					<h3>Application Details:</h3>

			    	<b>How user logins to Application:</b> <br />
			    	$value . <br />
			    	<b>Does user needs to create Profile? :</b> <br />
			    	$register . <br />
			    	<b>How will you make money from your Application?</b><br />
			    	$app_money . <br />
			    	<b>Does your App needs to be connected to Website?</b>: <br />
			    	$connect_app . <br />
			    	<b>How nice should your App look like?</b> <br />
			    	$app_look . 
			    	<br />
					Thank You.
			    	<br />
			    	


				";
			}
			if($service == 'website'){
				$message .="
					
					<h3>Website Details:</h3>

					<b>What kind of website to be developed?</b> <br />
			    	$website . <br />
			    	<b>How many pages do you need?</b> <br />
			    	$pages . <br />
			    	<b>Do you need Admin Panel?</b> <br />
			    	$admin_panel . <br />
			    	<b>Is the website to be developed is Ecommerce?</b> <br />
			    	$ecommerce . <br />
			    	<b>How you expect the wesite to be developed?</b> <br />
			    	$template . <br />
			    	<b>Do you have your Company Logo?</b> <br />
			    	$logo .

			    	<br />
					Thank You.
			    	<br />

				";
			}

			if($service == 'both'){
				$message .="
			    	<b>Service Required : </b> $service <br /><br />
			    	<h3>Application Details:</h3>
					
			    	<b>How user logins to Application:</b> <br />
			    	$value1 . <br />
			    	<b>Does user needs to create Profile? :</b> <br />
			    	$register1 . <br />
			    	<b>How will you make money from your Application?</b><br />
			    	$app_money1 . <br />
			    	<b>Does your App needs to be connected to Website?</b>: <br />
			    	$connect_app1 . <br />
			    	<b>How nice should your App look like?</b> <br />
			    	$app_look1 . 
			    	<br /><br />

			    	<h3>Website Details:</h3>
			    	
			    	<b>What kind of website to be developed?</b> <br />
			    	$website1 . <br />
			    	<b>How many pages do you need?</b> <br />
			    	$pages1 . <br />
			    	<b>Do you need Admin Panel?</b> <br />
			    	$admin_panel1 . <br />
			    	<b>Is the website to be developed is Ecommerce?</b> <br />
			    	$ecommerce1 . <br />
			    	<b>How you expect the wesite to be developed?</b> <br />
			    	$template1 . <br />
			    	<b>Do you have your Company Logo?</b> <br />
			    	$logo1 .

			    	<br />
					Thank You.
			    	<br />
			    	


				";	
			}

			// $header .= "Cc:afgh@somedomain.com \r\n"; 
			$header .= "MIME-Version: 1.0\r\n"; 
			$header .= "Content-type: text/html\r\n"; 

			$retval = mail ($to,$subject,$message,$header); 

			$message = "Thank you, will get back to you soon.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		?>
	</div>

</div>
</div>
</section>


 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/ajax-subscribe.js"></script>
    <!-- <script src="assets/js/countdown.js"></script> -->
    <script src="assets/js/main.js"></script>




</body>


</html>



