<!doctype html>


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
                    <form  method="post" name="slider">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" placeholder="username" name="uname" id="uname" required="required">
                        </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" class="form-control" placeholder="Password" name="psw" id="pwd" required="required">
                        </div>
                                <div class="checkbox">
                                    <label>
                            <!--    <input type="checkbox"> Remember Me -->
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>
                              <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="check()"> Sign in</button>
                       
                                </div>
                                <div class="register-link m-t-15 text-center">
                                
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
 function check()
 {
var user = "admin";
var pass = "admin";

var uname= document.getElementById("uname").value;
var pwd= document.getElementById("pwd").value;

if(user == uname && pass == pwd)
{
window.open('dashboard.php')
}
else
{
 alert("You have entered wrong username or password !!!");
  
}
}
</script>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>



