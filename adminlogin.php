<?php
$name=$_POST['name'];
$pass=$_POST['passw'];
$admin="subhram";
$passward="12345";
if($name==$admin and $pass==$passward)
{
	header('location:afteradminlogin.php');
}
else
{
	header('location:adminlogin2.html');
}


?>