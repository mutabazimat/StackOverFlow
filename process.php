<?php 
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	//database connection
	$conn = mysqli_connect('localhost', 'root', 'matt', 'php')
			or die('Unable to connect to the database');

	//if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		//validation
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email  is required");
		}
		if (empty($password_1)) {
			array_push($errors, "password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not march.");
		}

		//if threre no errors
		if (count($errors) == 0){
			$password = $password_1;
			$sql = "INSERT INTO USER (username, email, password) 
			VALUES ('$username', '$email', '$password')";
			mysqli_query($conn, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: success.php');
		}

	}
?>