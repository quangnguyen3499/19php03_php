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
		$errUser = '';
		$errPass = '';
		$errUsername = '';
		$errAvatar = '';
		if (isset($_POST['register']) && $checkValidate) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$datepost = date('y-m-d');
			if ($_FILES['avatar']['error'] != 0) {
				$checkValidate = false;
				$errImage = 'Please choose image';
			}   
			if ($username == '') {
			$checkValidate = false;
			$errUser = 'Please input username';
			}
			if ($password == '') {
			$checkValidate = false;
			$errPass = 'Please fill password';
			} 
			$sqlInsert = "INSERT INTO users(username, password, avatar, datepost) VALUES ('$username', '$password', '$avatar', '$datepost')";
			if (mysqli_query($connect, $sqlInsert) === TRUE) {
			// chuyen trang
			   header('Location: list_users.php');
			}
			if ($_FILES['avatar']['error'] == 0) {
			$avatar = $_FILES['avatar']['name'];
		    move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
		}
    ?>
	<h1>Register form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="username" placeholder="username">
			<span class="error"> <?php echo $errUser;?> </span>
			<span class="error"> <?php echo $errUsername;?> </span>
		</p>
		<p>
			<input type="password" name="password" placeholder="password">
			<span class="error"> <?php echo $errPass;?> </span>
		</p>
		<p>
			<input type="file" name="avatar">
			<span class="error"> <?php echo $errImage;?> </span>
			<span class="error"> <?php echo $errAvatar;?> </span>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>