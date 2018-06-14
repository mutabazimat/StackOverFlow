<?php include('process.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tres</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		html{
	background-color: #fff;
}
#head{
	width: 100%;
}
#head .upper li:hover{
	background-color: #ccc;
}
#head .upper{
height: 4vw;
}
a{
	text-decoration: none;
}

#head .upper ul{
	/*background-color: #000;*/
}
#head .upper ul li{
	padding: 5pt;
	display: inline;
	margin: 15pt;
	font-weight: bolder;
}
#head .upper ul li img{
	width: 2vw;
	height: 1vw;

}

.upper .right{
	margin-right: 3vw;
	float: right;
	margin-top: 4vw;
}
.upper .lft{
	float: left;
}
.lower{
	height: 195pt;
	width: 100%;
	background-color: blue;
	color: #fff;
	/*margin-top: 10pt;*/
}
article, footer{
	color: #fff;
}
footer{
	background-color: #21f;
	height: 10pt;

}
.disc{
	margin-left: 5vw;
	float: left;
	/*background-color: #577;*/
}
.link{
	margin-right: 10vw;
	float: right;
}
.link a{
	border-style: solid 2px white;
}
.link a{
	font-size: 19pt;
	margin: 5pt;
	color: white;
	width: 22vw;
	border: white;

}
.link img{
	width: 8vw;
	height: 3vw;
}
pre{
	font-family: Times New Roman;
	font-size: 10pt;
}
#cont{
	background-color: #fccddd;
	height: 19vw;
}
#cont .contMenu{

}
#cont .contMenu li{
	display: inline;
	font-size: 16pt;
	padding: 10pt;

}
#foot{
	background-color: #122112;
	height: 5vw;
	text-align: center;
	color: white;
	padding-top: 1vw;
}
.md{
	background-color: #4599ff;
	height: 4vw;
	color: #fff;
	font-weight: bolder;
	margin: 0vw;
}
#frm{
	margin: 15vw 30vw;
	padding: 5vw;
	background-color: #98746f;
	text-align: center;
	border-radius: 2vw;
}
#regTable{
	margin: 10vw auto;
	width: 50vw;
	height: 50vw;
	background-color: #000;
}
.body{
	background-color: red;
}
	</style>
</head>
<body >
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
			<li style="background-color: blue; color: #fff"><a href="register.php">Sign Out</a></li><br/>
			<li><a href="login.php">  </a></li>
		</ul>
	</div>
	<div class="lower">
			<pre class="disc">
			<h2>Learn, Share, Build</h2>
			<p>Each month, over 50 million developers come to stack Overflow to 
learn, share their knowledge, and build their careers.
<br/>
Join the worlde's largest developer community.</p></pre>
			<p>
				<!-- <ul>
					<li><a href="">Google</a></li>
					<li><a href=""></a>Facebook</li>
					<li><a href=""></a>Sign Up</li>
				</ul> -->
				<pre  class="link"><a href="https://mail.google.com/signup"><img src="assets/images/g.png" style="width: 3vw"><img src="assets/images/gg.png"></a><a href=""><img src="assets/images/facebook.png"></a><a href="register.php">Sign Up</a>
By registering, You agree to the privacy policy and terms of service</pre>
			</p>
	</div>
</div>
<div class="md">
	Stack Overflow Business Solution: Looking to understand, engage, or hire developers? Learn more>>
</div>
<div id="cont">
<br/>
	<ul class="contMenu">
		<li style="float: left; margin-left: 10vw">Top Questions</li>
		<li style=""><a href="">interesting</a></li>
		<li style=""><a href="">featured</a></li>
		<li style=""><a href="">hot</a></li>
		<li style=""><a href="">week</a></li>
		<li style=""><a href="">month</a></li>
		<li style="float: right; margin-right:10vw"><a href="">ask Question</a></li>
	</ul>
	<table>
		<tbody>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
			</tr>
			<tr>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
			</tr>
		</tbody>
	</table>
</div>
<div id="foot">
	&copy Tres-SDA, Thursday Group
</div>
</body>
</html>