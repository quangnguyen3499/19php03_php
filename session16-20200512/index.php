<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
</head>
<body>
	<?php include 'controller/controller.php';?>
	<ul>
		<li><a href="index.php?action=news">News</a></li>
		<li><a href="index.php?action=products">Product</a></li>
		<?php if (isset($_SESSION['username'])) {?>
			<li>Hi, <?php echo $_SESSION['username']?> <a href="index.php?action=logout">Logout</a></li>
		<?php } else { ?>
			<li><a href="index.php?action=login">Login</a></li>
		<?php }?>
	</ul>
	<?php 
		$controller = new Controller();
		$controller->handleRequest();
	?>
</body>
</html>