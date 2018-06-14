<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#container{
		background-color: skyblue;
		margin: 10px auto;
		width: 90%;
	}
	header{
		background-color: #45fd22;
		height: 40px;
		border-radius: 15px;
	}
	aside{
		height: 500px;
		width: 30%;
		background-color:#998fff;
		margin: 10px;
		float: left;
	}
	article{
		background-color: #ffd125;
		width: 65%;
		height: 500px;
		float: right;
		margin: 10px;
	}
	#regTable{
		font-size: 15pt;
		margin: 10px;
	}
	#regTable input{
		background-color: white;
		color: orange;
		padding: 10px;
		font-size: 14pt;
	}
	footer{
		background-color: #000;
		color: white;
		height: 30pt;
		border-radius: 15px;
		position: fixed;
   		bottom: 0;
   		width: 90%;
   		text-align: center;
	}
	</style>
</head>
<body>
<div id="container">
	<header>
		
	</header>
	<aside>

	<h2>Registration Form</h2>
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
				<td>
				<input type="Submit" name="save" value="Save" style="background-color: green; width: 8vw; font-size: 15pt ">
				<input type="Submit" name="view" value="View" style="background-color: #759; width: 8vw; font-size: 15pt "></td>
			</tr>
			
		</tbody>
	</table>
	</aside>
	<article>

		<div></div>
	</article>
	<footer>

		&copy Tres-SDA, Thursday Group
	</footer>
</div>
</body>
</html>