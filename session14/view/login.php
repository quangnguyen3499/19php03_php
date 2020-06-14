<form action="index.php?action=login" method="POST">
	<p><?php echo $err?></p>
	<p>
		Username <input type="text" name="username">
	</p>
	<p>
		Password <input type="password" name="password">
	</p>
	<p>
	 <input type="submit" name="login">
	</p>
</form>