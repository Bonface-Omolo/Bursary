<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$county = mysqli_real_escape_string($con, $_POST['county']);
	$subcounty = mysqli_real_escape_string($con, $_POST['subcounty']);
	$ward = mysqli_real_escape_string($con, $_POST['ward']);
	$siblings = mysqli_real_escape_string($con, $_POST['siblings']);
	$children = mysqli_real_escape_string($con, $_POST['children']);
	$siblingsseco = mysqli_real_escape_string($con, $_POST['siblingsseco']);
	$siblingspost = mysqli_real_escape_string($con, $_POST['siblingspost']);
	$name1 = mysqli_real_escape_string($con, $_POST['name1']);
	$School1 = mysqli_real_escape_string($con, $_POST['School1']);
	$name2 = mysqli_real_escape_string($con, $_POST['name2']);
	$School2 = mysqli_real_escape_string($con, $_POST['School2']);
	$name3 = mysqli_real_escape_string($con, $_POST['name3']);
	$School3 = mysqli_real_escape_string($con, $_POST['School3']);
	$Scholarship = mysqli_real_escape_string($con, $_POST['Scholarship']);
	$amount = mysqli_real_escape_string($con, $_POST['amount']);
	$year = mysqli_real_escape_string($con, $_POST['year']);
	$organization = mysqli_real_escape_string($con, $_POST['organization']);


	 $Check_family = mysqli_query($con, "select * from family where number='$number'");
	    $check_row = mysqli_num_rows($Check_family);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into family(number, fname, lname, contact, county, subcounty, ward, siblings, children, siblingsseco, siblingspost, name1, School1, name2, School2, name3, School3, Scholarship, amount, year, organization) values('$number','$fname','$lname','$contact','$county','$subcounty','$ward','$siblings','$children','$siblingsseco','$siblingspost','$name1','$School1','$name2','$School2','$name3','$School3','$Scholarship','$amount','$year','$organization')");
			if ($insert_reg) {echo "<script>alert('Data Submitted successfully. Please fill the next form'); window.open('application4.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('application3.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('application3.php','_self')</script>";}
	}
			



?>

