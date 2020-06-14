<?php 
	include 'user.php';

	$user = new User();
	$user->add_demo();
	echo "<br>";
	echo $user->username;
	echo "<br>";
	echo $user->delete();
?>