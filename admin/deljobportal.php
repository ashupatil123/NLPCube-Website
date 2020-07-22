<?php 


$con = mysqli_connect('localhost','root','','nlpadmin');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }

$candidateid = $_GET['id']; 

// sql to delete a record
$sql = " DELETE FROM jobs WHERE id = $candidateid ";

mysqli_query($con,$sql);

header('location:jobportal.php');


 ?> 