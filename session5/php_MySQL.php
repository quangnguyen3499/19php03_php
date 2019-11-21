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
    // Khoi tao cac bien loi
    $errId = '';
	$errFullName = '';
	$errPrice = '';
	$errImage = '';
	// khoi tao cac gia tri ban dau
    $id = '';
    $fullname = '';
	$price = '';
	$checkValidate = true;
    $avatarName = '';

	if ($avatar['error'] == 0) {
		// Gan ten cho avatar upload len
		$avatarName = $avatar['name'];
		// Upload file vao thu muc
		move_uploaded_file($avatar['tmp_name'], 'img/'.$avatarName);
	}
	// Ket thu xu ly upload avatar
    // validate loi de trong (validate co ban)
    if ($id == '') {
		$checkValidate = false;
		$errId = 'Please input id';
	}
	if ($price == '') {
		$checkValidate = false;
		$errPrice = 'Please fill price';
	}
	if ($fullname == '') {
		$checkValidate = false;
		$errFullName = 'Please input full name';
	}

	if (isset($_POST['register'])) {
        $id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$price = $_POST['price'];
		// Xu ly upload avatar
		$avatar = $_FILES['avatar'];
		// khoi tao anh mac dinh
		//In thong tin dang ky ra
	}
	if ($checkValidate) {
        echo "<h2>Thong tin nguoi dung</h2>";
        echo "Id: $id <br>";
		echo "Name of user: $fullname <br>";
		echo "Price: $price <br>";
		echo "<img src='img/$avatarName'>";
	}
	
    // ket thuc ket submit form
    //day du lieu len database
    $server = "127.0.0.1";
    $username = "root";
    $password = ""; 
    $database = "19php03";
    // ket noi
    $connect = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
    if (isset($_POST['register'])) {
        // cau lenh chen user vao db
       $sql = "INSERT INTO products(Id, Name, Price, Image) VALUES ('$id', '$fullname', '$price', 'img/$avatarName')";
        
        // thuc thi cau lenh sql
        mysqli_query($connect, $sql);
    }
	?>
	<h1>Register form</h1>
	<div class="register-form">
		<form action="#" name="registerForm" id="registerForm" method="POST" enctype="multipart/form-data">
        <div class="form-control">
				<div class="label">ID</div>
				<div class="input">
					<input type="text" name="id" id="id" value="<?php echo $id?>">
					<span class="error"> <?php echo $errId;?> </span>
				</div>
			</div>
        <div class="form-control">
				<div class="label">Name of user</div>
				<div class="input">
					<input type="text" name="fullname" id="fullname" value="<?php echo $fullname?>">
					<span class="error"> <?php echo $errFullName;?> </span>
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
				<div class="label">Ava image</div>
				<div class="input">
					<input type="file" name="avatar" id="avatar" value=''>
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