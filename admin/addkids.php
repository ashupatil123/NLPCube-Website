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

        if(isset($_POST['submit']))
        {

       	
        $posname = $_POST['posname'];
        $salary = $_POST['salary'];
        $no_position = $_POST['no_position'];
        $summary = $_POST['summary'];
        $resp = $_POST['resp'];
        $skill = $_POST['skill'];
        $exp = $_POST['exp'];
        
         
        // $query = "insert into admintable (posname,poststatus,posdesc) values ('$posname','$poststatus', '$posdesc')";

         $query = "INSERT INTO `admintable`(`posname`, `salary`, `no_position`, `job_summary`, `resp`, `skill`, `exp`) VALUES ('$posname','$salary',$no_position,'$summary','$resp','$skill','$exp')";
       

        $run=mysqli_query($con,$query);
        // mysqli_select_db($con,'nlpadmin');
        // $con->close();
        if ($run === TRUE) {
            echo "New record is inserted successfully";
        } 
        else{
            echo"Please insert the data";
         }
        }

        
    
?>

    <!-- Left Panel -->
    <!-- <div class="row"> -->
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Add New Position</strong>
                </div>
                <div class="card-body card-block">

                <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                    
                        <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Titile</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="posname"  placeholder="Name" class="form-control" required></div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Salary </label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="salary"  placeholder="salary" class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. of Position </label></div>
                                    <div class="col-12 col-md-9"><input type="number"  min="1" name="no_position"  placeholder="No. of Position" class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Job Summary</label></div>
                                    <div class="col-12 col-md-9"><textarea name="summary" class="form-control" required></textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Responsibilities & Duties</label></div>
                                    <div class="col-12 col-md-9"><textarea name="resp" class="form-control" ></textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Key Skills</label></div>
                                    <div class="col-12 col-md-9"><textarea name="skill" class="form-control" ></textarea></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Experience & Qualification</label></div>
                                    <div class="col-12 col-md-9"><textarea name="exp" class="form-control" ></textarea></div>
                                </div>
                                                            
                
                </div>
                <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-primary btn-sm" onclick="add()"> -->
                        <br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" >SUBMIT</button>
                        <!-- <i class="fa fa-dot-circle-o"></i>   -->
                    <button type="reset" onclick="window.location.href = 'tables-data.php';" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> CANCEL
                    </button>
                </div>
                </form>
            </div>
        
        </div>
    </div>
</div>
<!-- </div> -->

 

</body>
<?php
}else 
    header("Location:log.php");
?>
</html>