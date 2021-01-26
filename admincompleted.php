<?php

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
	
	$query1="SELECT * FROM userregistration";
	$result=mysqli_query($conn,$query1);
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($mail==$row['email'])
			{	$user=$row['username'];
			}
		}
	}
		

}
?>
<html>
<head>
 
  <link rel="stylesheet" href="main.css">
  <title>Welcome to complaint system</title>
  		

  </head>
  <body >
	<div class="header">
		<div class="header-item" style="margin-left:5%">
			<a class="home" href="index.html" ><h2 style="cursor:pointer">Complaint management System</h2></a>
				</div>
		
	</div>
	<div class="space"></div>
	<!---------------------------------------------------------------------------------------------------------------------->
<div class="content">
<div class="left">	
<center>
<br/>
				<a href="afteradminlogin.php"><button><h1 style="padding-left:40px;padding-right:40px;padding-top:-5px;padding-bottom:-50px;">Dashboard</h1></button></a>
				<h2 style="border:2px solid black;">Manage Complaints</h2>
				<br/>
					<a class="btn" href="adminpending.php">Pending</a>
				<br/>
					<a class="btn " href="admincompleted.php">Complete </a>
				<br/>
					<h2 style="border:2px solid black;">Manage Users</h2>
				<br/>
					<a class="btn"   href="logindata.php">User Login info</a>
			
	  
			</center>
</div>
<div class="notimage" style="margin-top:-21px;">
	<h4>Completed Complaints</h4>
				<?php
	$query1="SELECT * FROM completedcomp";
	$result=mysqli_query($conn,$query1);
	$num=0;
	if($result)
	{						
									$num=0;
		while($row=mysqli_fetch_assoc($result))
		{
	
			
			echo "<table class='table' border='1px'><tr class='tr'>";
									echo "<th>Number</th><th>id</th><th>email</th><th>remark</th></tr>";
				
										$num++;
											$mail=$row['email'];
											$remark=$row['remark'];
											$id=$row['compnum'];
											echo "<tr class='tr'>
											<td>".$num."</td>
											<td>".$id."</td>
											<td>".$mail."</td>
											<td>".$remark."</td>
											";
											echo "</table><br/>";
											
				
			}
		}
		
	
	if($num==0)
	{
		echo "Still there is no record";
	}
				?>
    
</div>
</div>
	<!--------------------------------------------------------------------------------------------------------------------------------->
	

  				
  </body>
</html>




