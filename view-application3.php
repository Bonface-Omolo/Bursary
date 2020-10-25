

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view family</title>
	<style type="text/css">
		.table{
	margin: 10px auto;
	border-collapse: collapse;
	width: 110%;
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
	.search{
	width: 40%;
	padding: 5px;
	float: right;
	text-align: right;
}
	</style>
</head>
<body>
	<div class="search">
	<form action="searchapplication3.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">FAMILY INFORMATION</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from family order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

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

			if ($numberofRows>0) {
				$seq_no = 1;
				while ($row = mysqli_fetch_assoc($selectQuery)) {
			?>
				
				<tr>
					<form action="" method="post">
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
				$seq_no ++;
				} 
			}
		echo '</tbody></table>';
		?>
	</div>
	<div >
		<a style="margin-left: 20%" href="view-application2.php">Previous</a>
		<a style="margin-left: 60%" href="view-application4.php">next</a>
	</div>



</body>
</html>