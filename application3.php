<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>family data</title>
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
		width: 25%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
	}
	.lname{
		width: 25%;
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
		width: 37%;
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
		width: 35%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
	}
	.org{
		width: 20%;
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
<form name="frmRegistration" method="post" action="app3.php"> 
	<H2>PART C: FAMILY INFORMATION</H2>

<label for="number" class="lbl" > Student Id Number</label>
<input type="number" class="num" name="number"  required>
<label for="fname" class="lbl" >Parent’s/Guardians First Name:</label>
<input type="text" class="fname" name="fname"  required><br>
<label for="lname"  class="lbl2"> Parent’s/Guardians First Name</label>
<input type="text" class="lname" name="lname" required>
<label for="contact" class="lbl3"> Contact</label>
<input type="number"  name="contact" class="cont" required><br>
<h2>Current Residence</h2>

<label for="subcounty:"class="lbl" >County:</label>
<select name="county" class="ged" style="color: black; width:18%; padding: 8px; margin-left: 29px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Lamu East</option>
	<option>Lamu West</option>
</select>
<label for="subcounty:"class="lbl" >Sub County:</label>
<select name="subcounty" class="ged" style="color: black; width:18%; padding: 8px; margin-left: 29px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Lamu East</option>
	<option>Lamu West</option>
</select>
<label for="word:"class="lbl" >ward:</label>
<select name="ward" class="ged" style="color: black; width:18%; padding: 8px; margin-left: 80px; border: 2px solid steelblue; border-radius: 4px;">>
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
</select> <br><br>
<label for="special:"class="lbl" >How many siblings do you have?:</label>
<select name="siblings" class="ged" style="color: black; margin-left: 2px; width:15%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
</select>
<label style="margin-left: 13%;" for="special:"class="lbl4" >How many children does the guardian have?:</label>
<select name="children" class="ged" style="color: black; margin-left: 2px; width:15%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
</select>
<br><br>
<h2>How many of your siblings are:</h2>
<label style="margin-left: 2%;" for="special:"class="lbl4" >In Secondary School:</label>
<select name="siblingsseco" class="ged" style="color: black; margin-left: 2px; width:20%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
</select>
<label style="margin-left: 20%;" for="special:"class="lbl4" >In Post-Secondary School::</label>
<select name="siblingspost" class="ged" style="color: black; margin-left: 2px; width:20%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
</select><br><br>

<label for="[need]"class="lbl2">Name</label>
<input type="need" class="need" name="name1" >
<label for="[need]"class="lbl2"  style="margin-left: 9%"  >School</label>
<input type="need" class="need" name="School1" ><br><br>
<label for="[need]"class="lbl2">Name</label>
<input type="need" class="need" name="name2" >
<label for="[need]"class="lbl2"  style="margin-left: 9%"  >School</label>
<input type="need" class="need" name="School2" ><br><br>
<label for="[need]"class="lbl2">Name</label>
<input type="need" class="need" name="name3" >
<label for="[need]"class="lbl2"  style="margin-left: 9%"  >School</label>
<input type="need" class="need" name="School3" ><br>
<label for="subcounty:"class="lbl" >Have you ever benefitted from any other Scholarship Fund?:</label>
<select name="Scholarship" class="ged" style="color: black; width:18%; padding: 8px; margin-left: 36%; border: 2px solid steelblue; border-radius: 4px;">>
	<option>YES</option>
	<option>NO</option>
</select><br><br>
<label for="[need]"class="lbl2">If yes state the amount</label>
<input type="need" class="org" name="amount" >
<label for="[need]"class="lbl2"  style="margin-left: 2%"  >Year</label>
<input type="need" class="org" name="year" >
<label for="[need]"class="lbl2"  style="margin-left: 2%"  >Organization</label>
<input type="need" class="org" name="organization" >
<br><br>
<input type="submit" name="submit" value="Submit"  required>
<button  type="cancel" name="cancel" ><a href="home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
