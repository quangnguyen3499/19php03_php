<style type="text/css">
	.error {
		color: red;
	}
</style>
<?php
	$errname = $errgend = $errcoun = $erremail = $errdate = ' ';
	$checkError = true;
	if (isset($_POST['username']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['date_born'])) {
		$username = $_POST['username'];
        $gender = $_POST['gender'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$date_born = $_POST['date_born'];
		// validate form
		if ($username == '') {
			$errname = 'Please input username';
			$checkError = false;
		}
		if ($gender == '') {
			$errgend = "Make sure you're not LGBT";
			$checkError = false;
        }
        if ($country == '') {
			$errcoun = "Please select country";
			$checkError = false;
        }	
        if ($email == '') {
			$erremail = "Please input email";
			$checkError = false;
        }	
        if ($date_born == '') {
			$errdate = "Please choose the date you born";
			$checkError = false;
		}
		if ($checkError) {
			$checkError = true;
          echo "Thong tin dang ki:";
          echo "<br>";
          echo "Ho va ten: $username";
          echo "<br>";
          echo "Gioi tinh: $gender";
          echo "<br>";
          echo "Que quan: $country";
          echo "<br>";
          echo "Email: $email";
          echo "<br>";
          echo "Ngay sinh: $date_born";
          echo "<br>";
          echo "Ban da dang ki thanh cong";
		}
	}
?>
<h1>Calculator</h1>
<form action="#" method="POST">
	<p>
		Ho ten
		<input type="text" name="username" value="<?php echo $username?>">
		<span class="error"><?php echo $errname;?></span>
	</p>
	<p>
		Gioi tinh
		<input type="radio" name="gender" value="Nam">Nam
		<br>
        <input type="radio" name="gender" value="Nu">Nu
		<span  class="error"><?php echo $errgend;?></span>
    </p>
    <p>
		Que quan
		<input type="select" name="country" value="<?php echo $country?>">
		<span class="error"><?php echo $errcoun;?></span>
	</p><p>
		Email
		<input type="text" name="email" value="<?php echo $email?>">
		<span class="error"><?php echo $erremail;?></span>
	</p><p>
		Ngay sinh
		<input type="date" name="date_born" value="<?php echo $date_born?>">
		<span class="error"><?php echo $errdate;?></span>
	</p>
	<p>
		<input type="submit" name="submit" value="Submit">
	</p>
</form>