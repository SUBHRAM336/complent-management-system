<?php


$mail=$_POST['email'];
$pass=$_POST['pass']; 

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	$query1="SELECT * FROM userregistration";
	$result=mysqli_query($conn,$query1);
	$check=0;
	
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['email']==$mail and $row['pass']==$pass)
		{			
			$check=1;
			$fname=$row['fname'];
			$lname=$row['lname'];
			$mail=$row['email'];
			
		}
	}
	if($check==1)
	{
		$query="INSERT INTO userlogininfo(fname, lname, email) VALUES ('$fname','$lname','$mail')";
		$chkme=mysqli_query($conn,$query);
		
		header('location:dash.php');
		
	}
	else if($check==0)
	{
		header('location:userlogin3.html');
	}
	
}
?>