<?php
$cat=$_POST['category'];
$product=$_POST['product'];
$nature=$_POST['nature'];
$comp=$_POST['comp'];

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	$query1="SELECT * FROM userlogininfo";
	$result=mysqli_query($conn,$query1);
	if($result)
	{
		
		while($row=mysqli_fetch_assoc($result))
		{
			$mail=$row['email'];
		}
	}	
	
	$pend='1';
	$query2="INSERT INTO complaints(email, category, product, nature, comp, pending) VALUES ('$mail','$cat','$product','$nature','$comp','$pend')";

	$result=mysqli_query($conn,$query2);
		
	if($result)
	{
		
	readfile('dash.php');
		
	}
}
?>
