
<?php
session_start();

if($_SESSION["name"]) {




$page="quote";
include 'slider.php';

?>
<style>
    #search1{
        display:inline-flex!important;
    }
    table{
        border: none;
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
                                        $query = "SELECT * FROM quote ORDER BY id DESC";
                                        $run = mysqli_query($con,$query);
                                        if($run == TRUE){

                                    ?>
                                        <div class="table-responsive" > 
                                        <table width="80%" id="mytable" class="table table-striped">
                                            <th class="bg-dark text-white">Name</th>
                                            <th class="bg-dark text-white">Email</th>
                                            <th class="bg-dark text-white">Contact</th>
                                            <th class="bg-dark text-white">Message</th>
                                            <th class="bg-dark text-white">Service</th>
                                            <th class="bg-dark text-white">Read More</th>
                                        <?php

                                    // print_r(mysqli_fetch_array($run));
                                        while($data = mysqli_fetch_assoc($run)){

                                            ?>
                                            
                                                <tr>
                                                    <td><?php echo $data['name'];?></td>
                                                    <td><?php echo $data['email'];?></td>
                                                    <td><?php echo $data['phone'];?></td>
                                                    <td><?php echo $data['msg'];?></td>
                                                    <td><?php echo $data['service'];?></td>
                                                
                                                    <td><a name="updatebtn" href="quote_view.php?id=<?php echo $data['id']; ?>"><center>Read More <i class="fa fa-paper-plane" style="color:black"></i></center></a></td>
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