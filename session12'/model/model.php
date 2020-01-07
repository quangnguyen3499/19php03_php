<?php 
	include 'config/database.php';
	class Model extends ConnectDB {

		function getHomepage() {
			$homepageData = "Thong tin trang chu tai day";
			return $homepageData;
		}

		function getAbout() {
			$aboutData = "Thong tin trang about";
			return $aboutData;
		}

		function getNews() {
			$sql = "SELECT * FROM news";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function addNews($title, $category, $description, $image) {
			$sql = "INSERT INTO news(title, category, description, image) VALUES ('$title', '$category', '$description', '$image')";
			return mysqli_query($this->connect(), $sql);
		}
		function editNews($id, $title, $category, $description, $image) {
			$sql = "UPDATE news SET title = '$title', category = '$category', description = '$description', image = '$image' WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function getDetailId($id) {
			$sql = "SELECT * FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>