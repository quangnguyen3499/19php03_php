<?php 
	/**
	 * 
	 */
	include 'config/database.php';
	class Model extends ConnectDB
	{
		
		function getNewsFromDatabase() {
			$sqlSelectNews = "SELECt * FROM news";

			$news = mysqli_query($this->connect(), $sqlSelectNews);
			return $news;
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			//var_dump($sql);exit();
			return mysqli_query($this->connect(), $sql);

		}
	}
?>