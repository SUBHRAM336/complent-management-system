<?php

$mail=$_POST['email'];
$remark=$_POST['remark'];
$id=$_POST['id'];

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	$qwerty="SELECT * FROM complaints";
	$res=mysqli_query($conn,$qwerty);
	{
		 while($row=mysqli_fetch_assoc($res))
		 {$i=0;
			 $mail1=$row['email'];
			if($mail1==$mail)
			 {
					{
						$comp="INSERT INTO completedcomp(email, remark,compnum) VALUES ('$mail','$remark','$id')";
						mysqli_query($conn,$comp);
						readfile('afteradminlogin.php');
						break;
					}
			
				}
			
				else
				{
					$i="Enter email not present";
				}
			}
		 }
	}

?>