	<?php
	if(isset($_POST['signup'])){
		session_start();
		header('Location: signup.php');
	}
	if(isset($_POST['login'])){
		session_start();
		header('Location: welcome.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Login.css">
	<title>User Login</title>
</head>
<body>
	<div class = 'container'>
		<form method="POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<div class ="form-group"><h1>Login</h1></div>
		<div class ="form-group">
			<label>Username</label>
			<input type="text" name="username" class ="form-control" value="">
		</div>
		<div class ="form-group">
			<label>Password</label>
			<input type="password" name="password" class ="form-control" value="">
		</div>
		<br>
		<button class = "btn btn-primary" name ="login">Login</button>
		<button class = "btn btn-warning" name = "signup">Signup</button>
	</form>
	</div>
</body>
</html>