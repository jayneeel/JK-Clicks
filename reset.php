<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password Reset</title>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Lato&family=Mulish:wght@500&display=swap');
	
div{
	text-align: center;
	padding: 20px;
	background: #f9dfdc;
	border-radius: 5px;
}

h1{
	font-family: Lato;
}
a:link{
		font-family: "Avenir LT STD";
		color: black;	
		text-decoration: none;
		border: 1px solid #3edbf0;
		border-radius: 2px;
		padding: 5px 10px;
		background: #3edbf0;
		transition-duration: 0.9s;
	}	
	a:hover{
		background: #f5cebe;
		border: 1px solid #f5cebe;
	}

</style>


</head>
<body>
<?php 

$currentPass=$_POST['cp'];
$pass1=$_POST['p1'];
$pass2=$_POST['p2'];
$emailid=$_POST['email'];
if ($currentPass=="") {
	echo "<div><h1>Current Password can't be kept empty</h1><br><a href='http://localhost/jkclicks/manage.html'> 🠔 Click me to go Back</a></div>";
	return;
}
if ($pass1!=$pass2){
	echo "<div><h1>Passwords didn't Match. Re-enter the passwords and Try Again!</h1><br><a href='http://localhost/jkclicks/manage.html'> 🠔 Click me to go Back</a></div>";
}else{
	$servername="localhost";
	$username="root";
	$pass="";
	$dbname="jkGallery";
	$con=new mysqli($servername,$username,$pass,$dbname);
	if($con->connect_error)
	{
		die("Connection Failed".$con->connect_error);
	}

	$sql="SELECT password,email from userdetails WHERE email='$emailid'";
	if($result=$con->query($sql))
	while ($row=$result->fetch_assoc())
	{

		if ($row['password']!=$currentPass)
		{
			echo "<div><h1>Current Password is Incorrect</h1><br><a href='http://localhost/jkclicks/manage.html'> 🠔 Click me to go Back</a></div>";
			return;
		}
	}

	$sql="UPDATE userdetails SET password='$pass1' WHERE email='$emailid';"; 
	if($con->query($sql)==TRUE)
	{
		echo "<div><h1>Password Changed Successfully</h1><br><a href='http://localhost/jkclicks/AccountHomePage.html'> 🠔 Click me to go Back</a></div>";
	}else{
		echo $con->connect_error;
	}
}

 ?>
</body>
</html>