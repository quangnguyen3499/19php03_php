<?php 
	/**
	 * 
	 */
	include 'config/database.php';
	class Model extends ConnectDB
	{
		
		function getNewsFromDatabase() {
			$sqlSelectNews = "SELECT * FROM news";

			$news = mysqli_query($this->connect(), $sqlSelectNews);
			return $news;
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>