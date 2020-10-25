<!DOCTYPE html>
<html>
<head>
	<title>Search student</title>
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

	$searchQuery = mysqli_query($con, "select * from secondary1 where number like '%$input%'  or form like '%$input% 'or  fname like '%$input%'  or lname like '%$input%'  or gander like '%$input%'   or place like '%$input%'   or subcounty like '%$input%'   or ward like '%$input%'   or area like '%$input%'   or school like '%$input%'   or category like '%$input%' ");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>ID NUMBER</th>
					<th>FORM/CLASS</th>
					<th>NAME</th>
					<th>GANDER</th>
					<th>BIRTH PLACE</th>
					<th>SUB COUNTY</th>
					<th>WARD</th>
					<th>VILLAGE/AREA</th>
					<th>SCHOOL</th>
					<th>CATEGORY</th>
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
						<td><?php echo $row['form']; ?></td>
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['gander']; ?></td>
						<td><?php echo $row['place']; ?></td>
						<td><?php echo $row['subcounty']; ?></td>
						<td><?php echo $row['ward']; ?></td>
						<td><?php echo $row['area']; ?></td>
						<td><?php echo $row['school']; ?></td>
						<td><?php echo $row['category']; ?></td>

						
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