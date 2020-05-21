<?php 
	/**
	 * 
	 */
	include 'model/model.php';
	class Controller
	{
		// function xulyyeucau();
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					include 'views/home.php';
					break;
				case 'news':
					// gọi model xử lý lấy tin tức từ database ra?
					$model = new Model();
					$myNews = $model->getNewsFromDatabase();
					//var_dump($myNews); // giống console.log bên js

					include 'views/news.php';
					break;
				case 'products':
					include 'views/products.php';
					break;
				case 'login':
					$errUser = '';
					$errPass = '';
					$username = '';
					$password = '';
					if(isset($_post['login']))
					{
						$username = $_post['username'];
						$password = $_post['password'];
						if($username = '')
						{
							$errUser = 'fill username';
						}
						if($password = '')
						{
							$errPass = 'fill password';
						}
						$model = new Model();
						$myUsers = $model->checkLogin($username, $password);
						if($myUsers)
						{
							header('Location: index.php');
						}
					}
					include 'views/login.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>