<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register product form</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon_24h.ico">
	<meta name="keywords" content="PHP, mysql, SDC">
	<meta name="description" content="This is register form">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 

	//Tao mang key value cho danh muc san pham
	$arrType = array('cosmetics' => 'Cosmetics', 'food' => 'Food', 'medicine' => 'Medicine');
	// Khoi tao cac bien loi
	$errFullName = '';
	$errDescribe= '';
	$errPrice = '';
	$errImage = '';
	$errDate_begin = '';
	$errDate_end = '';
	$errType = '';
	// khoi tao cac gia tri ban dau
	$fullname = '';
	$describe = '';
	$price = '';
	$date_begin = '';
	$date_end = '';
	$type = '';
	$checkValidate = true;
	$avatarName = '';

	if (isset($_POST['register'])) {
		$fullname = $_POST['fullname'];
		$describe = $_POST['describe'];
		$date_begin = $_POST['date_begin'];
		$date_end = $_POST['date_end'];
		$price = $_POST['price'];
		$type = $_POST['type'];
		// Xu ly upload avatar
		$avatar = $_FILES['avatar'];
		// khoi tao anh mac dinh

		if ($avatar['error'] == 0) {
			// Gan ten cho avatar upload len
			$avatarName = $avatar['name'];
			// Upload file vao thu muc
			move_uploaded_file($avatar['tmp_name'], 'img/'.$avatarName);
		}
		// Ket thu xu ly upload avatar
		// validate loi de trong (validate co ban)
		if ($fullname == '') {
			$checkValidate = false;
			$errFullName = 'Please input name of product';
		}
		if ($describe == '') {
			$checkValidate = false;
			$errDescribe = 'Please type the description';
		}
		if ($price == '') {
			$checkValidate = false;
			$errPrice = 'Please choose price';
		}
		if ($date_begin == '') {
			$checkValidate = false;
			$errDate_begin = 'Please input the manufacture date';
		}
		if ($date_end == '' || ($date_end < $date_begin)) {
			$checkValidate = false;
			$errDate_end = 'Please input the expiration date';
		}
		if ($type == '') {
			$checkValidate = false;
			$errType = 'Please choose type';
		}
		if ($avatarName == '') {
			$checkValidate = false;
			$errImage = 'Please upload image';
		}

		//In thong tin dang ky ra
		if ($checkValidate) {
			echo "<h2>Thong tin san pham</h2>";
			echo "Name of product: $fullname <br>";
			echo "Description: $describe <br>";
			echo "Price: $price <br>";
            echo "Date of manufacture: $date_begin <br>";
            echo "Expiration date: $date_end <br>";
			echo "Type: $arrType[$type] <br>";
			echo "<img src='img/$avatarName'>";
		}
	}
	// ket thuc ket submit form
	?>
	<h1>Register form</h1>
	<div class="register-form">
		<form action="#" name="registerForm" id="registerForm" method="POST" enctype="multipart/form-data">
			<div class="form-control">
				<div class="label">Name of product</div>
				<div class="input">
					<input type="text" name="fullname" id="fullname" value="<?php echo $fullname?>">
					<span class="error"> <?php echo $errFullName;?> </span>
				</div>
				
			</div>
			<div class="form-control">
				<div class="label">Description</div>
				<div class="input">
					<input type="textarea" name="describe" id="describe" value="<?php echo $describe?>">
					<span class="error"> <?php echo $errDescribe;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="label">Price</div>
				<div class="input">
					<input type="text" name="price" id="price" value="<?php echo $price?>">
					<span class="error"> <?php echo $errPrice;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="label">Date of manufacture</div>
				<div class="input">
					<input type="date" name="date_begin" id="date_begin" value="<?php echo $date_begin?>">
					<span class="error"> <?php echo $errDate_begin;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="label">Expiration date</div>
				<div class="input">
					<input type="date" name="date_end" id="date_end" value="<?php echo $date_end?>">
					<span class="error"> <?php echo $errDate_end;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="label">Type of products</div>
				<div class="input">
					<select name="type">
						<option value="">Choose type</option>
						<option value="cosmetics" <?php echo ($type == 'cosmetics')?'selected':''?>>Cosmetics</option>
						<option value="food" <?php echo ($type == 'food')?'selected':''?>>Food</option>
						<option value="medicine" <?php echo ($type == 'medicine')?'selected':''?>>Medicine</option>
					</select>
					<span class="error"> <?php echo $errType;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="label">Illustrating images</div>
				<div class="input">
					<input type="file" name="avatar" id="avatar">
					<span class="error"> <?php echo $errImage;?> </span>
				</div>
			</div>
			<div class="form-control">
				<div class="input">
					<input type="submit" name="register" value="Register">
				</div>
			</div>
		</form>
	</div>
</body>
</html>