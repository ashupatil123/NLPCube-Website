
<?php
session_start();

if($_SESSION["name"]) {




$page="career";
include 'slider.php';

?>

<style>
    #search1{
        display:inline-flex!important;
    }
  </style>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
 

<body>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">&nbsp;Add New Position</strong>
                                <button onclick="location.href = 'addkids.php';" id="myButton" class="float-left submit-button"><i class="fa fa-plus-square" style="font-size:18px;color:red"></i>Add</button>
                            </div>
                            <div class="card-body">
                                    <?php

                                    $con = mysqli_connect('localhost','root','','nlpadmin');
                                    if($con){

                                    // echo " Databse connection is succesfull.";

                                    }
                                    else{
                                    echo "connection is not established.";
                                    }


                                    function ShowData(){

                                        global $con;
                                        $query = "SELECT * FROM admintable ";
                                        $run = mysqli_query($con,$query);
                                        if($run == TRUE){

                                    ?>
                                        <div class="table-responsive" > 
                                        <table width="80%" id="mytable" class="table table-striped">
                                            <th class="bg-dark text-white">Position ID</th>
                                            <th class="bg-dark text-white">Titile</th>
                                            <th class="bg-dark text-white">Salary</th>
                                            <th class="bg-dark text-white">No of Position</th>
                                            <th class="bg-dark text-white">Job Summary</th>
                                            <th class="bg-dark text-white">Responsibilities</th>
                                            <th class="bg-dark text-white">Key Skills</th>
                                            <th class="bg-dark text-white">Experience </th>
                                            <th class="bg-dark text-white">Delete</th>
                                            <th class="bg-dark text-white">Update</th>

                                        <?php

                                    // print_r(mysqli_fetch_array($run));
                                        while($data = mysqli_fetch_assoc($run)){

                                            ?>
                                            
                                                <tr>
                                                    <td><?php echo $data['posid'];?></td>
                                                    <td><?php echo $data['posname'];?></td>
                                                    <td><?php echo $data['salary'];?></td>
                                                    <td><?php echo $data['no_position'];?></td>
                                                    <td><?php echo $data['job_summary'];?></td>
                                                    <td><?php echo $data['resp'];?></td>
                                                    <td><?php echo $data['skill'];?></td>
                                                    <td><?php echo $data['exp'];?></td>

                                                <td><a name="deletebtn" href="delete.php?posid=<?php echo $data['posid']; ?>" class="text-white"><i class="fa fa-trash" style="font-size:40px;color:red"></i></a></td>

                                                <td><a name="updatebtn" href="gedit.php?posid=<?php echo $data['posid']; ?>"class="text-white"><i class="fa fa-edit" style="font-size:40px;color:green"></i></a></td>
                                                </tr>
                                    </div>
                                            <?php
                                            }

                                            ?></table> <?php
                                        }
                                        // else{
                                        //     echo "Error !!";
                                        //     }


                                    }
                                    ?>
                                    <?php ShowData(); ?>
                                    <br></br> 
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

  

</body>
<?php
}else 
    header("Location:log.php");
?>
</html>