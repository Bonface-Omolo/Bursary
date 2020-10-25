<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>applicant data</title>
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
		width: 16%;
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
				background-color: #A9A9A9;
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
<form name="frmRegistration" method="post" action="app1.php"> 
	<H2>PART A: GENERAL INFORMATION OF THE APPLICANT</H2>

	<label for="description:"class="lbl" >Select the option  that fit your description:</label>
	<select name="description" class="ged" style="color: black; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4pxcontact;">>
	<option>I am currently an ongoing student in school.</option>
	<option>I dropped out of school and I would want to resume studies.</option>
	<option>I would want to join or enroll into a school</option>
</select>
<label for="number" class="lbl" >Id Number</label>
<input type="number" class="num" name="number"  required><br>
<label for="fname" class="lbl" >First Name</label>
<input type="text" class="fname" name="fname"  required>
<label for="lname"  class="lbl2"> Last Name</label>
<input type="text" class="lname" name="lname" required><br>
<label for="Gender:"class="lbl" >Gender:</label>
<select name="gander" class="ged" style="color: black; width:30%; padding: 8px; margin-left: 20px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Male</option>
	<option>Female</option>
	<option>Others</option>
</select>

<label for="date"class="lbl" >Date of Birth</label> 
<input type="date" class="date"name="date"  required> <br>
<label for="contact" class="lbl3"> Contact</label>
<input type="number"  name="contact" class="cont" required><br>
<h2>Current Residence</h2>

<label for="subcounty:"class="lbl" >Sub County:</label>
<select name="county" class="ged" style="color: black; width:30%; padding: 8px; margin-left: 29px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Lamu East</option>
	<option>Lamu West</option>
</select>
<label for="word:"class="lbl" >ward:</label>
<select name="ward" class="ged" style="color: black; width:27%; padding: 8px; margin-left: 80px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Kanza</option>
	<option>Kiunga</option>
	<option>Basuba</option>
	<option>Shella</option>
	<option>Mkomani</option>
	<option>Hindi</option>
	<option>Mkunumbi</option>
	<option>Hongwe</option>
	<option>Witu</option>
	<option>Bahari</option>
</select> <br>
<label for="special:"class="lbl" >Any special need:</label><select name="special" class="ged" style="color: black; margin-left: 2px; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Yes</option>
	<option>No</option>
</select>

<label for="[need]"class="lbl2" >If yes, State need</label>
<input type="need" class="need" name="need" required><br><br>
<input type="submit" name="submit" value="Submit"  required>
<button  type="cancel" name="cancel" ><a href="home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
