<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model;
			switch ($action) {
				case 'home':
					// lay thong tin trang chu ra
					$homeData = $model->getHomepage();
					include 'view/homepage.php';
					break;
				case 'about':
					// lay thong tin trang about ra
					$aboutData = $model->getAbout();
					include 'view/about.php';
					break;
				case 'news':
					// lay thong tin trang news ra
					$newsData = $model->getNews();
					include 'view/news.php';
					break;
				case 'delete_news':
					// lay id can xoa
					$idDelete = $_GET['id'];
					// lay thong tin trang news ra
					if ($model->deleteNews($idDelete) === TRUE) {
						header('Location: index.php?action=news');
					}
					break;
				case 'add_news':
					// neu form duoc submit
						$errT = '';
					if (isset($_POST['add_news'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$category = $_POST['category'];
						$image = $_FILES['image']['name'];
		    			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
						if(empty($title)||empty($description)||empty($category)) {
							$errT = "Chua nhập đủ thông tin!";
						}
						// xu ly luu news vao database
						else if ($model->addNews($title, $category, $description, $image) === TRUE) {
							header('Location: index.php?action=news');
						}
					}
					// goi 1 view cua trang add news
					include 'view/add_news.php';
					break;
				case 'edit_news':
					$id = $_GET['id'];
					$oldData = $model->getDetailId($id);
					$errD = '';
					if (isset($_POST['edit_news'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$category = $_POST['category'];
						$image = $_FILES['image']['name'];
						move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);						
						if(empty($title)||empty($description)||empty($category)) {
							$errD = "Chua nhập đủ thông tin!";
						}
						// xu ly luu news vao database
						else if ($model->editNews($id, $title, $category, $description, $image) === TRUE) {
							header('Location: index.php?action=news');
						}
					}
					// goi 1 view cua trang add news
					include 'view/edit_news.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>