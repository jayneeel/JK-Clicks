<?php
session_start();

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 

if (isset($_POST['delete']))
{
	header("Location: http://localhost/jkclicks/delete.php");
	exit();
}
 ?>
</body>
<section>
	<div>
		<h1>Password Reset</h1>
		<form name="upload" action="reset.php" method="POST">
		<p>
			<label>Your current password</label><br>
			<input type="password" name="cp">
		</p>
		<p>
			<label>Your New Password</label><br>
			<input type="password" name="p1">
		</p>
		<p>
			<label>Confirm New Password</label><br>
			<input type="password" name="p2">
		</p>
		<input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>" >
		<p align="center">
			<input type="submit" name="upload">
		</p>
	</form>
	</div>
</section>
</html>