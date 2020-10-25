<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$campus = mysqli_real_escape_string($con, $_POST['campus']);
	$county = mysqli_real_escape_string($con, $_POST['county']);
	$admission = mysqli_real_escape_string($con, $_POST['admission']);
	$pobox = mysqli_real_escape_string($con, $_POST['pobox']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$bank = mysqli_real_escape_string($con, $_POST['bank']);
	$branch = mysqli_real_escape_string($con, $_POST['branch']);
	$account = mysqli_real_escape_string($con, $_POST['account']);
	$time = mysqli_real_escape_string($con, $_POST['time']);
	$year = mysqli_real_escape_string($con, $_POST['year']);


	 $Check_institution = mysqli_query($con, "select * from institution where number='$number'");
	    $check_row = mysqli_num_rows($Check_institution);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into institution(number, name, campus, county, admission, pobox, city, email, contact, bank, branch, account, time, year) values('$number','$name','$campus','$county','$admission','$pobox','$city','$email','$contact','$bank','$branch','$account','$time','$year')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Please fill the next form'); window.open('application3.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('application2.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('application2.php','_self')</script>";}
	}
			



?>

