<?php
session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$uname = $_SESSION['uname'];
$email = $_SESSION['email'];
$pw = $_SESSION['pw'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Congratulations!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.jumbotron{
			padding-left: 50px;
		}
	</style>
</head>
<body>
	<div class = "jumbotron jumbotron-fluid">
		<h1>Welcome <?php $uname?>!</h1>
		<h4>Name: <?php echo $fname." ".$lname?></h4>
		<h4>Email: <?php echo $email?></h4>

		<p>You have successfully registered!</p>
		<a href="Login.php">Go to Login Page</a>
	</div>
</body>
</html>