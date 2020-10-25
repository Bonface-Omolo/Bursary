<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$gander = mysqli_real_escape_string($con, $_POST['gander']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$county = mysqli_real_escape_string($con, $_POST['county']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$ward = mysqli_real_escape_string($con, $_POST['ward']);
	$special = mysqli_real_escape_string($con, $_POST['special']);
	$need = mysqli_real_escape_string($con, $_POST['need']);


	 $Check_student = mysqli_query($con, "select * from student where number='$number'");
	    $check_row = mysqli_num_rows($Check_student);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into student(description, number, fname, lname, gander, date, county, contact, ward, special, need) values('$description','$number','$fname','$lname','$gander','$date','$county','$contact','$ward','$special','$need')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Please fill the next form'); window.open('application2.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('book.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('book.php','_self')</script>";}
	}
			



?>

