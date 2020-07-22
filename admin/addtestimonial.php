<?php
session_start();

if($_SESSION["name"]) {

    $page="testimonial";
    include 'slider.php' 

?>
<style type="text/css">
    textarea{
        width: 80%;
    }
</style>

<body>


    <!-- Left Panel -->
    <!-- <div class="row"> -->
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Add New Testimonial</strong>
                </div>
                <div class="card-body card-block">

                <form action="addtestimonial.php" method="POST" enctype="multipart/form-data"/>
                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="catname" name="name" required> 
                            </div>
                            <!--<input type="text" class="form-control" id="name">-->
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Position</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="catname" name="position" required> 
                            </div>
                            <!--<input type="text" class="form-control" id="name">-->
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input name="pic[]" type="file" multiple="multiple" />(Image should be 500px*500px) 
                            </div>
                            <!--<input type="text" class="form-control" id="name">-->
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Message</label></div>
                            <div class="col-12 col-md-9"><textarea name="msg" >
                                
                            </textarea>  
                            </div>
                            
                        </div>

                        
                        
                                                            
                
                </div>
                <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-primary btn-sm" onclick="add()"> -->
                        <br>
                    <button type="submit" name="submit" id="submit" class="btn btn-success btn-sm" >SUBMIT</button>
                        <!-- <i class="fa fa-dot-circle-o"></i>   -->
                    <button type="reset" onclick="window.location.href = 'testimonial.php';" class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </button>
                </div>
                </form>
            </div>
        
        </div>
    </div>
</div>
<!-- </div> -->

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
    $position = $_POST['position'];
    // $img = $_POST['img'];
    $msg = $_POST['msg'];


    $targetDir ="uploads/";
      
        if(!empty(array_filter($_FILES['pic']['name'])))
        {
                         
         foreach($_FILES['pic']['name']  as $key=>$val)
           {
                      
           $fileName = basename($_FILES['pic']['name'][$key]);
                            
            $targetFilePath = $targetDir.$fileName;
             

             if(move_uploaded_file($_FILES["pic"]["tmp_name"][$key], $targetFilePath))
              {
              $insertValuesSQL = "uploads/".$fileName;
             // echo $insertValuesSQL;
              }
                $insertValuesSQL= "INSERT INTO `testimonial`(`id`, `name`, `position`, `image`, `message`) 
                VALUES ('','$name','$position','$insertValuesSQL','$msg')";
               
               mysqli_query($con,$insertValuesSQL);
            }
            
            echo '<script type="text/javascript"> alert("Data uploaded succesfully ")</script>';

    }

}
?>

</body>
<?php
}else 
    header("Location:log.php");
?>
</html>