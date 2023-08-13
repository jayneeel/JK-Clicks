<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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

if (isset($_POST['delete']))
{
	$email=$_POST['email'];
	$password=$_POST['cp'];
	$servername="localhost";
	$username="root";
	$pass="";
	$dbname="jkGallery";
	$con=new mysqli($servername,$username,$pass,$dbname);

	if($con->connect_error)
	{
		die("Connection Failed".$con->connect_error);
	}
	$sql="SELECT password,email from userdetails WHERE email='$email'";
	if($result=$con->query($sql))
	while ($row=$result->fetch_assoc())
	{
		if ($row['password']!=$password)
		{
			echo "<div><h1>Current Password is Incorrect</h1><br><a href='http://localhost/jkclicks/manage.html'> 🠔 Click me to go Back</a></div>";
			return;
		}
	}
	$sql="DELETE FROM userdetails where email='$email' AND password='$password';";
	if ($con->query($sql)==TRUE)
	{
		// echo $email."   ".$password;
		echo "<div><h1>JK CLICKS HAS DELETED YOUR ACCOUNT!<h1><br><a href='http://localhost/jkclicks/photoGrid.html'> 🠔 Click me to go Back</a></div>";
		session_unset();
		session_destroy();
	}else{
		echo $con->connect_error;
	}

}

 ?>
</body>
</html>