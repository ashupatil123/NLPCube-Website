<?php 


$con = mysqli_connect('localhost','root','','nlpadmin');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }

$posid = $_GET['id']; 

// sql to delete a record
$sql = " DELETE FROM enquiry WHERE id = $posid ";

mysqli_query($con,$sql);

header('location:enquiry.php');


 ?> 
