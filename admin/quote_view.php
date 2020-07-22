<?php
session_start();

if($_SESSION["name"]) {


 include 'slider.php' ?>

<body>

<?php 
        $con = mysqli_connect('localhost','root','','nlpadmin');
        if($con){

        // echo " Databse connection is succesfull.";

        }
        else{
        echo "connection is not established.";
        }

        
        mysqli_select_db($con,'nlpadmin');

        global $con;
        $query = "SELECT * FROM quote where id=".$_GET['id']." ORDER BY id DESC";
        $run = mysqli_query($con,$query);
        
    if($run == TRUE){

                                    

                                    
    $data = mysqli_fetch_assoc($run)
?>

    <!-- Left Panel -->
    <!-- <div class="row"> -->
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>User Details</strong>
                </div>
                <div class="card-body card-block">

                <!-- <form method="POST" enctype="multipart/form-data" class="form-horizontal"> -->
                    
                        <div class="row form-group">
                            <div class="col-md-6"><label class=" form-control-label"><b>Name :</b></label>
                                <span> <?php echo $data['name'];?></span></div>
                            
                            
                        
                            <div class="col-md-6"><label class=" form-control-label"><b>Email :</b></label>
                                <span> <?php echo $data['email'];?></span></div>
                            
                            
                        
                            <div class="col-md-6"><label class=" form-control-label"><b>Contact :</b></label>
                                <span> <?php echo $data['phone'];?></span></div>
                            
                            
                        
                            <div class="col-md-6"><label class=" form-control-label"><b>Interested in Services  :</b></label>
                                <span> <?php echo $data['int_service'];?></span></div>

                            <div class="col-md-6"><label class=" form-control-label"><b>Message :</b></label>
                                <span> <?php echo $data['msg'];?></span></div>
                            
                            
                        </div>
                        
                                                            
                
                </div>
                
                <!-- </form> -->
            </div>

            <div class="card">
                <div class="card-header">
                    <strong>Requirements Details</strong>
                </div>
                <div class="card-body card-block">

                <!-- <form method="POST" enctype="multipart/form-data" class="form-horizontal"> -->
                    
                        <div class=""><label class=" form-control-label"><b>Service Required :</b></label>
                            <span> <?php echo $data['service'];?></span>
                        </div>
                        
                        
                        <?php
                            if($data['service'] == 'application'){
                        ?>
                        <div ><label class=" form-control-label"><b>What type of Application need to be developed?</b></label>
                            <span> <?php echo $data['type'];?></span>
                        </div>
                        
                        <div ><label class=" form-control-label"><b>How user logins to Application :</b></label>
                            <span> <?php echo $data['login'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Does user needs to create Profile? :</b></label>
                            <span> <?php echo $data['register'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>How will you make money from your Application? :</b></label>
                            <span> <?php echo $data['app-money'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>Does your App needs to be connected to Website?</b></label>
                            <span> <?php echo $data['connect-app'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>How nice should your App look like?</b></label>
                            <span> <?php echo $data['app-look'];?></span>
                        </div>
                        
                        <div ><label class=" form-control-label"><b>What is your Budget range?</b></label>
                            <span> <?php echo $data['app-budget'];?></span>
                        </div>
                                                 
                        
                        <?php
                            }
                        ?>
                           
                        <?php
                            if($data['service'] == 'website'){
                        ?>
                        <div ><label class=" form-control-label"><b>What kind of website to be developed?</b></label>
                            <span> <?php echo $data['website'];?></span>
                        </div>
                        
                        <div ><label class=" form-control-label"><b>How many pages do you need?</b></label>
                            <span> <?php echo $data['pages'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Do you need Admin Panel?</b></label>
                            <span> <?php echo $data['admin-panel'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Is the website to be developed is Ecommerce?</b></label>
                            <span> <?php echo $data['ecommerce'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>How you expect the wesite to be developed?</b></label>
                            <span> <?php echo $data['template'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Do you have your Company Logo?</b></label>
                            <span> <?php echo $data['logo'];?></span>
                        </div>
                        
                        <div ><label class=" form-control-label"><b>What is your Budget range?</b></label>
                            <span> <?php echo $data['web-budget'];?></span>
                        </div>
                                                 
                        
                        <?php
                            }
                        ?>

                        <!-- For Both Part -->

                        <?php
                            if($data['service'] == 'both'){
                        ?>
                        <div ><label class=" form-control-label"><b>Type :</b></label>
                            <span> <?php echo $data['type1'];?></span>
                        </div>
                        
                        <div ><label class=" form-control-label"><b>How user logins to Application :</b></label>
                            <span> <?php echo $data['login1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Does user needs to create Profile? :</b></label>
                            <span> <?php echo $data['register1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>How will you make money from your Application? :</b></label>
                            <span> <?php echo $data['app-money1'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>Does your App needs to be connected to Website?</b></label>
                            <span> <?php echo $data['connect-app1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>How nice should your App look like?</b></label>
                            <span> <?php echo $data['app-look1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>What kind of website to be developed?</b></label>
                            <span> <?php echo $data['website1'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>How many pages do you need?</b></label>
                            <span> <?php echo $data['pages1'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>Do you need Admin Panel?</b></label>
                            <span> <?php echo $data['admin-panel1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>Is the website to be developed is Ecommerce?</b></label>
                            <span> <?php echo $data['ecommerce1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>How you expect the wesite to be developed?</b></label>
                            <span> <?php echo $data['template1'];?></span>
                        </div>    

                        <div ><label class=" form-control-label"><b>Do you have your Company Logo?</b></label>
                            <span> <?php echo $data['logo1'];?></span>
                        </div>

                        <div ><label class=" form-control-label"><b>What is your Budget range?</b></label>
                            <span> <?php echo $data['both-budget'];?></span>
                        </div>    
                        
                        <?php
                            }
                        ?>
                                                    
                
                </div>
                <div class="card-footer">
                    
                    <button type="reset" onclick="window.location.href = 'quotation_details.php';" class="btn btn-success btn-sm">
                        <i class="fa fa-arrow-left "></i> Back
                    </button>
                </div>
                <!-- </form> -->
            </div>
        <?php

    }?>
        </div>
    </div>
</div>

 

</body>
<?php
}else 
    header("Location:log.php");
?>
</html>