<!DOCTYPE html>
<html>
<head>
	<title>Search report</title>
	<style type="text/css">
		.table{
			margin: 10px auto;
			border-collapse: collapse;
			width: 90%;
			background-color: #FFFAF0;
		}
		.table tr th{
			background-color: #DCDCDC;
			color: #000000;
			padding: 10px;
			font-size: 8px;
			
		}
		.table tr td{
			padding: 5px;
			font-size: 12px;
		}
		.table tr:hover{
			background-color: #ccc;
		}
		.center{
			width: 80%;
			margin: 20px auto;
		}
	
	</style>
</head>
<body>
<?php 

require '../dbcontroller.php';
include ('a-header.php');

if (isset($_POST['search'])) {
	$input = mysqli_real_escape_string($con, $_POST['search-input']);

	$searchQuery = mysqli_query($con, "select * from declaration where number like '%$input%'  or fname like '%$input%' or lname like '%$input%' or signature like '%$input%' or date like '%$input%' or fpname like '%$input%' or lpname like '%$input%'  or psignature like '%$input%' or date2 like '%$input%'  or approve like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>ID NUMBER</th>
					<th>Name</th>
					<th>SIGNATURE</th>
					<th>DATE</th>
					<th>PARENT/GURDIAN NAME</th>
					<th>SIGNATURE</th>
					<th>DATE</th>
					<th>APPROVEMENT</th>
				</tr>
			</thead>
			<tbody>
		";

	if (mysqli_num_rows($searchQuery)>0){
		$no =1;
		while ($row = mysqli_fetch_array($searchQuery)) {
			?>
				<tr>
					<form action="" method="post">
					<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['signature']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['fpname']; ?> <?php echo $row['lpname']; ?></td>
						<td><?php echo $row['psignature']; ?></td>
						<td><?php echo $row['date2']; ?></td>
						<td><?php echo $row['approve']; ?></td>
						
					</form>
				</tr>
			<?php
				$no ++;
				}
			}echo '</tbody></table>';
	}


?>
</body>
</html>