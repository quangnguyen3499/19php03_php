<?php include 'database.php';?>
<?php 
	$id = $_GET['id'];
	$sqlDelete = "DELETE FROM news WHERE Id = $id";
	if (mysqli_query($connect, $sqlDelete) === TRUE) {
		// chuyen trang
		header('Location: list_users.php');
	}
?>