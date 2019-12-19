<!DOCTYPE html>
<html>
<head>
	<title>Add student</title>
</head>
<body>
	<?php 
		include 'connect.php';
		// get category
		$sqlCate = "SELECT * FROM sinhvien";
		$gender = mysqli_query($connect, $sqlCate);
		// end get category
		if (isset($_POST['add_student'])) {
			$name = $_POST['name'];
			$gender = $_POST['gender'];
			$school = $_POST['school'];
			// luu vao bang products
			$sqlSave = "INSERT INTO sinhvien(name, gender, school) VALUES('$name', '$gender', '$school')";
			if (mysqli_query($connect, $sqlSave) === TRUE) {
				header('Location: list_product.php');
			}
		}
	?>
	<h1>Add student</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
			<p>Name
				<input type="text" name="name">
			</p>
			<p>Gender
			<select name="gender">
				<?php 
					echo "<option value='Male'>Male</option>";
					echo "<option value='Female'>Female</option>";
				?>
			</select>
			</p>
			<p>School
			<select name="school">
				<?php 
					echo "<option value='BK'>Bach Khoa</option>";
					echo "<option value='NN'>Ngoai Ngu</option>";
					echo "<option value='SP'>Su Pham</option>";
				?>
			</select>
			</p>
			<p>
				<input type="submit" name="add_student">
			</p>
	</form>
</body>
</html>