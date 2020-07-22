
<?php
session_start();

if($_SESSION["name"]) {




$page="enquiry";
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
                           <!--  <div class="card-header">
                                <strong class="card-title">&nbsp;Add New Position</strong>
                                <button onclick="location.href = 'addkids.php';" id="myButton" class="float-left submit-button"><i class="fa fa-plus-square" style="font-size:18px;color:red"></i>Add</button>
                            </div> -->
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
                                        $query = "SELECT * FROM enquiry";
                                        $run = mysqli_query($con,$query);
                                        if($run == TRUE){

                                    ?>
                                        <div class="table-responsive" > 
                                        <table width="80%" id="mytable" class="table table-striped">
                                            <th class="bg-dark text-white">Service</th>
                                            <th class="bg-dark text-white">Name</th>
                                            <th class="bg-dark text-white">Email</th>
                                            <th class="bg-dark text-white">Contact</th>
                                            <th class="bg-dark text-white">Company Name</th>
                                            <th class="bg-dark text-white">Website</th>
                                            <th class="bg-dark text-white">Budget</th>
                                            <th class="bg-dark text-white">Message </th>
                                            <th class="bg-dark text-white">Delete</th>
                                           

                                        <?php

                                    // print_r(mysqli_fetch_array($run));
                                        while($data = mysqli_fetch_assoc($run)){

                                            ?>
                                            
                                                <tr>
                                                    <td><?php echo $data['service'];?></td>
                                                    <td><?php echo $data['name'];?></td>
                                                    <td><?php echo $data['email'];?></td>
                                                    <td><?php echo $data['contact'];?></td>
                                                    <td><?php echo $data['company_name'];?></td>
                                                    <td><?php echo $data['website'];?></td>
                                                    <td><?php echo $data['budget'];?></td>
                                                    <td><?php echo $data['msg'];?></td>

                                                <td><a name="deletebtn" href="delete_enquiry.php?id=<?php echo $data['id']; ?>" class="text-white"><i class="fa fa-trash" style="font-size:40px;color:red"></i></a></td>

                                              
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