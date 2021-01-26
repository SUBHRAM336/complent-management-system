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
				$fname=$row['fname'];
				$lname=$row['lname'];
				$phone=$row['phone'];
				$gender=$row['gender'];
				$pass=$row['pass'];
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
<div class="welcome1"><img style="float:left;" src="user.png" height="50" width="50">
			<div style="float:left;margin-left:20px; margin-top:-7px;"><h2><?php echo $user ?></h2></div>
			</div>
			
		<div><a href="dash.php"><button class="button"><h2>DASHBOARD</h2></button></a></div><br />
		<div><a href="complents.php"><button class="button"><h3>complents</h3></button></a></div><br />
		<div><a href="personal.php"><button class="button"><h3>personal details</h3></button></a></div>
</div>
<div class="notimage" style="margin-top:-20px;" >
				<h4>Pending Information<hr /></h4>
				<?php
	$query1="SELECT * FROM complaints";
	$result=mysqli_query($conn,$query1);
	$num=0;
	if($result)
	{						echo "<table class='table' border='1px'><tr class='tr'>";
									echo "<th>Number</th><th>Complent ID:</th><th>Category</th><th>Manufacture No</th><th>Nature</th><th>Complaints</th></tr>";
									$num=0;
		while($row=mysqli_fetch_assoc($result))
		{
			if($mail==$row['email'])
			{
				$cme=$row['pending'];
				if($cme=='1')
				{							$num++;
											$id=$row['id'];
											$cate=$row['category'];
											$product=$row['product'];
											$nat=$row['nature'];
											$co=$row['comp'];
											echo "<tr class='tr'>
											<td>".$num."</td>
											<td>".$id."</td>
											<td>".$cate."</td>
											<td>".$product."</td>
											<td>".$nat."</td>
											<td>".$co."</td>
											";
											
				}
			}
		}
		echo "</table>";
	}
	if($num==0)
	{
		echo "Still there is no record";
	}
				?>
			</div>
			
</div>
	<!--------------------------------------------------------------------------------------------------------------------------------->
	<div class=footer>	
		<div class="welcome">
			<h3>Welcome To Online Complaint System</h3> 
		
		
	
		</div>
		
		<br /><hr />

  </div>

 		
  </body>
</html>