<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NLP Cube | Career</title>
    
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


    <?php 
        $page="career";
        include "header.php"; 
        include"config.php"
    ?>



    <section id="slider-section" class="blog-page-breatcrums blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="blog-page-content-table">
                      <div class="blog-table-cell">
                        <h4>Career</h4>
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </section>

    <!-- introduction -->

    <section id="work_area" class="work_area homepage-3 homepage-4" style="padding-bottom: 50px;">
        <div class="container">
            <div class="row animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                <div class="col-md-6">
                    
                    <div class="section-title ">
                        <h2 class="animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">Life At <span>NLP Cube</span></h2>
                        <!-- <p class="animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">We are proud to be a awesome theam. They are really awespme people with their good knoledge.</p> -->
                        <p class="animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">NLPCube Technologies is the foremost ISO certified 9001: 2008 and private limited IT company, which has marked its flagship in 5+ countries with 50+ projects successfully accomplished.</p>
                        <br />
                        <!-- <div class="slider-links ">
                            <ul>
                                <li><a href="#" class="slider-btn animated wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Read More</a></li>
                            </ul>
                        </div> -->
                    </div>
                    
             
                </div>

                <div class="col-md-6">
                    <div class="promo-video-area">
                        <div class="video-demo-image">
                            <div class="overlay-grad-one">
                                <img src="assets/img/bg-shape/home-3-vedio-bg-2.png" alt="place your img" class="img-responsive center-block">
                            </div>
                            <div class="video-area-bg">
                                <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=5SVR7x1ENm4"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- timeline -->

    <section id="faq-area" class="faq-area homepage-3 homepage-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Want to join our Team?</h2>
                        <p class="animated wow  fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">Check out the below openings in our organization and apply for the job by filling the Form.</p>
                    </div>
                </div>
            </div>    <!--TAB AREA-->
            <div class="row">
                <div class="col-md-6">
                    <div class="tabs animated-slide-2">
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                            <?php
                                function ShowData(){

                                global $con;
                                $query = "SELECT * FROM admintable";
                                $run = mysqli_query($con,$query);
                                if($run == TRUE){

                            
                                    while($data = mysqli_fetch_assoc($run)){
                                    
                                        

                            ?>
                                <article class="beefup example-opensingle ">
                                    <h4 class="beefup__head">
                                        <?php echo $data['posname'];?>
                                        <span class="ti-angle-down"></span>
                                    </h4>

                                    <div class="beefup__body" >
                                        <p><b>Position Name:</b> <?php echo $data['posname'];?></p>
                                        <p><b>Salary:</b> <?php echo $data['salary'];?></p>
                                        <p><b>No of Positions:</b> <?php echo $data['no_position'];?></p>
                                        <?php
                                            if($data['exp']!=''){
                                        ?><p><b>Experience & Qualification:</b> <?php echo $data['exp'];?></p>
                                        <?php
                                            }
                                        
                                            if($data['job_summary']!=''){
                                        ?><p><b>Job Description:</b> <?php echo $data['job_summary'];?></p>
                                        <?php
                                            }
                                       
                                            if($data['skill']!=''){
                                        ?><p><b>Key Skills:</b> <?php echo $data['skill'];?></p>
                                        <?php
                                            }

                                            if($data['resp']!=''){
                                        ?>
                                        <p><b>Resposibilities & Duties:</b> <?php echo $data['resp'];?></p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </article>

                                <?php
                                }}}
                            ?>
                            <?php ShowData(); ?>

                                
                            
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6 career-form homepage-3 homepage-4">
                    <h2 class="text-capitalize">Apply Now</h2><br />
                    <form method="POST" enctype="multipart/form-data"/>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="Email" name="email" placeholder="Email Address*" required="">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="phone" name="contactno" placeholder="Your Contact Number*" required="">
                        </div>
                        <div class="form-group">
                            Select Position:
                            <select id="position" name="position" required="">
                                 <?php
                                    function ShowData1(){

                                    global $con;
                                    $query = "SELECT * FROM admintable";
                                    $run = mysqli_query($con,$query);
                                    if($run == TRUE){

                                
                                        while($data = mysqli_fetch_assoc($run)){
                                        
                                            

                                ?>
                                <option><?php echo $data['posname'];?></option>
                                <?php
                                    }}}
                                ?>
                                <?php ShowData1(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <!-- <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Contact Number*"> -->
                            Upload Updated Resume <br /><b>(Type: PDF | Doc | Docx, Max Size 1MB)</b><input class="form-control" name="pic" type="file" multiple="multiple" required="" /> 
                        </div>

                        <div class="form-group">
                            <textarea id="Message" class="form-control" rows="3" name="msg" placeholder="Write Message*"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-blue" name="submit" formaction="mail_career.php" style="left: 50%;">
                                <img src="assets/img/icons/send-icon.png" alt="place your img">
                            </button>
                        </div>
                        <p class="contact-send-message"></p>
                    </form>
                </div>

            </div>
            
            
        
        </div>
    </section>


    
    <?php


           include"footer.php";
    ?>
    <script type="text/javascript">
        
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
