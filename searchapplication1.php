<!DOCTYPE html>
<html>
<head>
	<title>Admin Search</title>
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

	$searchQuery = mysqli_query($con, "select * from student where description like '%$input%'  or number like '%$input%' or fname like '%$input%'  or lname like '%$input%' or gander like '%$input%' or date like '%$input%' or contact like '%$input%' or county like '%$input%'or ward like '%$input%'or special like '%$input%'or need like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>Desicription</th>
					<th>Id Number</th>
					<th>Name</th>
					<th>Gander</th>
					<th>Date</th>
					<th>Contact</th>
					<th>County</th>
					<th>ward</th>
					<th>Special</th>
					<th>Need</th>
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
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['gander']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['county']; ?></td>
						<td><?php echo $row['ward']; ?></td>
						<td><?php echo $row['special']; ?></td>
						<td><?php echo $row['need']; ?></td>
					
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