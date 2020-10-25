<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$signature = mysqli_real_escape_string($con, $_POST['signature']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$fpname = mysqli_real_escape_string($con, $_POST['fpname']);
	$lpname = mysqli_real_escape_string($con, $_POST['lpname']);
	$psignature = mysqli_real_escape_string($con, $_POST['psignature']);
	$date2 = mysqli_real_escape_string($con, $_POST['date2']);


	 $Check_declaration = mysqli_query($con, "select * from declaration where number='$number'");
	    $check_row = mysqli_num_rows($Check_declaration);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into declaration( number, fname, lname, signature, date, fpname, lpname, psignature, date2) values('$number','$fname','$lname','$signature','$date','$fpname','$lpname','$psignature','$date2')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Thank you for application'); window.open('home.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('application4.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('application4.php','_self')</script>";}
	}
			



?>

