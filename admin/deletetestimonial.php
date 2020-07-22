<?php 


$con = mysqli_connect('localhost','root','','nlpadmin');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }

$id = $_GET['id']; 

// sql to delete a record
$sql = " DELETE FROM testimonial WHERE id = $id ";

mysqli_query($con,$sql);

header('location:testimonial.php');


 ?> 