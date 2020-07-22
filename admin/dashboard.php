

<?php 
session_start();

if($_SESSION["name"]) {

$page="dash";
include 'slider.php';
include 'config.php';




    $sql="SELECT name FROM enquiry ";

    if ($result=mysqli_query($con,$sql))
    {
       $our_jobs=mysqli_num_rows($result);
       mysqli_free_result($result);
    }

    $sql0="SELECT name FROM enquire ";

    if ($result=mysqli_query($con,$sql0))
    {
       $enquire=mysqli_num_rows($result);
       mysqli_free_result($result);
    }

    $sql1="SELECT name FROM contact ";

    if ($result=mysqli_query($con,$sql1))
    {
        $contact=mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    $sql2="SELECT name FROM quote ";

    if ($result=mysqli_query($con,$sql2))
    {
        $quote=mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    $sql3="SELECT name FROM testimonial ";

    if ($result=mysqli_query($con,$sql3))
    {
        $testimonial=mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    $sql4="SELECT name FROM jobs ";

    if ($result=mysqli_query($con,$sql4))
    {
        $applicant=mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    $sql5="SELECT posname FROM admintable ";

    if ($result=mysqli_query($con,$sql5))
    {
        $job=mysqli_num_rows($result);
        mysqli_free_result($result);
    }
      


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
 
<style type="text/css">
    #search1{
        display:inline-flex!important;
    }
    .title{
        text-align: center;
        padding: 10px;
    }
    .data-block{
        background-color: #7c64c7;
        color: #ffffff;
        text-align: center;
        min-height: 150px;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 10px;
        margin: 2% 0;
         box-shadow: 15px 15px 20px 0px rgba(0, 0, 0, 0.25)
        
    }
    .data-block h3{
        padding: 10px;
    }

    .data-block p{
        padding: 10px;
        color: #ffffff;
        font-size: 20px;
    }
    .data-block .fa{
        font-size: 50px;
        padding: 10px; 
    }
</style>
<body>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 data">
                        <h2 class="title">Welcome to NLP Cube Admin Dashboard.</h2>
                    </div>
                    <div class="col-md-12 data">
                        
                        <div class="col-md-4 col-sm-6">
                            
                            <a href="enquiry.php"> 
                                <div class="data-block">
                                    <i class="fa fa-edit"></i>
                                    <h3>Enquiries</h3>
                                    <p><?php echo $our_jobs; ?></p>
                                </div>
                            </a>
                            
   
                        </div>
                        <div class="col-md-4 col-sm-6">
                            
                            <a href="contact_form.php"> 
                                <div class="data-block">
                                    <i class="fa fa-phone"></i>
                                    <h3>Contacted</h3>
                                    <p><?php echo $contact; ?></p>
                                </div>
                            </a>
                            
   
                        </div>
                        
                        <div class="col-md-4 col-sm-6">
                            
                            <a href="quotation_details.php"> 
                                <div class="data-block">
                                    <i class="fa fa-money"></i>
                                    <h3>Quotation</h3>
                                    <p><?php echo $quote; ?></p>
                                </div>
                            </a>
                            
                        </div>
                        <div class="col-md-4 col-sm-6">
                            
                            <a href="testimonial.php"> 
                                <div class="data-block">
                                    <i class="fa fa-comments"></i>
                                    <h3>Testimonials</h3>
                                    <p><?php echo $testimonial; ?></p>
                                </div>
                            </a>
                            
   
                        </div>
                        <div class="col-md-4 col-sm-6">
                            
                            <a href="tables-data.php"> 
                                <div class="data-block">
                                    <i class="fa fa-bullhorn"></i>
                                    <h3>Our Jobs</h3>
                                    <p><?php echo $job; ?></p>
                                </div>
                            </a>
                            
   
                        </div>

                        <div class="col-md-4 col-sm-6">
                            
                            <a href="jobportal.php"> 
                                <div class="data-block">
                                    <i class="fa fa-user"></i>
                                    <h3>Applicants</h3>
                                    <p><?php echo $applicant; ?></p>
                                </div>
                            </a>
                            
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    

  

  

</body>
<?php
}else 
    header("Location:log.php");
?>
</html>
