<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<?php include 'database.php';?>
	<?php 
		if (isset($_POST['register'])) {
			$id = $_POST['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$avatar = 'default.png';
			if ($_FILES['avatar']['error'] == 0) {
				$avatar = $_FILES['avatar']['name'];
				move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
			$sqlInsert = "INSERT INTO news(id, title, description, image) VALUES ('$id', '$title', '$description', '$avatar')";
			if (mysqli_query($connect, $sqlInsert) === TRUE) {
				// chuyen trang
				header('Location: list_users.php');
			}
		}
	?>
	<h1>Register form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="id" placeholder="id">
		</p>
		<p>
			<input type="text" name="title" placeholder="title">
		</p>
		<p>
			<input type="textarea" name="description" placeholder="description">
		</p>
		<p>
			<input type="file" name="image">
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>