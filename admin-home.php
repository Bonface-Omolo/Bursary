<?php 
session_start();
include('admin-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<style type="text/css">
	
			ul.ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 15%;
			background-color: #BA55D3;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		li a.btn{
			display: block;
			color: #000;
			padding: 20px 0 20px 40px;
			text-decoration: none;
		}
		li a.btn:hover:not(activ){
			background-color: #7B68EE;
			color: white;
		}
		li a.activ{
			background-color: steelblue;
			color: white;
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
				font-size: 12px;
			}
			h1{
				font-size: 16px;
				padding: 20px;
				color: black;
			}
			.dropbtn {
			    background-color:#A9A9A9;
			    color: white;
			    padding: 1px;
			    font-size: 14px;
			    border: none;
			    cursor: pointer;
			    padding: 1px;
			    margin:1px;
			}



			.dropdown {
			    position: relative;
			    display: inline-block;
			    float: right;
			}

			.dropdown-content {
			    display: none;
			    position: absolute;
			    background-color: #A9A9A9;
			    min-width: 160px;
			    box-shadow: 0px 4px 8px 0px 
			    rgba(0,0,0,0.2);
			}

			.dropdown-content a {
			    color: black;
			    padding: 6px 8px;
			    text-decoration: none;
			    display: block;
			}

			.dropdown-content a:hover 
			{background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
			    display: block;
			}

			.dropdown:hover .dropbtn {
			   color: #ccc;
			   font-size: 12px;
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
		<h1>LAMU COUNTY BURSARY MANAGEMENT SYSTEM </h1>
	</div>
	<nav>
		<ul>
			<li><a href="admin-home.php">HOME</a></li>
			<li><a href="add-admin.php">ADD ADMIN</a></li>
				<div class="dropdown">

		<button class="dropbtn">UNIVERSITY/COLLEGE</button>

		<div class="dropdown-content">

		<a href="view-application1.php">STUDENT DATA</a>
		<a href="view-application2.php">INSTITUTION</a>
		<a href="view-application3.php">FAMILY</a>
		<a href="view-application4.php">DECLARATION</a>
		<a href="uniaward.php">AWARD BURSARY</a>
		<a href="view-uniaward.php">AWARDED BUSARY</a>

		</div>
			<div class="dropdown">

		<button class="dropbtn">SECONDARY SCHHOOL</button>

		<div class="dropdown-content">

		<a href="view-secondary1.php">STUDENT DATA</a>
		<a href="view-secondary2.php">FAMILY/INSTITUTION</a>
		<a href="view-secondary3.php">DECLARATION</a>
		<a href="secoaward.php">AWARD BURSARY</a>
		<a href="view-secoaward.php">AWARDED BUSARY</a>

		</div>
		</div>
			<li><a href="admin-logout.php">LOGOUT</a></li>
		</ul>

		
		</div>
		</ul>
	
</div>

</body>
</html>