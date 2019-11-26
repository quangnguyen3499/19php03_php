<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<?php include 'database.php';?>
	<?php 
		$checkValidate = true;
		$errImage = 'Please choose image';
		$errUser = '';
		$errPass = '';
		$errUsername = '';
		$errAvatar = '';
	if (isset($_POST['register']) && $checkValidate) {
		$username = $_POST['username'];
		$password = $_POST['password'];
    	if ($_FILES['avatar']['error'] == 0) {
	    	$avatar = $_FILES['avatar']['name'];
		    move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
	    }
	    $sqlInsert = "INSERT INTO users(username, password, avatar) VALUES ('$username', '$password', '$avatar')";
	    if (mysqli_query($connect, $sqlInsert) === TRUE) {
	    // chuyen trang
		   header('Location: list_users.php');
	    }
    if ($username == '') {
		$checkValidate = false;
		$errUser = 'Please input username';
	}
	if ($password == '') {
		$checkValidate = false;
		$errPass = 'Please fill password';
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