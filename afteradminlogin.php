<?php

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	$query1="SELECT * FROM complaints";
	$result=mysqli_query($conn,$query1);
	$pend=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			
				$cme=$row['pending'];
				if($cme=='1')
				{
					$pend++;
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
					$compl++;	
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
<div class="notimage">
		<div class="left-link item1" style="margin-left:5%">
		<img src="admin.png" style="margin-left:-50px;float:left;border:3px solid black;" width="70px" height="80px">
				<h3  style="float:left;cursor:pointer;margin:10px 2px 0px 20px;">Admin</h3>
						
		</div>
				<a style="float:right;padding-left:30px;padding-right:30px;margin:10px;border:2px solid black;background-color:red;color:white;" href="adminlogin1.html">Logout</a>
	



	
			<!----------------------------------------------------------------------------------------DASHBOARD-->
			
			<br/><br/><br/><br/>
			<h4>Dashboard<hr /></h4>
				<div id="file1" style="cursor:pointer;">
					
					<a href="adminpending.php" ><p id="file12" style="display:block;font-size:15px;">Pending complaints<div  style="text-align:center;font-size:15px;"><?php echo $pend; ?></div></p></a>
				</div>
						<div id="file3">
							
							<a href="admincompleted.php" ><p id="file32" style="display:block;font-size:15px;">Completed complaints<div  style="text-align:center;font-size:15px;"><?php echo $compl; ?></div></p></a>
						</div>
			
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