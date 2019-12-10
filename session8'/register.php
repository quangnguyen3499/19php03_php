<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<?php include 'database.php';?>
	<?php 
		$checkValidate = true;
		$errImage = '';
		$errTitle = '';
		$errDescribe = '';
		if (isset($_POST['register']) && $checkValidate) {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$datepost = date('y-m-d');
			if ($_FILES['avatar']['error'] != 0) {
				$checkValidate = false;
				$errImage = 'Please choose image';
			}   
			if ($title == '') {
			$checkValidate = false;
			$errTitle = 'Please input title';
			}
			if ($description == '') {
			$checkValidate = false;
			$errDescribe = 'Please fill description';
			} 			
			if ($_FILES['avatar']['error'] == 0) {
			$avatar = $_FILES['avatar']['name'];
		    move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
			$sqlInsert = "INSERT INTO products(title, description, image, datepost) VALUES ('$title', '$description', '$avatar', '$datepost')";
			if (mysqli_query($connect, $sqlInsert) === TRUE) {
			// chuyen trang
			   header('Location: list_users.php');
			}
		}
    ?>
	<h1>Register form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="title" placeholder="title">
			<span class="error"> <?php echo $errTitle;?> </span>
		</p>
		<p>
			<input type="text" name="description" placeholder="description">
			<span class="error"> <?php echo $errDescribe;?> </span>
		</p>
		<p>
			<input type="file" name="avatar">
			<span class="error"> <?php echo $errImage;?> </span>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>