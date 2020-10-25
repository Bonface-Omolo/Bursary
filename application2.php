<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>institute data</title>
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
		width: 35%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
	}
	.lname{
		width: 32%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 1%;
}
	.cont{
		width: 29%;
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
	.admin{
		width: 33%;
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
	.city{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		/*margin-left: 0%;*/
		margin-left: 50px;
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
<form name="frmRegistration" method="post" action="app2.php"> 
	<H2>PART B: ACADEMIC INSTITUTION INFORMATION</H2>

<label for="number" class="lbl" >Id Number</label>
<input type="number" class="num" name="number"  required>
<label for="fname" class="lbl" >Institution name</label>
<input type="text" class="fname" name="name"  required><br>
<label for="lname"  class="lbl2">Location/Campus</label>
<input type="text" class="lname" name="campus" required>
<label for="Gender:"class="lbl" >County:</label>
<select name="county" class="ged" style="color: black; width:30%; padding: 8px; margin-left: 20px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Lamu</option>
	<option>Nairobi</option>
	<option>Kisumu</option>
	<option>Kiambu</option>
	<option>Machakos</option>
	<option>Meru</option>
</select><br>

<label for="date"class="lbl" >Admission Number</label> 
<input type="text" class="admin"name="admission"  required> 
<label for="contact" class="lbl3"> P.O BOX</label>
<input type="text"  name="pobox" class="cont" required><br>
<label for="date"class="lbl" >City</label> 
<input type="text" class="city"name="city"  required> 
<label for="date"class="lbl" >Email Address:</label> 
<input type="email" class="city"name="email"  required><br> 
<label for="contact" class="lbl3"> Phone Number:</label>
<input type="number"  name="contact" class="cont" required>
<label for="date"class="lbl" >Bank</label> 
<input type="text" class="city"name="bank"  required><br> 
<label for="date"class="lbl" >Branch:</label> 
<input type="text" class="city"name="branch"  required> 
<label for="contact" class="lbl3"> Account Number:</label>
<input type="number"  name="account" class="cont" required>
<br>
<label for="subcounty:"class="lbl" >Duration of Study::</label>
<select name="time" class="ged" style="color: black; width:25%; padding: 8px; margin-left: 29px; border: 2px solid steelblue; border-radius: 4px;">>
	<option> ONE YEARS</option>
	<option>TWO YEARS</option>
	<option> THREE YEARS</option>
	<option>FOUR YEARS</option>
	<option> FIVE YEARS</option>
	<option>SIX YEARS</option>
</select> 
<label for="word:"class="lbl" >Current Year:</label>
<select name="year" class="ged" style="color: black; width:27%; padding: 8px; margin-left: 80px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>FIRST YEAR</option>
	<option>SECOND YEAR</option>
	<option>THIRD YEAR</option>
	<option>FORTH YEAR</option>
	<option>FIFTH YEAR</option>
	<option>SIXTH YEAR</option>
	
</select> <br><br>
<input type="submit" name="submit" value="Submit"  required>
<button  type="cancel" name="cancel" ><a href="home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
