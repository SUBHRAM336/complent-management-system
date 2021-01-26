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
					<a class="btn"   href="logindata.php">User Login info</a><br/>
			
	
			</center>
</div>
<div class="notimage">
		<div class="left-link item1" style="margin-left:5%">
		<img src="admin.png" style="margin-left:-50px;float:left;border:3px solid black;" width="70px" height="80px">
				<h3  style="float:left;cursor:pointer;margin:10px 2px 0px 20px;">Admin</h3>
						
		</div>
  <a style="float:right;padding-left:30px;padding-right:30px;margin:10px;border:2px solid black;background-color:red;color:white;" href="adminlogin1.html">Logout</a>


	<div style="width:100%;float:left;" >
			<!----------------------------------------------------------------------------------------DASHBOARD-->
			<h1>Registered data<hr /></h1>
				<?php
				$servername='localhost';
				$username='root';
				$password='';
				$dbname='project';

			$conn=mysqli_connect($servername,$username,$password,$dbname);
			if($conn)
			{
	
					$num=0;
					$users="SELECT * FROM userregistration";
					$result78=mysqli_query($conn,$users);
					if($result78)
					{
						while($rowuser=mysqli_fetch_assoc($result78))
						{$num++;
							$fnamen=$rowuser['fname'];
							$lnamen=$rowuser['lname'];
							$mail=$rowuser['email'];
							$phone=$rowuser['phone'];
							$gender=$rowuser['gender'];
							$passward=$rowuser['pass'];
							echo  "<table border='1px' style='border:2px solid black;'> 
								<tr class='thead'><th>Number:-</th><th>".$num."</th></tr>
								<tr><td>First Name:-</td><td>".$fnamen."</td></tr>
								<tr><td>Last Name:-</td><td>".$lnamen."</td></tr>
								<tr><td>email:-</td><td>".$mail."</td></tr>
								<tr><td>phone:-</td><td>".$phone."</td></tr>
								<tr><td>gender:-</td><td>".$gender."</td></tr>
								<tr><td>passward:-</td><td>".$passward."</td></tr>
								</table><br />
								";
						}
					}
			}
				?>
			
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