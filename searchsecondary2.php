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

	$searchQuery = mysqli_query($con, "select * from secondary2 where number like '%$input%' or question like '%$input%'  or fname like '%$input%'  or lname like '%$input%' or contact like '%$input%' or children like '%$input%' or siblings like '%$input%' or institution like '%$input%'or form like '%$input%'or sponsor like '%$input%'or donors like '%$input%'or much like '%$input%'or balance like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
			
					<th>ID NUMBER</th>
					<th>RESPONSIBILTY</th>
					<th>Name</th>
					<th>CONTACT</th>
					<th>CHILDREN</th>
					<th>SIBLINGS</th>
					<th>INSTITUTION</th>
					<th>FORM</th>
					<th>SPONSOR</th>
					<th>DONORS</th>
					<th>AMOUNT</th>
					<th>BALANCE</th>
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
						<td><?php echo $row['question']; ?></td>
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['children']; ?></td>
						<td><?php echo $row['siblings']; ?></td>
						<td><?php echo $row['institution']; ?></td>
						<td><?php echo $row['form']; ?></td>
						<td><?php echo $row['sponsor']; ?></td>
						<td><?php echo $row['donors']; ?></td>
						<td><?php echo $row['much']; ?></td>
						<td><?php echo $row['balance']; ?></td>
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