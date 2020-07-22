<?php
session_start();
$message="";

if(count($_POST)>0) {
	$con = mysqli_connect('localhost','root','','nlpadmin');
	$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		$_SESSION["id"] = $row['id'];
		$_SESSION["name"] = $row['name'];
	} else {
		$message = "<b style='color: red;'>Invalid Username or Password!</b>";
	}
}

if(isset($_SESSION["id"])) {
	header("Location:dashboard.php");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NLPAdmin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css" />

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head> 
<body class="bg-dark">
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    
                        
			<form name="frmUser" method="post" action="" align="center">
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
				<h3 align="center">Enter Login Details</h3><br />
				<div class="form-group">
                	<!-- <label>username</label> -->
                    <input type="text" class="form-control" placeholder="username" name="user_name"id="uname" required="required">
                </div>
                <div class="form-group" >
                    <!-- <label>password</label> -->
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
				
				<input type="submit" class="btn btn-success" name="submit" value="Submit">
				<!-- <input type="reset"> -->
			</form>
		</div>
	</div>



</body>
</html>