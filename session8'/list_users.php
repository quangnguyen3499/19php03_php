<!DOCTYPE html>
<html>
<head>
	<title>List users</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 800px;
		}
		table, tr, th, td {
			border: 1px solid black;
		}
		img {
			width: 150px;
		}
	</style>
</head>
<body>
	<h1>List users</h1>
	<a href="register.php">Register</a>
	<form method="POST" action="search.php">
		<input type="text" name="keyword" placeholder="Please input keyword">
		<button type="submit" name="search">Search</button>
	</form>
	<?php include 'search.php';?>
	<?php include 'database.php';?>
	<?php 
		$sqlSelect = "SELECT * FROM products";
		$result = mysqli_query($connect, $sqlSelect);
	?>
	<table>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Description</th>
			<th>Image</th>
			<th>Action</th>
			<th>Date Post</th>
		</tr>
	
	<?php 
		while ($row = $result->fetch_assoc()) {
			// khai bao id de de su dung khi edit va delete
			$id = $row['id'];
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td><img src='uploads/".$row['image']."'></td>";
			echo "<td><a href='delete.php?id=".$id."''>Delete</a> | <a href='edit.php?id=".$id."''>Edit</a></td>";
			echo "<td>".$row['datepost']."</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>