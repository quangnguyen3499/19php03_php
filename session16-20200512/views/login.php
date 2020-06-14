<h2>Login form</h2>
<form action="index.php?action=login" method="POST">
	<p>Username <input type="text" name="username" value="<?php echo $username?>"></p>
	<span><?php echo $errUser?></span>
	<p>Password <input type="password" name="password" value="<?php echo $password?>"></p>
	<span><?php echo $errPass?></span>
	<p><input type="submit" name="login" value="Login"></p>
</form>