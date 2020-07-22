<?php
session_start();

if($_SESSION["name"]) {

?>
<!doctype html>
<html>
<head>
<title></title></head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<input type="text" name="usname" value = "<?=$user_name;?>"/>
<input type="password" name="psd" value = "<?=$pass_word;?>" />
<input type="textarea" name="addrs" value = "<?=$address;?>">
<input type="hidden" name="id" value = "<?=$id?>"/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php

$con = mysqli_connect('localhost','root','','nlpadmin');
		 if($con){

	  echo " Database connection is succesfully.";

	  }
	  else{
   echo "connection is not established.";
  }

if(isset($_POST['submit'])){

    $sql= "Update form set user_name='".$_POST['usname']."',
                         pass_word='".$_POST['psd']."',
                         address='".$_POST['addrs']."'
 where id='".$_GET['id']."'
 ";

 $result=mysql_query($sql);
if($result)
{
    echo"data is succesfully data insert";
header("location:login.php");
}else
{echo"";}
}
$id='';
$user_name='';
$pass_word='';
$address='';
$host="localhost";
$username="root";
$password="";
$db="form2";
$con=mysql_connect($host,$username,$password);

if(isset($_GET['id']))
{
 echo $query = "select id,user_name,pass_word,address from form where id=".$_GET['id'];
mysql_select_db($db,$con);

 echo $result=mysql_query($query);
if($result){
    while($row= mysql_fetch_array($result))
     $id=$row['id'];
     $user_name=$row['user_name'];
     $pass_word=$row['pass_word'];
    $address=$row['address'];

    }
}
?>



</body>
<?php
}else 
    header("Location:log.php");
?>
</html>













