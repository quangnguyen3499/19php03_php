
<form action="index.php?action=add_news" method="POST">
	
	<p>
		Title <input type="text" name="title">
	</p>
	<p>
		Category <input type="text" name="category">
	</p>
	<p>
		Description <input type="text" name="description">
	</p>
		<span><?php echo $errT; ?></span>
	<p>
		<input type="file" name="image">
	</p>
	<p>
	 <input type="submit" name="add_news" value="Submit">
	</p>
</form>