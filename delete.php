<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section>
	<div>
		<h1>Delete Account</h1>
		<form name="delete" action="deletefinal.php" method="POST">
		<p>
			<label>Your current password</label><br>
			<input type="password" name="cp">
		</p>
		<p>
			<label>Why are you deleting your account</label><br>
			<select name="reason">
				<option>Privacy Issue</option>
				<option>I don't this use Website</option>
				<option>I don't like the content</option>
				<option>Other Reason</option>
			</select>
		</p>
			<input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>" >
		<p align="center">
			<input type="submit" id="dbtn" value="Delete My Account" name="delete">
		</p>
	</form>
	</div>
</section>
</body>
</html>