<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$form = mysqli_real_escape_string($con, $_POST['form']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$gander = mysqli_real_escape_string($con, $_POST['gander']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
	$subcounty = mysqli_real_escape_string($con, $_POST['subcounty']);
	$ward = mysqli_real_escape_string($con, $_POST['ward']);
	$area = mysqli_real_escape_string($con, $_POST['area']);
	$school = mysqli_real_escape_string($con, $_POST['school']);
	$category = mysqli_real_escape_string($con, $_POST['category']);


	 $Check_secondary1 = mysqli_query($con, "select * from secondary1 where number='$number'");
	    $check_row = mysqli_num_rows($Check_secondary1);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into secondary1(number, form, fname, lname, gander, place, subcounty, ward, area, school, category) values('$number', '$form', '$fname', '$lname', '$gander', '$place', '$subcounty', '$ward','$area', '$school', '$category')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Please fill the next form'); window.open('secondary2.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('secondary1.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('secondary1.php','_self')</script>";}
	}
			



?>

