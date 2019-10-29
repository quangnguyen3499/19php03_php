<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register form</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon_24h.ico">
	<meta name="keywords" content="PHP, mysql, SDC">
	<meta name="description" content="This is register form">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Register form</h1>
	<div class="register-form">
		<form action="#" name="registerForm" id="registerForm" method="POST">
			<div class="form-control">
				<div class="label">Fullname</div>
				<div class="input">
					<input type="text" name="fullname" id="fullname">
				</div>
			</div>
			<div class="form-control">
				<div class="label">Email</div>
				<div class="input">
					<input type="text" name="email" id="email">
				</div>
			</div>
			<div class="form-control">
				<div class="label">Gender</div>
				<div class="input">
					<input type="radio" name="gender" id="male">Male
					<input type="radio" name="gender" id="female">Female
				</div>
			</div>
			<div class="form-control">
				<div class="label">Birthday</div>
				<div class="input">
					<input type="date" name="birthday" id="birthday">
				</div>
			</div>
			<div class="form-control">
				<div class="label">City</div>
				<div class="input">
					<select name="city">
						<option value="">Choose city</option>
						<option value="dn">Da Nang</option>
						<option value="qn">Quang Nam</option>
					</select>
				</div>
			</div>
			<div class="form-control">
				<div class="input">
					<input type="submit" name="register" value="Reigster">
				</div>
			</div>
		</form>
	</div>
	<script src="js/common.js"></script>
</body>
</html>