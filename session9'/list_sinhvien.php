<!DOCTYPE html>
<html>
<head>
	<title>List student</title>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<?php 
	include 'connect.php';
	//include 'add_product.php';
	// get category
		$sqlCate = "SELECT * FROM sinhvien";
		$categories = mysqli_query($connect, $sqlCate);
		// end get category
		$sqlSelect = "SELECT sinhvien.id, sinhvien.name, sinhvien.gender, sinhvien.school FROM sinhvien";
		// Thuc hien chuc nang tim kiem
		$keyword = '';
		if (isset($_POST['search'])) {
		$keyword = $_POST['keyword'];
		// search keyword
		if ($keyword != '') {
			$sinhvien_category_id = $_POST['sinhvien_category_id'];
			$sqlSelect = "SELECT sinhvien.id, sinhvien.name, sinhvien.gender, sinhvien.school FROM sinhvien
			WHERE (sinhvien.name LIKE '%$keyword%') OR (sinhvien.gender LIKE '%$keyword%') OR (sinhvien.school LIKE '%$keyword%')";
		}
		}
	$result = mysqli_query($connect, $sqlSelect);
?>
	<h1>List student</h1>
	<form action="#" method="POST" name="search-student">
		<p>
			Keyword
			<input type="text" name="keyword" value="<?php echo $keyword;?>">
		</p>
		<p>
			Name
			<select name="sinhvien_category_id">
				<?php 
						while ($row = $categories->fetch_assoc()) {
							echo "<option value='".$row['id']."'>".$row['name']."</option>";
						}
				?>
			</select>
		</p>
		<p>
			<input type="submit" name="search">
		</p>
	</form>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>School</th>
			<th>Action</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['school']."</td>";
				echo "<td><a href='delete.php?id=".$id."''>Delete</a> | <a href='edit.php?id=".$id."''>Edit</a></td>";
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>