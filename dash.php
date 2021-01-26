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
	
	$query1="SELECT * FROM `completedcomp`";
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
<div class="notimage" style="margin-top:-21px;">
				<h4>Make a complaint <a  style="float:right;padding-left:30px;padding-right:30px;margin:10px;border:2px solid black;background-color:red;color:white;" href="userlogin1.html">Logout</a><hr /></h4>
				<form class="form" action="usermakecomp.php" method="POST" style="width:100%;">
					Category
					<select name="category" style="width:30%;border-radius:12px;height:37px;"> 
						<option>Other</option>
						<option>a.c.</option>
						<option>Refrigerator</option>
						<option>Microwave</option>
						<option>Air conditioners</option>
						<option>Induction</option>
						<option>Geezers</option>
					</select>
					Manufacture Id:-
					<input type="text" name="product" style="width:30%;border-radius:5px;height:37px;" placeholder="Please Enter the product no.">
					<br /><br />
					<span>Nature of Complaint</span>
					<select name="nature">
						<option>Physical damage</option>
						<option>Manufacturer defects </option>
					</select><br /><br /><br />
					<span>Complaint</span>
					<textarea name="comp" class="form-control in1" placeholder="Feel free to write. Your complaint is secure." style="height:200px;"></textarea><br />
				<br />
					<input type="submit" style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Send"><br />
				</form>
			
			
</div></div>
	<!--------------------------------------------------------------------------------------------------------------------------------->
	<div class=footer>	
		<div class="welcome">
			<h3>Welcome To Online Complaint System</h3> 
		
		
	
		</div>
		
		<br /><hr />

  </div>

 		
  </body>
</html>