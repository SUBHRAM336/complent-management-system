<?php
$uname=$_POST["username"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["email"];
$ph=$_POST["phone"];
$gender=$_POST["gender"];
$pass=$_POST["pass"];

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
echo "not connected to server";
}
$query1="SELECT * FROM userregistration";
	$result=mysqli_query($conn,$query1);
	
	if(mysqli_query($conn,$query1))
	{
		$check=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$email=$row['email'];
			if($mail==$email)
			{
				$check=1;
			}
			
		}
		if($check==0)
		{
			$query="INSERT INTO userregistration( username,fname,lname, email, phone, gender, pass) VALUES ('$uname','$fname','$lname','$mail','$ph','$gender','$pass')";
			$chk=mysqli_query($conn,$query);
	
				if($chk)
				{
					$msg="<h5 style='padding:10px'>Sign Up Successfully!! Now you can <a href='userlogin1.html'>Login here</a>";
				}
				else
				{
					$msg="<h2>not entered</h2>";
				}
		}
			if($check==1)
			{
				$msg="<h2>EMAIL ALREDY EXISTS</h2>";
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
<div class="left-item1" >
				<a class="left-link0" href="userlogin1.html"><button class="button1">User Login</button></a>
		</div>
			<div class="left-item1">
				<a class="left-link1" href="userreg1.html"><button class="button1">User Registration</button></a>
		</div>
			<div class="left-item1">
				<a class="left-link" href="adminlogin1.html"><button class="button1">ADMIN</button></a>
		</div>
</div>

	<br/>
    <div class="image">
	
    

				<div class="container1">
		<h6><?php echo $msg;?></h6>
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

