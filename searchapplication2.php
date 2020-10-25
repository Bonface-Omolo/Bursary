<!DOCTYPE html>
<html>
<head>
	<title>Search case</title>
	<style type="text/css">
		.table{
			margin: 10px auto;
			border-collapse: collapse;
			width: 80%;
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

	$searchQuery = mysqli_query($con, "select * from institution where name like '%$input%'  or campus like '%$input%' or county like '%$input%'  or admission like '%$input%' or pobox like '%$input%' or city like '%$input%' or email like '%$input%' or contact like '%$input%' or bank like '%$input%' or branch like '%$input%' or account like '%$input%' or time like '%$input%'or year like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>ID NUMBER</th>
					<th>INSTITUTION</th>
					<th>LOCATION</th>
					<th>COUNTY</th>
					<th>ADMSSION NO</th>
					<th>P.O BOX</th>
					<th>CITY</th>
					<th>EMAIL</th>
					<th>CONTACT</th>
					<th>BANK</th>
					<th>BRANCH</th>
					<th>ACCOUNT NUMBER</th>
					<th>STUDY DURATION</th>
					<th>CURRENT YEAR</th>
				</tr>
			</thead>
			<tbody>
		";

	if (mysqli_num_rows($searchQuery)>0){
		$no =1;
		while ($row = mysqli_fetch_array($searchQuery)) {
			?>
				<tr>
					<form action="action.php" method="post">
					<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['campus']; ?></td>
						<td><?php echo $row['county']; ?></td>
						<td><?php echo $row['admission']; ?></td>
						<td><?php echo $row['pobox']; ?></td>
						<td><?php echo $row['city']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['bank']; ?></td>
						<td><?php echo $row['branch']; ?></td>
						<td><?php echo $row['account']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['year']; ?></td>
						
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