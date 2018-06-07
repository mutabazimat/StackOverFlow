<?php 
$conn = mysqli_connect('localhost', 'root', 'matt', 'stack')
			or die('Unable to connect to the database');

	//get values passe from form in login.php file
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	//to prevent mysql injection

	$email = stripcslashes($email);
	$password = stripcslashes($password);
	 $email = mysqli_real_escape_string($conn,$email);
	 $password = mysqli_real_escape_string($conn,$password);
	
	//Query the database for user

	$result = mysqli_query($conn,"SELECT  * FROM user WHERE email ='$email'
	 AND password = '$password'");
				// or die("Unable  to query  database". mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['email']==$email && $row['password']==$password) {
		echo "login success";
	}
	else
		echo "login Failed";
?>