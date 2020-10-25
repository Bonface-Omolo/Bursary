<!DOCTYPE html>
<html>
<head>
	<title>Search appeal</title>
	<style type="text/css">
		.table{
			margin: 10px auto;
			border-collapse: collapse;
			width: 80%;
			background-color: #FFFAF0;
		}
		.table tr th{
			background-color: #DCDCDC;
			color: #0000000;
			padding: 10px;
		}
		.table tr td{
			padding: 5px;
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

	$searchQuery = mysqli_query($con, "select * from secoaward where number like '%$input%'  or institution like '%$input%' or amount like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
				<th>ID NUMBER</th>
				<th>INSTITUTION LEVEL</th>
				<th>AMOUNT</th>
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
				<td><?php echo $row['institution']; ?></td>
				<td><?php echo $row['amount']; ?></td>
						
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