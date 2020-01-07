<?php 
	echo "id =".$id;
	$edit=$oldData->fetch_assoc();
?>
<form action="index.php?action=edit_news&id=<?php echo $id; ?>" method="POST">
	<h1>Edit news</h1>
	<p>
		Title <input type="text" name="title" value="<?php echo $edit['title'];?>">
	</p>
	<p>
		Category <input type="text" name="category" value="<?php echo $edit['category'];?>">
	</p>
	<p>
		Description <input type="text" name="description" value="<?php echo $edit['description']; ?>">
	</p>
	<p>
		<?php echo $errD; ?>
	</p>
	<p>
		<input type="file" name="image" value="<?echo $edit['image']; ?>">
	</p>
		<p>
	 <input type="submit" name="edit_news">
	</p>
</form>