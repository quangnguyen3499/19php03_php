<!DOCTYPE html>
<html>
<head>
	<title>Edit form</title>
		<style type="text/css">
		img {
			width: 150px;
		}
	</style>
</head>
<body>
	<?php include 'connect.php';?>
	<?php 
		// get old user to edit
		$idEdit = $_GET['id'];
		$errName = '';
		$sqlEdit = "SELECT * FROM sinhvien WHERE id = $idEdit";
		$dataEdit = mysqli_query($connect, $sqlEdit);
		$edit = $dataEdit->fetch_assoc();
		$user = "SELECT name FROM sinhvien";
		if($edit['name'] === $user)
		$errUsername = 'Name has been existed';
	  // end get old
		if (isset($_POST['edit'])) {
			$name = $_POST['name'];
			$sqlEditData = "UPDATE sinhvien SET name = '$name' WHERE id = $idEdit";
			if (mysqli_query($connect, $sqlEditData) === TRUE) {
				// chuyen trang
				header('Location: list_sinhvien.php');
			}
		}
	?>
	<h1>Edit form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="name" placeholder="Name..." value="<?php echo $edit['name']?>">
			<span class="error"> <?php echo $errName;?> </span>
		</p>
		<p>
			<input type="submit" name="edit" value="Edit">
		</p>
	</form>
</body>
</html>