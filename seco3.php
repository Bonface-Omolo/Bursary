<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$signature = mysqli_real_escape_string($con, $_POST['signature']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	


	 $Check_secondary3 = mysqli_query($con, "select * from secondary3 where number='$number'");
	    $check_row = mysqli_num_rows($Check_secondary3);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into secondary3(number, fname, lname, signature, date) values('$number',  '$fname', '$lname', '$signature', '$date')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Thank you for application'); window.open('home.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('secondary3.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('secondary3.php','_self')</script>";}
	}
			



?>

