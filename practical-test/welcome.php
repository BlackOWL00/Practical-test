<?php
	session_start();
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="welcome.css">
	<title>Welcome</title>
</head>
<body>
	<div class = "logoutbtn">
		<a href="Login.php">Logout</a>
	</div>
	<div class = "headertxt">
		<h3>Welcome <?php echo $uname?></h3>
	</div>
	<div class = "content">
		<div class = 'photo'><a href="dog.php"><img src="dog.jpg"></a><h1>Dog</h1></div>
		<div class = 'photo'><a href="cat.php"><img src="cat.jpg"></a><h1>Cat</h1></div>
	</div>
</body>
</html>