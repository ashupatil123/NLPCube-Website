<?php
$con = mysqli_connect('localhost','root','','nlpadmin');
 if($con){

// echo " Databse connection is succesfull.";

 }
 else{
  echo "connection is not established";
 }

mysqli_select_db($con,'nlpadmin');


?>
