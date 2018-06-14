<?php 
	//error_reporting(0);
	include('process.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div> 
	<form action="register.php" method="POST">

	<!-- displayibng errors -->
	<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo "$username"; ?>"> 
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo "$email"; ?>"> 
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" value="<?php echo "$password"; ?>"> 
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2"> 
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sin in</a>
		</p>
	</form>
</body>
</html>

