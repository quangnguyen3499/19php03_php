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
					$errUser = $errPass = '';
					$username = $password = '';
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						if ($username == '') {
							$errUser = 'Vui lòng điền username';
						}
						if ($password == '') {
							$errPass = 'Vui lòng điền password';
						}
						if ($username != '' && $password != '') {
							//check username và password có tồn tại trong database không?
							$model = new Model();
							$checkLogin = $model->checkLogin($username, $password);
							$check = $checkLogin->fetch_assoc();
							if ($checkLogin->num_rows) {
								// vào được đây tức là username và password đúng
								$_SESSION['username'] = $check['username'];
								header('Location: index.php');
							}
						}
					}
					include 'views/login.php';
					break;
				case 'logout':
					unset($_SESSION['username']);
					header('Location: index.php');
					break;
				default:
					# code...
					break;
			}
		}
	}
?>