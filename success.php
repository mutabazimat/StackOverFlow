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
	<div class="content">
		<?php if ($_SESSION['success']): ?>
			<div class="success">
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index" style="color=red;">log out</a></p>
		<?php endif ?>
	</div>	
</body>
</html>

