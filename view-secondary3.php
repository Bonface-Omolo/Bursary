

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
	font-size: 10px;
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
	<form action="searchsecondary3.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">DECLARATION INFORMATION</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from secondary3 order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

			echo "
					<table class='table' border=1>
					<thead>
						<tr>
							<th>ID NUMBER</th>
							<th>Name</th>
							<th>SIGNATURE</th>
							<th>DATE</th>
							<th>Approved</th>
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
						<td><?php echo $row['approve']; ?></td>
						<td>
							<a href='admin-edit.php?productID=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Approve Bursary</a>
							
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
		<a style="margin-left: 60%" href="view-application2.php">next</a>
		<a href=""></a>
	</div>


<?php 

	if (isset($_POST['delete'])) {
		$check = $_POST['check'];

		$checkQuery = mysqli_query($con, "select * from student where id='$check' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0) {
			$delete = mysqli_query($con, "delete from student where id='$check'");
			if ($delete) {
				echo "<script>alert('Data deleted successfully'); window.open('view-admin.php','_self') </script>";
			}else{
				echo "<script>alert(' failed to delete'); window.open('index.php','_self') </script>";
			}
		}
	}

?>

</body>
</html>