<?php 

$servername="localhost";
$username="root";
$pass="";
$dbname="jkGallery";
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
	die("Connection Failed".$con->connect_error);
}

if (isset($_POST['regBtn']))
{
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['Gender'];
	$dob=$_POST['DOB'];
	$email=$_POST['email1'];
	$phno=$_POST['phone'];
	$pass=$_POST['pass1'];

	$sql="INSERT INTO userDetails(fname,lname,gender,DOB,email,phone,password) values('$fname','$lname','$gender','$dob','$email',$phno,'$pass');";

	if ($con->query($sql)==TRUE)
	{
		echo "NEW RECORD INSETED SUCCESSFULLY";
		header("Location: http://localhost/jkclicks/Login.html");
        exit();
	}else{
		echo "Error".$con->connect_error;
	}
}


?>