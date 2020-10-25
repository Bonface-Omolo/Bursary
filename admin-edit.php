<?php session_start(); include('admin-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>admin edit</title>
	<style type="text/css">
		.form{
				width: 90%;
				margin: 50px auto;
				color: black;
				padding: 20px;
				text-align: left;
				background: #F0F8FF;
				border: 3PX solid #FAEBD7;

			}
			form input{
				width: 30%;
				padding: 5px;
				margin: 10px auto;
				margin-left: 2%;
			}
			.btn{
				width: 30%;
				background: mediumseagreen;
				color: white;
				border-radius: 7px;
				border: none;
				margin-left: 13%;
			}
			.btn:hover{
				color: mediumseagreen;
				background: white;
				border: 1px mediumseagreen solid;
			}
			label{
				margin-left: 2%



			}
	</style>
</head>
<body>


<?php 

require '../dbcontroller.php';
include ('a-header.php');

error_reporting(0);

$pID = $_GET['productID'];

$selectQuery = mysqli_query($con, "select * from secondary3 where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$number = $fetchQuery['number'];
$approve = $fetchQuery['approve'];

?>

<form method="post" action="" class="form" ><br>
	<label for="fname" >ID Number</label> 
	<input type="text" name="number" value="<?php echo $number?>">
	<label for="Gender:"class="lbl" >Approve:</label>
	<select name="approve" class="ged" style="color: black; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4pxcontact;">>
	<option>Accepted</option>
	<option>Declined</option>	
</select>
	

	<input type="submit" name="edit" class="btn" value="Approve">
</form>


<?php 

	if (isset($_POST['edit'])) {
		$approve = $_POST['approve'];
		

		$checkQuery = mysqli_query($con, "select * from secondary3 where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update secondary3 set approve='$approve' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Bursary approved successfully'); window.open('view-secondary3.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>