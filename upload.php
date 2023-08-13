<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Photos Uploaded</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Lato&family=Mulish:wght@500&display=swap');
	.card{
		width: 30%;
		float: left;
		margin: 1%;
		padding: 10px;
		border: 1px solid #232323;
		font-family: Lato;
		min-width: 425px;
	}
	img{
		padding: 10px;
		border: 2px solid #232323;
		border-radius: 5px;
	}

	section{
		width: 100%;
		height: 100%;
		display: flex;
		flex-wrap: wrap;
	}
	nav{
		border-bottom: 3px solid #232323;
	}
	p{
		font-size: 1.3em;
		padding-bottom: 50px;
	}
	center{
		padding-top: 20px;
	}

}
</style>
</head>

<body>
<nav>
<div class="ui secondary menu">
  <b><a class="active item" href="photoGrid.html">
    JK Clicks
  </a></b>
  <a class="item" onclick="window.open('TopClicks.html')">
    Top Clicks
  </a>
  <div class="right menu">
    <a class="ui button" href="upload.html">
      Upload Images
    </a>
       <a class="ui button" href="manage.html">
      Manage your Account
    </a>
  </div>
</div>
</nav>
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
if (isset($_POST['upload']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$title=$_POST['title'];
	$link=$_POST['link'];
	$sql="INSERT INTO pictures values('$name','$email','$title','$link');";
	if ($con->query($sql)==TRUE)
	{
		display();
	}else{
		echo "Error".$con->connect_error;
	}

}


function display()
{
	global $con;
	$sql="SELECT name,text,link FROM pictures;";
	$result=$con->query($sql);
	echo "<center><h1>Photos Uploaded by our Users!</h1><p><i>They are Fabulous! Check them :)</i></p></center>";
	echo "<section>";
	while ($row=$result->fetch_assoc())
	{
		echo "<div class='card'><img src=".$row['link']." width=400 height=200><br>";
		echo "<h1>".$row['text']."</h1>";
		echo "by ".$row['name']."</div>";
	}
	echo "</section>";
}
 ?>	

</body>
</html>