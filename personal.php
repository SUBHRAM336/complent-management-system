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
		$query1="SELECT * FROM complaints";
	$result=mysqli_query($conn,$query1);
	$pend=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($mail==$row['email'])
			{
				$cme=$row['pending'];
				if($cme=='1')
				{
					$pend++;
				}
			}
		}
	}
	
	$query1="SELECT * FROM completedcomp";
	$result=mysqli_query($conn,$query1);
	$compl=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($mail==$row['email'])
			{	
					$compl++;	
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
		<div><a href="complents.php"><button class="button"><h3>complaints</h3></button></a></div><br />
		<div><a href="personal.php"><button class="button"><h3>personal details</h3></button></a></div>
</div>
<div class="notimage">
		
		<div style=" border-radius:10px;border:.5px solid black; box-shadow:1px 2px 3px 0px;padding:10px;">	
		<center>
					<?php
			
							echo  "
								First Name:-</td><td>".$fname."<br /><hr />
								Last Name:-</td><td>".$lname."<br /><hr />
								email:-</td><td>".$mail."<br /><hr />
								phone:-</td><td>".$phone."<br /><hr />
								gender:-</td><td>".$gender."<br />
								";
						
					
			
				?>
				</center>
				
	
	</div>
	<br/>
	<center><a  style="padding-left:30px;padding-right:30px;margin:10px;border:2px solid black;background-color:red;color:white;" href="userlogin1.html">Logout</a>
	</center>
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




