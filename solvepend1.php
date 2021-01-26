<?php
$mail=$_POST['email'];
$id=$_POST['id'];

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
					<a class="btn " href="#">Complete </a>
				<br/>
					<h2 style="border:2px solid black;">Manage Users</h2>
				<br/>
					<a class="btn"   href="logindata.php">User Login info</a>
			
	  
			</center>
</div>
<div class="notimage" style="margin-top:-80px;">
		
				<a style="float:right;padding-left:30px;padding-right:30px;margin:10px;border:2px solid black;background-color:red;color:white;" href="adminlogin1.html">Logout</a>
				
<div class="container">
		<h2 style="padding-top:10px;">Complete the complaint here</h2><hr />
			<form class="forum" method="POST" action="solvepend2.php">
			<h5>EMAIL
				<input type="text" name="email" value="<?php echo $mail;?>">
				<br/><br/>Id
				<input type="number" name="id" value="<?php echo $id;?>" ><hr/>
				
				
				
				
				
				<hr />
				<br />
				Enter Remarks here<br />
				<textarea type="text" name="remark" class="form-control" style="height:200px" placeholder="Enter Remark here to complete this complaint."></textarea>
				<input type="submit" value="Complete this Complaint" class="btn btn-success" style="padding-left:2%;padding-right:2%;margin-left:5%;">
				<a class="btn btn-light" style="padding-left:2%;padding-right:2%;margin-left:1%;" href="afteradminlogin.php">Back to Portal</a>
			</h3>
			</form>
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



<html>
	<head>   
  <link rel="stylesheet" href="main.css">
  <title>Admin</title>
  </head>
	<body>
		
		
		
		
	</body>
	
</html>