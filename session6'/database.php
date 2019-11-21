<?php 
  $server = "127.0.0.1";
  $username = "root";
  $password = ""; 
  $database = "19php03";
	$connect = mysqli_connect($server, $username, $password, $database);
	mysqli_set_charset($connect,"utf8");
?>