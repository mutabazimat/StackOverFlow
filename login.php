<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="process.php" method="POST">
	<h2 style="color:white">Log In</h2>
		<P>
			<label>Email</label>
			<input type="text" id="user" name="email">
		</P>
		<p>
			<label>password</label>
			<input type="password" id="pass" name="password">
		</p>
		<p><input type="submit" id="btn" value="Log In"></p>
		<p><a href="#">forgot password?</a></p>
	</form>

</div>
</body>
</html>