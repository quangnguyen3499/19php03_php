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
		$errTitle = '';
		$errAvatar = '';		
		$sqlEdit = "SELECT * FROM products WHERE id = $idEdit";
		$dataEdit = mysqli_query($connect, $sqlEdit);
		$edit = $dataEdit->fetch_assoc();
		$user = "SELECT title FROM products";
		$ava = "SELECT image FROM products";
		if($edit['title'] === $user)
		$errUsername = 'Title has been existed';
		if($edit['image'] === $ava)
		$errAvatar = 'Image has been chosen';

	  // end get old
		if (isset($_POST['edit'])) {
			$title = $_POST['title'];
			$avatar = $edit['image'];
			if ($_FILES['avatar']['error'] == 0) {
				$avatar = $_FILES['avatar']['name'];
				move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
			$sqlEditData = "UPDATE products SET title = '$title', image = '$avatar' WHERE id = $idEdit";
			if (mysqli_query($connect, $sqlEditData) === TRUE) {
				// chuyen trang
				header('Location: list_users.php');
			}
		}
	?>
	<h1>Edit form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			<input type="text" name="title" placeholder="title" value="<?php echo $edit['title']?>">
			<span class="error"> <?php echo $errTitle;?> </span>
		</p>
		<p>
			<input type="file" name="avatar">
			<img src="uploads/<?php echo $edit['image']?>">
			<span class="error"> <?php echo $errAvatar;?> </span>
		</p>
		<p>
			<input type="submit" name="edit" value="Edit">
		</p>
	</form>
</body>
</html>