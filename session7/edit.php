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
	<?php include 'database.php';?>
	<?php 
		// get old user to edit
		$idEdit = $_GET['id'];
		$errUsername = '';
		$errAvatar = '';		
		$sqlEdit = "SELECT * FROM users WHERE id = $idEdit";
		$dataEdit = mysqli_query($connect, $sqlEdit);
		$edit = $dataEdit->fetch_assoc();
		$user = "SELECT username FROM users";
		$ava = "SELECT avatar FROM users";
		if($edit['username'] === $user)
		$errUsername = 'Username has been existed';
		if($edit['avatar'] === $ava)
		$errAvatar = 'Image has been chosen';

	  // end get old
		if (isset($_POST['edit'])) {
			$username = $_POST['username'];
			$avatar = $edit['avatar'];
			if ($_FILES['avatar']['error'] == 0) {
				$avatar = $_FILES['avatar']['name'];
				move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
			$sqlEditData = "UPDATE users SET username = '$username', avatar = '$avatar' WHERE id = $idEdit";
			if (mysqli_query($connect, $sqlEditData) === TRUE) {
				// chuyen trang
				header('Location: list_users.php');
			}
		}
	?>
	<h1>Edit form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="username" placeholder="username" value="<?php echo $edit['username']?>">
			<span class="error"> <?php echo $errUsername;?> </span>
		</p>
		<p>
			<input type="file" name="avatar">
			<img src="uploads/<?php echo $edit['avatar']?>">
			<span class="error"> <?php echo $errAvatar;?> </span>
		</p>
		<p>
			<input type="submit" name="edit" value="Edit">
		</p>
	</form>
</body>
</html>