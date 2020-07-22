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

    <body>
        <form id="regForm" method="POST" action="cleint_requirements.php">

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title center">Pesonal Details</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                            
                            <div class="col-md-12 homepage-3 homepage-4">
                                <!-- <h2 class="text-capitalize">Personal Details</h2><br /> -->
                                <!-- <form id="digita-contact-form" action="#" method="POST"> -->

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*" required>
                                        <span id="err_Name"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email Address*" required>
                                        <span id="err_Email"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Contact Number*" required>
                                        <span id="err_phone"></span>
                                    </div>
                                    <div class="form-group check">
                                        <b>Services you might be intrested in other than Application / Website Development :</b><br />
                                        
                                            <span><input type="checkbox" name="service_req[]" value="Graphic Designing" style="display: inline-block; margin: 0 2px;">Graphic Designing</span>
                                            <span><input type="checkbox" name="service_req[]" value="Logo Designing " style="display: inline-block; margin: 0 2px;">Logo Designing </span>
                                            <span><input type="checkbox" name="service_req[]" value="Sarch Engine Optimization" style="display: inline-block; margin: 0 2px;">Sarch Engine Optimization</span>
                                            <span><input type="checkbox" name="service_req[]" value="Application Optimization" style="display: inline-block; margin: 0 2px;">Application Optimization</span>
                                            <span><input type="checkbox" name="service_req[]" value="Digital Marketing" style="display: inline-block; margin: 0 2px;">Digital Marketing</span>
                                        
                                    </div>

                                    <div class="form-group">
                                        <textarea id="Message" class="form-control" rows="3" name="message" placeholder="Write Message*"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-blue" style="right: 1%;bottom: -30px;">
                                            <img src="assets/img/icons/send-icon.png" alt="place your img">
                                        </button>
                                    </div>
                                    
                                <!-- </form> -->
                            </div>

                        </div>
                  </div>
                  
                </div>

            </div>
        </div>
        <!-- timeline -->

    <section class="tab-area homepage-3 homepage-4">
        <div class="container">
            <div class="row">
                <div class=" main">
                    <h1 class="">What can we Develope fo you?</h1>
                    <div class="row">
                        <div class="col-md-4 card">
                            <input type="radio"  onclick="javascript:app();" name="service" class="Submit" id="radio1" value="application">
                            <label for="radio1">
                                <i class="fas fa-mobile-alt step-icon"></i>
                               
                                <span>Mobile App</span>
                            </label>
                        </div>

                        <div class="col-md-4 card">
                            <input type="radio"  onclick="javascript:web();" name="service" class="Submit" id="radio2" value="website">
                            <label for="radio2">
                                <i class="fas fa-globe step-icon"></i>
                               <span>Website</span>
                            </label>
                        </div>
                        
                        <div class="col-md-4 card">
                            <input type="radio"  onclick="javascript:both();" name="service" class="Submit" id="radio3" value="both">
                            <label for="radio3">
                                <img src="assets/img/others/app-web.png" width="35%">
                               <span>Mobile App + Website</span>
                            </label>
                        </div>
                    
                    </div>
                    
                </div>
                

                <div id="application" class="application" >
                    <div class=" app" id="app0">
                        <h1 class="">What type of Application need to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app0();" name="type[]" class="login2" id="Professional" value="Professional" >
                                <label for="Professional">
                                    <i class="fas fa-user-tie step-icon"></i>
                                   
                                    <span>Professional</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app0();" name="type[]" class="login2" id="Games" value="Games" >
                                <label for="Games">
                                    <i class="fas fa-gamepad step-icon"></i>
                                   <span>Games</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app0();" name="type[]" class="login2" id="Software" value="Software" >
                                <label for="Software">
                                    <i class="fas fa-cogs step-icon"></i> 
                                    <span>Software</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <div class=" app" id="app1">
                        <h1 class="">How user logins to Application</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app1();" name="login[]" class="login2" id="email" value="Email" >
                                <label for="email">
                                    <i class="fas fa-envelope step-icon"></i>
                                   
                                    <span>Email</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app1();" name="login[]" class="login2" id="social" value="Social" >
                                <label for="social">
                                    <i class="fas fa-thumbs-up step-icon"></i>
                                   <span>Social</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app1();" name="login[]" class="login2" id="login-dn" value="Don't Know" >
                                <label for="login-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>


                    <!-- Tab 3 -->

                    <div class=" app" id="app2">
                        <h1 class="">Does user needs to create Profile? </h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" name="register" onclick="javascript:app2();" id="register" value="Register">
                                <label for="register">
                                    <i class="fas fa-user-plus step-icon"></i>
                                    <span>Register</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" name="register" onclick="javascript:app2();" id="no-register" value="Not needed">
                                <label for="no-register">
                                    <i class="fas fa-user-times step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" name="register" onclick="javascript:app2();" id="register-dn" value="Dont't Know">
                                <label for="register-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 4 -->

                    <div class="app" id="app3">
                        <h1 class="">How will you make money from your Application</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app3();" name="app-money" id="upfront" value="Upfront">
                                <label for="upfront">
                                    <i class="fas fa-money-bill-alt step-icon"></i>
                                    <span>Upfront Cost</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app3();" name="app-money" id="in-app" value="In app purchase">
                                <label for="in-app">
                                    <i class="fas fa-shopping-cart step-icon"></i>
                                    <span>In App Purchase</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app3();" name="app-money" id="money-dn" value="Don't Know">
                                <label for="money-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 5 -->

                    <div class="app" id="app4">
                        <h1 class="">Does your App needs to be connected to Website?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app4();" name="connect-app" id="connect-app" value="Connect">
                                <label for="connect-app">
                                    <i class="fas fa-laptop-code step-icon"></i>
                                    <span>Connect</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app4();" name="connect-app" id="no-connect" value="Not Needed">
                                <label for="no-connect">
                                    <i class="fas fa-unlink step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app4();" name="connect-app" id="connection-dn" value="Don't Know">
                                <label for="connection-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 6 -->

                    <div class="app" id="app5">
                        <h1 class="">How nice should your App look like?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app5();" name="app-look" id="basic" value="Basic">
                                <label for="basic">
                                    <i class="fas fa-smile step-icon"></i>
                                    <span>Basic</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app5();" name="app-look" id="average" value="Average">
                                <label for="average">
                                    <i class="fas fa-grin step-icon"></i>
                                    <span>Average</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app5();" name="app-look" id="excellent" value="Excellent">
                                <label for="excellent">
                                    <i class="fas fa-grin-hearts step-icon"></i> 
                                    <span>Excellent</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <div class="app" id="app6">
                        <h1 class="">What is your Budget range?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app6();" name="app-budget" id="budget-low" value="Below 1 Lakh">
                                <label for="budget-low">
                                    <img src="assets/img/others/less.png" width="35%">
                                    <span>Below 1 Lakh</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app6();" name="app-budget" id="budget-average" value="1 Lakh to 5 Lakh">
                                <label for="budget-average">
                                    <img src="assets/img/others/average.png" width="35%">
                                    <span>1 Lakh to 5 Lakh</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app6();" name="app-budget" id="budget-high" value="Above 5 Lakh">
                                <label for="budget-high">
                                    <img src="assets/img/others/high.png" width="35%">
                                    <span>Above 5 Lakh</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->
                </div>

                <div id="website" class="website" >
                    <div class="web" id="web1">
                        <h1 class="">What kind of website to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web1();" class="web1" name="website" id="static" value="Static">
                                <label for="static">
                                    <i class="fas fa-file-invoice step-icon"></i>
                                    <span>Static</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web1();" class="web1" name="website" id="dynamic" value="Dynamic">
                                <label for="dynamic">
                                    <i class="fas fa-file-code step-icon"></i>
                                   <span>Dynamic</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web1();" class="web1" name="website" id="web-dn" value="Dont Know">
                                <label for="web-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                   <span>Dont Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- Tab 2 -->

                    <div class="web" id="web2">
                        <h1 class="">How many pages do you need?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web2();" name="pages" id="single-page" value="Single Page">
                                <label for="single-page">
                                    <i class="fas fa-file step-icon"></i>
                                    <span>Single Page</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web2();" name="pages" id="multi-page" value="Multi Page">
                                <label for="multi-page">
                                    <i class="fas fa-print step-icon"></i>
                                   <span>Multi Page</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web2();" name="pages" id="page-dn" value="Don't Know">
                                <label for="page-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- Tab 3 -->

                    <div class="web" id="web3">
                        <h1 class="">Do you need Admin Panel? </h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web3();" name="admin-panel" id="admin-panel" value="Admin Panel Needed" >
                                <label for="admin-panel">
                                    <i class="fas fa-tachometer-alt step-icon"></i>
                                    <span>Admin Panel</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web3();" name="admin-panel" id="no-admin-panel" value="Not Needed" >
                                <label for="no-admin-panel">
                                    <i class="fas fa-user-times step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web3();" name="admin-panel" id="admin-panel-dn" value="Don't Know" >
                                <label for="admin-panel-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 4 -->

                    <div class="web" id="web4">
                        <h1 class="">Is the website to be developed is Ecommerce?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web4();" name="ecommerce" id="ecommerce" value="Ecommerce">
                                <label for="ecommerce">
                                    <i class="fas fa-shopping-cart step-icon"></i>
                                    <span>Ecommerce</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web4();" name="ecommerce" id="no-ecommerce" value="No">
                                <label for="no-ecommerce">
                                    <i class="fas fa-times step-icon"></i>
                                    <span>No</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web4();" name="ecommerce" id="ecommerce-dn" value="Don't Know">
                                <label for="ecommerce-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 5 -->

                    <div class="web" id="web5">
                        <h1 class="">How you expect the wesite to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web5();" name="template" id="template" value="Using Template">
                                <label for="template">
                                    <i class="fas fa-file-image step-icon"></i>
                                    <span>Using Template</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web5();" name="template" id="scratch" value="From Scratch">
                                <label for="scratch">
                                    <i class="fas fa-file-alt step-icon"></i>
                                    <span>From Scratch</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web5();" name="template" id="developed-base-dn" value="Don't Know">
                                <label for="developed-base-dn">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 6 -->

                    <div class="web" id="web6">
                        <h1 class="">Do you have your Company Logo?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web6();" name="logo" id="logo" value="Yes">
                                <label for="logo">
                                    <i class="fas fa-crosshairs step-icon"></i>
                                    <span>Yes</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web6();" name="logo" id="design-logo" value="To be Designed">
                                <label for="design-logo">
                                    <i class="fas fa-pencil-ruler step-icon"></i>
                                    <span>To be Designed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web6();" name="logo" id="not-needed" value="Not Needed">
                                <label for="not-needed">
                                    <i class="fas fa-times step-icon"></i> 
                                    <span>Not Needed</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <div class="app" id="web7">
                        <h1 class="">What is your Budget range?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web7();" name="web-budget" id="web-budget-low" value="Below 1 Lakh">
                                <label for="web-budget-low">
                                    <img src="assets/img/others/less.png" width="35%">
                                    <span>Below 1 Lakh</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web7();" name="web-budget" id="web-budget-average" value="1 Lakh to 5 Lakh">
                                <label for="web-budget-average">
                                    <img src="assets/img/others/average.png" width="35%">
                                    <span>1 Lakh to 5 Lakh</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web7();" name="web-budget" id="web-budget-high" value="Above 5 Lakh">
                                <label for="web-budget-high">
                                    <img src="assets/img/others/high.png" width="35%">
                                    <span>Above 5 Lakh</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                </div>

                <div id="both" class="both">
                    
                    <div class=" app" id="app00">
                        <h1 class="">What type of Application need to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app00();" name="type1[]" class="login2" id="Professional1" value="Professional" >
                                <label for="Professional1">
                                    <i class="fas fa-user-tie step-icon"></i>
                                   
                                    <span>Professional</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app00();" name="type1[]" class="login2" id="Games1" value="Games" >
                                <label for="Games1">
                                    <i class="fas fa-gamepad step-icon"></i>
                                   <span>Games</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app00();" name="type1[]" class="login2" id="Software1" value="Software" >
                                <label for="Software1">
                                    <i class="fas fa-cogs step-icon"></i> 
                                    <span>Software</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <div class=" app" id="app01">
                        <h1 class="">How user logins to Application</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app01();" name="login1[]" class="login2" id="email1" value="Email" >
                                <label for="email1">
                                    <i class="fas fa-envelope step-icon"></i>
                                   
                                    <span>Email</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app01();" name="login1[]" class="login2" id="social1" value="Social" >
                                <label for="social1">
                                    <i class="fas fa-thumbs-up step-icon"></i>
                                   <span>Social</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="checkbox" onclick="javascript:app01();" name="login1[]" class="login2" id="login-dn1" value="Don't Know" >
                                <label for="login-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>


                    <!-- Tab 3 -->

                    <div class=" app" id="app02">
                        <h1 class="">Does user needs to create Profile? </h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" name="register1" onclick="javascript:app02();" id="register1" value="Register">
                                <label for="register1">
                                    <i class="fas fa-user-plus step-icon"></i>
                                    <span>Register</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" name="register1" onclick="javascript:app02();" id="no-register1" value="Not needed">
                                <label for="no-register1">
                                    <i class="fas fa-user-times step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" name="register1" onclick="javascript:app02();" id="register-dn1" value="Dont't Know">
                                <label for="register-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 4 -->

                    <div class="app" id="app03">
                        <h1 class="">How will you make money from your Application</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app03();" name="app-money1" id="upfront1" value="Upfront">
                                <label for="upfront1">
                                    <i class="fas fa-money-bill-alt step-icon"></i>
                                    <span>Upfront Cost</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app03();" name="app-money1" id="in-app1" value="In app purchase">
                                <label for="in-app1">
                                    <i class="fas fa-shopping-cart step-icon"></i>
                                    <span>In App Purchase</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app03();" name="app-money1" id="money-dn1" value="Don't Know">
                                <label for="money-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 5 -->

                    <div class="app" id="app04">
                        <h1 class="">Does your App needs to be connected to Website?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app04();" name="connect-app1" id="connect-app1" value="Connect">
                                <label for="connect-app1">
                                    <i class="fas fa-laptop-code step-icon"></i>
                                    <span>Connect</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app04();" name="connect-app1" id="no-connect1" value="Not Needed">
                                <label for="no-connect1">
                                    <i class="fas fa-unlink step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app04();" name="connect-app1" id="connection-dn1" value="Don't Know">
                                <label for="connection-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->

                    <!-- Tab 6 -->

                    <div class="app" id="app05">
                        <h1 class="">How nice should your App look like?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app05();" name="app-look1" id="basic1" value="Basic">
                                <label for="basic1">
                                    <i class="fas fa-smile step-icon"></i>
                                    <span>Basic</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app05();" name="app-look1" id="average1" value="Average">
                                <label for="average1">
                                    <i class="fas fa-grin step-icon"></i>
                                    <span>Average</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:app05();" name="app-look1" id="excellent1" value="Excellent">
                                <label for="excellent1">
                                    <i class="fas fa-grin-hearts step-icon"></i> 
                                    <span>Excellent</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- tab ends -->


                    <div class="web" id="web01">
                        <h1 class="">What kind of website to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web01();" class="web01" name="website1" id="static1" value="Static">
                                <label for="static1">
                                    <i class="fas fa-file-invoice step-icon"></i>
                                    <span>Static</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web01();" class="web01" name="website1" id="dynamic1" value="Dynamic">
                                <label for="dynamic1">
                                    <i class="fas fa-file-code step-icon"></i>
                                   <span>Dynamic</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web01();" class="web01" name="website1" id="web-dn1" value="Dont Know">
                                <label for="web-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                   <span>Dont Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- Tab 2 -->

                    <div class="web" id="web02">
                        <h1 class="">How many pages do you need?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web02();" name="pages1" id="single-page1" value="Single Page">
                                <label for="single-page1">
                                    <i class="fas fa-file step-icon"></i>
                                    <span>Single Page</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web02();" name="pages1" id="multi-page1" value="Multi Page">
                                <label for="multi-page1">
                                    <i class="fas fa-print step-icon"></i>
                                   <span>Multi Page</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web02();" name="pages1" id="page-dn1" value="Don't Know">
                                <label for="page-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <!-- Tab 3 -->

                    <div class="web" id="web03">
                        <h1 class="">Do you need Admin Panel? </h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web03();" name="admin-panel1" id="admin-panel1" value="Admin Panel Needed" >
                                <label for="admin-panel1">
                                    <i class="fas fa-tachometer-alt step-icon"></i>
                                    <span>Admin Panel</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web03();" name="admin-panel1" id="no-admin-panel1" value="Not Needed" >
                                <label for="no-admin-panel1">
                                    <i class="fas fa-user-times step-icon"></i>
                                    <span>Not Needed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web03();" name="admin-panel1" id="admin-panel-dn1" value="Don't Know" >
                                <label for="admin-panel-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 4 -->

                    <div class="web" id="web04">
                        <h1 class="">Is the website to be developed is Ecommerce?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web04();" name="ecommerce1" id="ecommerce1" value="Ecommerce">
                                <label for="ecommerce1">
                                    <i class="fas fa-shopping-cart step-icon"></i>
                                    <span>Ecommerce</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web04();" name="ecommerce1" id="no-ecommerce1" value="No">
                                <label for="no-ecommerce1">
                                    <i class="fas fa-times step-icon"></i>
                                    <span>No</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web04();" name="ecommerce1" id="ecommerce-dn1" value="Don't Know">
                                <label for="ecommerce-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 5 -->

                    <div class="web" id="web05">
                        <h1 class="">How you expect the wesite to be developed?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web05();" name="template1" id="template1" value="Using Template">
                                <label for="template1">
                                    <i class="fas fa-file-image step-icon"></i>
                                    <span>Using Template</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web05();" name="template1" id="scratch1" value="From Scratch">
                                <label for="scratch1">
                                    <i class="fas fa-file-alt step-icon"></i>
                                    <span>From Scratch</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web05();" name="template1" id="developed-base-dn1" value="Don't Know">
                                <label for="developed-base-dn1">
                                    <i class="fas fa-exclamation step-icon"></i> 
                                    <span>Don't Know</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- tab ends -->

                    <!-- Tab 6 -->

                    <div class="web" id="web06">
                        <h1 class="">Do you have your Company Logo?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web06();" name="logo1" id="logo1" value="Yes">
                                <label for="logo1">
                                    <i class="fas fa-crosshairs step-icon"></i>
                                    <span>Yes</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web06();" name="logo1" id="design-logo1" value="To be Designed">
                                <label for="design-logo1">
                                    <i class="fas fa-pencil-ruler step-icon"></i>
                                    <span>To be Designed</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web06();" name="logo1" id="not-needed1" value="Not Needed">
                                <label for="not-needed1">
                                    <i class="fas fa-times step-icon"></i> 
                                    <span>Not Needed</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                    <div class="app" id="web07">
                        <h1 class="">What is your Budget range?</h1>
                        <div class="row">
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web07();" name="both-budget" id="both-budget-low" value="Below 1 Lakh">
                                <label for="both-budget-low">
                                    <img src="assets/img/others/less.png" width="35%">
                                    <span>Below 1 Lakh</span>
                                </label>
                            </div>

                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web07();" name="both-budget" id="both-budget-average" value="1 Lakh to 5 Lakh">
                                <label for="both-budget-average">
                                    <img src="assets/img/others/average.png" width="35%">
                                    <span>1 Lakh to 5 Lakh</span>
                                </label>
                            </div>
                            
                            <div class="col-md-4 card">
                                <input type="radio" onclick="javascript:web07();" name="both-budget" id="both-budget-high" value="Above 5 Lakh">
                                <label for="both-budget-high">
                                    <img src="assets/img/others/high.png" width="35%">
                                    <span>Above 5 Lakh</span>
                                </label>
                            </div>
                        
                        </div>
                        
                    </div>

                </div> 


                <center>
                    <button type="button" name="next" class="success" id="requirements" data-toggle="modal" data-target="#myModal">Next Step</button>
                    
                </center> 
            </div>
        </div>
    </section>
</form>
    </body>

    

    <?php
        // include"footer.php";
    ?>
    <script>
        //services
        function app() {
            $("#application").show("slow");
            $("#website").hide("slow");
            $("#both").hide("slow");
        }

        function web() {
            $("#website").show("slow");
            $("#application").hide("slow");
            $("#both").hide("slow");
        }

        function both() {
            $("#both").show("slow");
            $("#application .app").hide("slow");
            $("#website ").hide("slow");
        }

        //Application
        function app0() {
            $("#app1").show("slow");
            // $("#app1").hide("slow");
        }

        function app1() {
            $("#app2").show("slow");
            
        }

        function app2() {
            $("#app3").show("slow");
            
        }

        function app3() {
            $("#app4").show("slow");
             
        }

        function app4() {
            $("#app5").show("slow");
            

        }

        function app5() {
            $("#app6").show("slow");
            

        }

        function app6() {
            $("#requirements").show("slow");

        }
        

        //Website
        function web1() {
            $("#web2").show("slow");
            // $("#web1").hide("slow");
        }

        function web2() {
            $("#web3").show("slow");
            
        }

        function web3() {
            $("#web4").show("slow");
            
        }

        function web4() {
            $("#web5").show("slow");
            
        }


        function web5() {
            $("#web6").show("slow");
            
        }

        function web6() {
            $("#web7").show("slow");
            
        }

        function web7() {
            $("#requirements").show("slow");
            
        }

        //Both

        function app00() {
            $("#app01").show("slow");
            // $("#app01").hide("slow");
        }

        function app01() {
            $("#app02").show("slow");
            // $("#app01").hide("slow");
        }

        function app02() {
            $("#app03").show("slow");
            // $("#app02").hide("slow");
        }

        function app03() {
            $("#app04").show("slow");
            // $("#app03").hide("slow");
        }

        function app04() {
            $("#app05").show("slow");
            // $("#app04").hide("slow");
        }
        
        function app05() {
            $("#web01").show("slow");
            // $("#app05").hide("slow");
        }

        function web01() {
            $("#web02").show("slow");
            // $("#web01").hide("slow");
        }

        function web02() {
            $("#web03").show("slow");
            // $("#web02").hide("slow");
        }

        function web03() {
            $("#web04").show("slow");
            // $("#web03").hide("slow");
        }

        function web04() {
            $("#web05").show("slow");
            // $("#web04").hide("slow");
        }

        function web05() {
            $("#web06").show("slow");
            // $("#web05").hide("slow");
        }

        function web06() {
            $("#web07").show("slow");
            // $("#web05").hide("slow");
        }

        function web07() {
            $("#requirements").show("slow");
            // $("#web06").hide("slow");
        }

        

        
    </script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/ajax-subscribe.js"></script>
    <!-- <script src="assets/js/countdown.js"></script> -->
    <script src="assets/js/main.js"></script>




</body>


</html>



