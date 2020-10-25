
<?php 
require '../dbcontroller.php';
 ?>
			
<html>
<head>
<title>Admin login </title>
	<style>
		body{
			margin: 0px;
			padding: 0px;
		}

		header{
				width: 100%;
				position: fixed;
				position: relative;
				height: 100px;
				background: #A9A9A9;
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
				color: black;
			}

			.form{
				width: 50%;
				margin: 20px auto;
				border-radius: 10px;
				background: #F0F8FF;
				color: black;
				padding: 20px;
				text-align: center;
				border: 3PX solid #FAEBD7;
				opacity: 0.7;
			}
			form input{
				width: 45%;
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
			button{
				width: 20%;
				height: 25px;
				background: black;
				color: white;
				border-radius: 7px;
				border: none;

			}
			 a{
				text-decoration: none;
				color: black;
			}
				.bg{
			background-image:  url("../image/team.jpg");
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
		<h1>LAMU COUNTY BURSARY MANAGEMENT SYSTEM M</h1>
	</div>
	<nav>
		<ul>
			<li><a href="../index.php">HOME</a></li>
			
		</ul>
	</nav>
</header>
<form class="form" name="frmRegistration" method="post" action="a-login.php">
	<h2> Administration login </h2>
<input placeholder="email" type="email"  name="email"required><br>
<input placeholder="Password" type="password" name="password" required><br>
<input class='btn' type="submit" name="login-user" value="Login" class="btnRegister" required>
 <a href="check.php"><b>Forget Password</b></a> 
</form>
</div>
</bod/>
</html>
