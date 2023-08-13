<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap');
		
	.error{
		padding: 30px;
		background-color: #f6dfeb;
		border-radius: 5px;
	}
	.text{
		font-family: Lato;
		text-align: center;
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
<body>
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

if (isset($_POST['logBtn']))
{
	
	$email=$_POST['user'];
	$pass=$_POST['pass'];

	$sql="SELECT email from userDetails where email='$email' AND password='$pass';";
	$result=$con->query($sql);
	if ($result->num_rows==1)
	{
		echo "LOGIN SUCCESSFUL!";
		header("Location: http://localhost/jkclicks/AccountHomePage.html");
		$_SESSION['email']=$email;
        exit();
	}else{
		echo "<div class='error'><h1 class='text'>Oops! Your credentials didn't match to our Database records.</h1><br><a href='http://localhost/jkclicks/Login.html'> 🠔 Click me to go Back</a></div>";
	}

}

?>
</body>
</html>