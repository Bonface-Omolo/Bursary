

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view institution</title>
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
	<form action="searchapplication2.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">INSTITUTION INFORMATION</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from institution order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

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

			if ($numberofRows>0) {
				$seq_no = 1;
				while ($row = mysqli_fetch_assoc($selectQuery)) {
			?>
				
				<tr>
					<form action="" method="post">

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
				$seq_no ++;
				} 
			}
		echo '</tbody></table>';
		?>
	</div>
	<div >
		<a style="margin-left: 20%" href="view-application1.php">Previous</a>
		<a style="margin-left: 60%" href="view-application3.php">next</a>
	</div>




</body>
</html>