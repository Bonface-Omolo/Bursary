

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view student</title>
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
	<form action="searchapplication1.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">STUDENTS INFORMATION</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from student order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

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

			if ($numberofRows>0) {
				$seq_no = 1;
				while ($row = mysqli_fetch_assoc($selectQuery)) {
			?>
				
				<tr>
					<form action="" method="post">
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
				$seq_no ++;
				} 
			}
		echo '</tbody></table>';
		?>
	</div>
	<div >
		<a style="margin-left: 60%" href="view-application2.php">next</a>
		<a href=""></a>
	</div>




</body>
</html>