
<?php 
require '../dbcontroller.php';
// include ('s-header.php');

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$check_email=mysqli_query($con, "SELECT * FROM users WHERE email ='".$email."'");
	if (mysqli_num_rows($check_email)==1) {
		header('Location:reset.php?email='.$email);
	}else{
		echo "<script>alert('Please Enter the right email'); window.open('check.php','_self')</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset pwdmediumseagreen</title>
	<style type="text/css">
		.form{
				width: 50%;
				margin: 50px auto;
				color: black;
				padding: 20px;
				text-align: center;
				background: #F0F8FF;
				border: 3PX solid #FAEBD7;
				opacity: 0.7;
			}
			form input{
				width: 50%;
				padding: 5px;
				margin: 10px auto;
			}
			.btn{
				width: 20%;
				background: mediumseagreen;
				color: white;
				border-radius: 7px;
				border: none;
			}
			.btn:hover{
				color: mediumseagreen;
				background: white;
				border: 1px mediumseagreen solid;
			}
			body{
			margin: 0px;
			padding: 0px;
		}

		header{
				width: 100%;
				position: fixed;
				position: relative;
				height: 100px;
				background: #663399;
			}
			.logo{
				position: absolute;
				left: 10%;
				top: 10px;
			}
			nav{
				position: absolute;
				top: 20px;
				right: 10%;
			}
			nav ul li{
				list-style: none;
				float: left;
			}
			nav ul li a{
				text-decoration: none;
				padding: 20px;
				color: white;
			}
			nav ul li a:hover{
				color: #ccc;
				font-size: 20px;
			}
			h1{
				font-size: 18px;
				padding: 20px;
			}
			.bg{
			background-image:  url("../image/bg1.jpg");
			background-size: contain;
			width: 1350px;
			height: 610px;
			border: 1px solid block;
			color: pink;
			resize: both;
			overflow: scroll;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<div class="bg">
	<header>
	<div class="logo">
		<h1>LAMU COUNTY BURSARY MANAGEMENT SYSTEM/h1>
	</div>
	<nav>
		<ul>
			<li><a href="user-login.php">LOGIN</a></li>
		</ul>
	</nav>
</header>
<form method="post" class="form">
	<input type="text" name="email" placeholder="Enter your email" required><br>
	<input type="submit" class="btn" name="submit">
	
</form>
</div>
</body>
</html>