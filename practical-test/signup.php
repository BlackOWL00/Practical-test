<?php 
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['fname'] = htmlentities($_POST['firstname']);
		$_SESSION['lname'] = htmlentities($_POST['lastname']);
		$_SESSION['uname'] = htmlentities($_POST['username']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		$_SESSION['pw'] = htmlentities($_POST['password']);
		header('Location: postsignup.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Sign Up</title>
</head>
<body>
	<div class = "container">
		<form method="POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<div class = "form-group">
			<h1>Sign Up!</h1>
		</div>
		<div class ="form-group">
			<label>First Name</label>
			<input type="text" name="firstname" class ="form-control" value="" required>
		</div>
		<div class ="form-group">
			<label>Last Name</label>
			<input type="text" name="lastname" class ="form-control" value="" required>
		</div>
		<div class ="form-group">
			<label>Email</label>
			<input type="email" name="email" class ="form-control" value="" required>
		</div>
		<div class ="form-group">
			<label>Username</label>
			<input type="text" name="username" class ="form-control" value="" required>
		</div>
		<div class ="form-group">
			<label>Password</label>
			<input type="password" name="password" class ="form-control" value="" required>
		</div>
		<br>
		<button type="submit" name = "submit" class = "btn btn-primary">Create Account</button>
	</form>
	</div>
</body>
</html>