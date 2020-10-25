<!DOCTYPE html>
<html>
<head>
	<title>Search committee</title>
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

	$searchQuery = mysqli_query($con, "select * from family where number like '%$input%'  or fname like '%$input%'  or lname like '%$input%' or contact like '%$input%' or county like '%$input%' or subcounty like '%$input%' or ward like '%$input%' or siblings like '%$input%' or children like '%$input%' or siblingsseco like '%$input%' or siblingspost like '%$input%' or name1 like '%$input%' or school1 like '%$input%' or name2 like '%$input%' or school2 like '%$input%' or name3 like '%$input%' or school3 like '%$input%' or Scholarship like '%$input%' or amount like '%$input%' or year like '%$input%' or organization like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>ID NUMBER</th>
					<th>NAME</th>
					<th>CONTACT</th>
					<th>COUNTY</th>
					<th>SUB COUNTY</th>
					<th>WARD</th>
					<th>SIBILINGS</th>
					<th>GURDIAN CHILDREN</th>
					<th>SECONDARY SIBILINGS</th>
					<th>POST SECONDARY SIBILINGS</th>
					<th>SIBILING NAME</th>
					<th>SCHOOL</th>
					<th>SIBILING NAME</th>
					<th>SCHOOL</th>
					<th>SIBILING NAME</th>
					<th>SCHOOL</th>
					<th>SCHOLARSHIP</th>
					<th>AMOUNT</th>
					<th>YEAR</th>
					<th>ORGANIZATION</th>
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
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['county']; ?></td>
						<td><?php echo $row['subcounty']; ?></td>
						<td><?php echo $row['ward']; ?></td>
						<td><?php echo $row['siblings']; ?></td>
						<td><?php echo $row['children']; ?></td>
						<td><?php echo $row['siblingsseco']; ?></td>
						<td><?php echo $row['siblingspost']; ?></td>
						<td><?php echo $row['name1']; ?></td>
						<td><?php echo $row['school1']; ?></td>
						<td><?php echo $row['name2']; ?></td>
						<td><?php echo $row['school2']; ?></td>
						<td><?php echo $row['name3']; ?></td>
						<td><?php echo $row['school3']; ?></td>
						<td><?php echo $row['Scholarship']; ?></td>
						<td><?php echo $row['amount']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><?php echo $row['organization']; ?></td>
					
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