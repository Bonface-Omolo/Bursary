<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$question = mysqli_real_escape_string($con, $_POST['question']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$children = mysqli_real_escape_string($con, $_POST['children']);
	$siblings = mysqli_real_escape_string($con, $_POST['siblings']);
	$institution = mysqli_real_escape_string($con, $_POST['institution']);
	$form = mysqli_real_escape_string($con, $_POST['form']);
	$sponsor = mysqli_real_escape_string($con, $_POST['sponsor']);
	$donors = mysqli_real_escape_string($con, $_POST['donors']);
	$much = mysqli_real_escape_string($con, $_POST['much']);
	$balance = mysqli_real_escape_string($con, $_POST['balance']);


	 $Check_secondary2 = mysqli_query($con, "select * from secondary2 where number='$number'");
	    $check_row = mysqli_num_rows($Check_secondary2);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into secondary2(number, question, fname, lname, contact, children, siblings, institution, form, sponsor, donors, much, balance) values('$number', '$question', '$fname', '$lname', '$contact','$children', '$siblings', '$institution', '$form','$sponsor','$donors', '$much', '$balance')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Please fill the next form'); window.open('secondary3.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('secondary2','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('secondary2.php','_self')</script>";}
	}
			



?>

