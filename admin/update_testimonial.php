<?php
session_start();

if($_SESSION["name"]) {

include 'slider.php' ?>

<style type="text/css">
    textarea{
        width: 100%;
    }
</style>
<body>
<?php
//    <--- database conection-->
$con = mysqli_connect('localhost','root','','nlpadmin');
    if($con){
        // echo " Database connection is succesfully.";
    }
    else{
        echo "connection is not established.";
    }
    mysqli_select_db($con,'nlpadmin');

    @$id = $_GET['id'];

    if (isset($_POST['updatebtn'])) {
        @$name=$_POST['name'];
        $position=$_POST['position'];
        // $image=$_POST['image'];
        $message = $_POST['message'];


        // $query = "UPDATE testimonial SET name='$posname', poststatus='$poststatus', posdesc='$posdesc' WHERE id = '$id' ";
        $query = "UPDATE `testimonial` SET `name`='$name',`position`='$position',`message`='$message' WHERE id='$id' ";
        $q=mysqli_query($con,$query);
        if($q){
            echo '<script type="text/javascript"> alert("Entered data updated succesfully ")</script>'; 
            
        }
        
        $update1="select * from testimonial";
        $update = mysqli_query($con,$update1);
        while ($row = mysqli_fetch_array($update)) {
        
        
        }
    }

    

        $id = $_GET['id'];
        // echo $id;
        // $query1 = 'select * from admintable where posid='"'.$id.'";
        $query1 = "select * from testimonial where id = $id";
        // echo $query1;
        // $result = mysqli_query($con, $query1);
        $run = mysqli_query($con,$query1);
        // print_r($run);
        // print_r("before".$result.'hiii');
        while ($row1 = mysqli_fetch_array($run)) {
            $name= $row1['name'];
            // echo $name;
        
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
                    <strong>Update Testimonial</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"> ID</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="catID2" name="id" placeholder="ID" class="form-control" value="<?php echo $id;?>" disabled></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="catID1" name="name"  placeholder="Name" class="form-control" value="<?php echo $name;?>" required></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Position </label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="catName" name="position" placeholder="Position Status" class="form-control" value="<?php echo $row1['position'];?>" required></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Image </label></div>
                                    <div class="col-12 col-md-9">
                                        <!-- <input type="file" id="catName" name="image" placeholder="Position Status" class="form-control" value="<?php //echo $row1['image'];?>" style="display: none;"> -->
                                    <img src="<?php echo $row1['image'];?>" width="200px" height="200px">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Testimonial</label></div>
                                    <div class="col-12 col-md-9"><textarea name="message"  ><?php echo $row1['message'];?></textarea></div>
                                </div>
                                                                    
                            
                    </div>
                    <div class="card-footer">
                        <a href=""><button type="submit" class="btn btn-success btn-sm" name="updatebtn" id="update">
                        <!-- <button type="submit" class="btn btn-primary btn-sm" onclick="writeUserData()"> -->
                        <i class="fa fa-dot-circle-o"></i> Update</button></a>
                        <a href="tables-data.php"><button type="reset" onclick="window.location.href = 'testimonial.php';" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a>
                                                                
                    </div>
                    </form>
                </div>
                                                        
        </div>
</div>
</div>
        <?php 
    }
    ?>
</div>
                                    



    <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase.js"></script> 
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->




</body>
<?php
}else 
    header("Location:log.php");
?>
</html>

