
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
	<h4>Pending Complaints</h4>
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
						$num=0;
				
						if($result)
						{
							while($row=mysqli_fetch_assoc($result))
								{
									
									$cme=$row['pending'];
									if($cme=='1')
									{
										
										$num++;
											$id=$row['id'];
											$mail=$row['email'];
											$cate=$row['category'];
											$product=$row['product'];
											$nat=$row['nature'];
											$co=$row['comp'];
							
											echo "<hr /><table border='2px'><h4 class='tr'>
											
											<form method='POST' action='solvepend1.php'>
											EMAIL:<input type='text' name='email' value=".$mail."  style='margin-left:70px;'readonly><BR/><BR/>
											COMPLENT ID:<input type='text' name='id' value=".$id." style='margin-left:10px;' readonly>
											<input type='submit' value='solve it' style='float:right;margin:-10px;'>
											</form>
											
											<tr><td>Number:".$num."</tr></td>  
											</h4>";
											}
											 echo "<h4><tr><td>Complaint-categoty: ".$cate."</tr></td>
											
											 <tr><td>Complaint-Manufacture No:   ".$product."</tr></td>
											 <tr><td>Complaint-Nature:        ".$nat."</tr></td>
											
											 <tr><td>COMLAINT:               ".$co."</tr></td></h4><br /></table>";
										
									}
								}
						}
											
				?>	
    
</div>
</div>
	<!--------------------------------------------------------------------------------------------------------------------------------->
	

  				
  </body>
</html>




