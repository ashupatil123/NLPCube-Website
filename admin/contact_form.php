
<?php
session_start();

if($_SESSION["name"]) {




$page="contact";
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
                                        $query = "SELECT * FROM contact ORDER BY date DESC";
                                        $run = mysqli_query($con,$query);
                                        if($run == TRUE){

                                    ?>
                                        <div class="table-responsive" > 
                                        <table width="80%" id="mytable" class="table table-striped">
                                            <!-- <th class="bg-dark text-white">ID</th> -->
                                            <th class="bg-dark text-white">Date</th>
                                            <th class="bg-dark text-white"> Name</th>
                                            <th class="bg-dark text-white">Email</th>
                                            <th class="bg-dark text-white">Message</th>
                                            <th class="bg-dark text-white">Msg Delete</th>
                                            
                                        <?php

                                    // print_r(mysqli_fetch_array($run));
                                        while($data = mysqli_fetch_assoc($run)){

                                            ?>
                                            
                                                <tr>
                                                    
                                                    <td><?php echo $data['date'];?></td>
                                                    <td><?php echo $data['name'];?></td>
                                                    <td><?php echo $data['email'];?></td>
                                                    <td><?php echo $data['message'];?></td>

                                                <td><a name="deletebtn" href="delete_contact.php?id=<?php echo $data['id']; ?>" class="text-white"><i class="fa fa-trash" style="font-size:40px;color:red"></i></a></td>

                                                
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