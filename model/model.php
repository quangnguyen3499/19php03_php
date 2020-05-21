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
		function checkLogin($username, $password)
		{
			$sqlSelectNews = "SELECT * from users where username = '$username' and password = '$password'";
			$users = mysqli_query($this->connect(), $sqlSelectNews);
			return $users;
		}
	}
?>