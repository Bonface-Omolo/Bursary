<?php session_start(); include('admin-session.php'); ?>

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view appeal</title>
	<style type="text/css">
		.table{
	margin: 10px auto;
	border-collapse: collapse;
	width: 80%;
	background-color: #F5F5DC;
}
.table tr th{
	background-color: #FFE4C4;
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
	<form action="searchappeal.php" method="post">
		<input placeholder="Search by Addimission,case code and reason" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>

<div class="center">
		<h2 style="margin-left: 35%;">Cases Filled</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from appeal order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

			echo "
					<table class='table' border=1>
					<thead>
						<tr>
							<th>Addimission</th>
							<th>Case Code</th>
							<th>Reason</th>
							<th>checklist</th>
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
						<td><?php echo $row['addimission']; ?> 
						<td><?php echo $row['casecode']; ?></td>
						<td><?php echo $row['message']; ?></td>
						
						
						<td ><label><input type="checkbox" class="indeterminate-checkbox" name='check' value="<?php echo $row['id']; ?>" required /><span></span></label></td>
						<td>
							<a href='editappeal.php?productID=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
							<button type="submit" name="delete" value="Delete" style="padding:3px;border-radius:4px;border:none;background-color:red;color:white">Delete</button>
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


<?php 

	if (isset($_POST['delete'])) {
		$check = $_POST['check'];

		$checkQuery = mysqli_query($con, "select * from appeal where id='$check' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0) {
			$delete = mysqli_query($con, "delete from appeal where id='$check'");
			if ($delete) {
				echo "<script>alert('Appealled  case deleted successfully'); window.open('view-appeal.php','_self') </script>";
			}else{
				echo "<script>alert('Appealled  case failed to delete'); window.open('index.php','_self') </script>";
			}
		}
	}

?>
</body>
</html>