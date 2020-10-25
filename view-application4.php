

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view declaration</title>
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
	<form action="searchapplication4.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">DECLARATION INFORMATION</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from declaration order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

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
							<th>Action</th>
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
						<td><?php echo $row['signature']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['fpname']; ?> <?php echo $row['lpname']; ?></td>
						<td><?php echo $row['psignature']; ?></td>
						<td><?php echo $row['date2']; ?></td>
						<td><?php echo $row['approve']; ?></td>

						<td>
							<a href='approve.php?productID=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Approve Bursary</a>
							
						</td>

						
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
	    <a style="margin-left: 20%" href="view-application3.php">Previous</a>
	</div>

</body>
</html>