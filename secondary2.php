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
		width: 35%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 4%;
}
.area{
		width: 20%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 4%;

}
.much{
		width: 8%;
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
		width: 23%;
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
	.question{
		width: 29%;
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
	.child{
		width: 15%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		/*margin-left: 0%;*/

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
<form name="frmRegistration" method="post" action="seco2.php"> 
	<H2>PART B: FAMILY BACKGROUND</H2>
<label for="number" >Admission Number</label>
<input type="number" class="num" name="number"  required>
<label for="number" style="margin-left: 13%" >Who is responsible for your education?</label>
<input type="text" class="question" name="question"  required><br>

<label for="fname" class="lbl" >First Name</label>
<input type="text" class="fname" name="fname"  required>
<label for="lname"  style="margin-left: 7%"> Last Name</label>
<input type="text" class="lname" name="lname" required><br>
<label for="lname"  class="lbl2"> Contact  </label>
<input type="number" class="number" name="contact" required> 

<label for="children:"class="lbl" >Are there other children /siblings in school?</label>
<select name="children" class="ged" style="color: black; width:33%; padding: 8px; margin-left: 20px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>YES</option>
	<option>NO</option>
</select><br>

<label for="date"class="lbl" >Sibling’s Names</label> 
<input type="text" class="child"name="siblings"  required>

<label for="date"class="lbl" >Name of Institution</label> 
<input type="text" class="child"name="institution"  required> 

<label for="word:"class="lbl" >Class/Form:</label>
<select name="form" class="ged" style="color: black; width:12%; padding: 8px; margin-left: 0px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>Form 1</option>
	<option>Form 2</option>
	<option>Form 3</option>
	<option>Form 4</option>
</select>
<label for="date"class="lbl" >Sponsor</label> 
<input type="text" class="child"name="sponsor"  required> <br>
<br>
<label for="subcounty:"class="lbl" >Have you benefited from other funds such as CDF, CBF, NGAAF, other donors) this year?:</label>
<select name="donors" class="ged" style="color: black; width:8%; padding: 8px; margin-left: 29px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>YES</option>
	<option>NO</option>
</select>

<label for="lname"  class="lbl2"> If yes specify how much did you receive?</label>
<input type="text" class="much" name="much" required><br> 
<label for="fname" class="lbl" >What balance do you have?.</label>
<input type="text" class="fname" name="balance"  required><br><br>
<input type="submit" name="submit" value="Submit"  required>
<button  type="cancel" name="cancel" ><a href="home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
