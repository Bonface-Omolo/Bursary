<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$number = mysqli_real_escape_string($con, $_POST['number']);
	$level = mysqli_real_escape_string($con, $_POST['level']);
	$amount = mysqli_real_escape_string($con, $_POST['amount']);



	 $Check_uniaward = mysqli_query($con, "select * from uniaward where number='$number'");
	    $check_row = mysqli_num_rows($Check_uniaward);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into uniaward(number, institution, amount) values('$number', '$level',  '$amount')");
			if ($insert_reg) {echo "<script>alert('Awarded successful'); window.open('uniaward.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('uniaward.php','_self')</script>";}
		}else {echo "<script>alert('The id number already exists'); window.open('uniaward.php','_self')</script>";}
	}
			



?>

