<?php 


$con = mysqli_connect('localhost','root','','nlpadmin');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }

$posid = $_GET['posid']; 

// sql to delete a record
$sql = " DELETE FROM admintable WHERE posid = $posid ";

mysqli_query($con,$sql);

header('location:tables-data.php');


 ?> 