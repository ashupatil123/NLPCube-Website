<?php
session_start();

if($_SESSION["name"]) {


include 'slider.php' ?>
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

    @$posid = $_GET['posid'];

    if (isset($_POST['updatebtn'])) {
        $posname = $_POST['posname'];
        $salary = $_POST['salary'];
        $no_position = $_POST['no_position'];
        $summary = $_POST['summary'];
        $resp = $_POST['resp'];
        $skill = $_POST['skill'];
        $exp = $_POST['exp'];


        // $query = "UPDATE admintable SET posname='$posname', poststatus='$poststatus', posdesc='$posdesc' WHERE posid = '$posid' ";
        $query = "UPDATE admintable SET posname='$posname',salary='$salary',no_position='$no_position',job_summary='$summary',resp='$resp',skill='$skill',exp='$exp' WHERE posid = '$posid'";
        $q=mysqli_query($con,$query);
        if($q){
            echo '<script type="text/javascript"> alert("Entered data updated succesfully ")</script>'; 
            
        }
        
        $update1="select * from admintable";
        $update = mysqli_query($con,$update1);
        while ($row = mysqli_fetch_array($update)) {
        
        
        }
    }

    

        $id = $_GET['posid'];
        // echo $id;
        // $query1 = 'select * from admintable where posid='"'.$id.'";
        $query1 = "select * from admintable where posid = $id";
        // echo $query1;
        // $result = mysqli_query($con, $query1);
        $run = mysqli_query($con,$query1);
        // print_r($run);
        // print_r("before".$result.'hiii');
        while ($row1 = mysqli_fetch_array($run)) {
            $name= $row1['posname'];
            // echo $name;
        
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
                    <strong>Update Position</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="catID2" name="posid" placeholder="ID" class="form-control" value="<?php echo $posid;?>" disabled></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Titile</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="catID1" name="posname"  placeholder="Name" class="form-control" value="<?php echo $name;?>" required></div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Salary </label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="salary"  placeholder="salary" class="form-control" value="<?php echo $row1['salary'];?>" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. of Position </label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="no_position"  placeholder="No. of Position" class="form-control" value="<?php echo $row1['no_position'];?>" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Job Summary</label></div>
                                    <div class="col-12 col-md-9"><textarea name="summary" class="form-control"><?php echo $row1['job_summary'];?>  </textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Responsibilities & Duties</label></div>
                                    <div class="col-12 col-md-9"><textarea name="resp" class="form-control" > <?php echo $row1['resp'];?></textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Key Skills</label></div>
                                    <div class="col-12 col-md-9"><textarea name="skill" class="form-control" ><?php echo $row1['skill'];?></textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Experience & Qualification</label></div>
                                    <div class="col-12 col-md-9"><textarea name="exp" class="form-control" ><?php echo $row1['exp'];?></textarea></div>
                                </div>
                                                                    
                            
                    </div>
                    <div class="card-footer">
                        <a href="editform1.php"><button type="submit" class="btn btn-primary btn-sm" name="updatebtn" id="update">
                        <!-- <button type="submit" class="btn btn-primary btn-sm" onclick="writeUserData()"> -->
                        <i class="fa fa-dot-circle-o"></i> Update</button></a>
                        <a href="tables-data.php"><button type="reset" onclick="window.location.href = 'tables-data.php';" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Cancel</button></a>
                                                                
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
