<?php include('process.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<div class="header">
		<h2>Log in</h2>
	</div> 
	<form action="login.php" method="POST">
		
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email"> 
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1"> 
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Sign in</button>
		</div>
		<p>
			Are you a new user? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>
