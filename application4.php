<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>declaration data</title>
<style type="text/css">
	form{
		 width: 90%;
		margin: 30px auto;
		border-radius: 10px;
		background: white;
		color: black;
		padding: 2px;
		background: #F0F8FF;
		border: 3PX solid #FAEBD7;
		/*text-align: center;*/
		
	}
	.fname{
		width: 30%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
	}
	.lname{
		width: 30%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 4%;
}
	.cont{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 1.5%;
	}
	.number{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		/*margin-left: 0%;*/
		margin-left: -8px;

	}
	.num{
		width: 25%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		/*margin-left: 0%;*/
		margin-left: -8px;

	}
	.date{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		/*margin-left: 0%;*/
		margin-left: 30px;
	}
	.sub{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 3%;

	}
	.need{
		width: 27%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;


	}
	input[type=submit]{
		size: 40px;
		background-color: #00FFFF;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 10px;
		text-align: center;
		margin-left: 30%;
	}
	button[type=cancel]{
		size: 40px;
		background-color: green;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 10px;
		margin-left: 10%;
	}
	 label{
	 	
	}
	h2{
		padding: 2px;
		margin: 2px;
		text-align: center;
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
			}
			/*#demo{
				margin-left: 20%;
			}*/
			.lbl{
				margin-left: 2%;
			}
			.lbl2{
				margin-left: 2%;
			}
			.ged{
				margin-left: 3%;
			}
			button a{
				text-decoration: none;
			}
			.lbl3{
				margin-left: 29px;
			}
			h3{

			padding: 2px;
			margin: 2px;
			text-align: center;
	
			}
			
</style>
</head>
<body>
	
	<header>
	<div class="logo">
		<h1>LAMU COUNTY BURSARY MANAGEMENT SYSTEM </h1>
	</div>
	<nav>
		<ul>
			<li><a href="home.php">HOME</a></li>
			
		</ul>
	</nav>
</header>
<form name="frmRegistration" method="post" action="app4.php"> 
	<H2>PART D: DECLARATION</H2>
	<h3>Applicant’s Declaration</h3>

 I declare that to the best of my knowledge the information given herein is true. 
<label for="number" style="margin-left: 8%" class="lbl" >Id Number</label>
<input type="number" class="num" name="number"  required><br>
<label for="fname" class="lbl" >First Name</label>
<input type="text" class="fname" name="fname"  required>
<label for="lname"  class="lbl2"> Last Name</label>
<input type="text" class="lname" name="lname" required><br>
<label for="Signature" class="lbl3"> Signature</label>
<input type="text"  name="signature" class="cont" required>
<label for="date"class="lbl" >Date of Birth</label> 
<input type="date" class="date"name="date"  required> <br><br>
<h3>Parent/Guardian Declaration</h3>
<p> I declare that I have read this form or the form has been read to me and I hereby confirm that
the information given herein is true to the best of my Knowledge.</p>

<label for="fname" class="lbl" >First Name</label>
<input type="text" class="fname" name="fpname"  required>
<label for="lname"  class="lbl2"> Last Name</label>
<input type="text" class="lname" name="lpname" required><br>
<label for="Signature" class="lbl3"> Signature</label>
<input type="text"  name="psignature" class="cont" required>
<label for="date"class="lbl" >Date of Birth</label> 
<input type="date" class="date"name="date2"  required> <br><br>
<input type="submit" name="submit" value="Submit"  required>
<button  type="cancel" name="cancel" ><a href="home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
