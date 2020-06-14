<?php 
	class ConnectDB {

		function connect() {
			$connect = mysqli_connect('localhost', 'root', 'none', '19php03_oop_mvc');
			mysqli_set_charset($connect,"utf8");
			return $connect;
		}
	}
?>