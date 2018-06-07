<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tres</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="head">
	<div class="upper">
		<ul class="lft">
			<li><a href="#"><img src="assets/images/logo.png" style="width: 15vw; height:3vw"></a></li>
			<li style="background-color: orange; color: #fff"><a href="#">NEW</a></li>
			<li><a href="#">Questions</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#"><input type="text" placeholder="Search"></a></li>
			</ul>
			<ul class="right">
			<li><a href="login.php">Log In</a></li>
			<li style="background-color: blue; color: #fff"><a href="#">Sign Out</a></li><br/>
			<li><a href="login.php">  </a></li>
		</ul>
	</div>
</div>
<div class="body" bgcolor="red">
	<table id="regTable">
		<tbody>
			<tr>
				<td>User Id</td>
				<td><input type="text" name="userid"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" name="save" value="Save"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" name="view" value="Viewe"></td>
			</tr>
		</tbody>
	</table>
</div>


<div id="foot">
	&copy Tres-SDA, Thursday Group
</div>
</body>
</html>