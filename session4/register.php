<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$database = "19php03";
    //create connection to server
    $conn = mysqli_connect($serverName, $userName, $password, $database);
     // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['register'])) {
$userName = $_POST['userName'];
$password = $_POST['password'];
//chen user vao db
$sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
			
			// thuc thi cau lenh sql
			mysqli_query($connect, $sql);
}
?>
    <form action="" method="POST">
        <p>
            Username <input type="text" name="username">
        </p>
        <p>
            Password <input type="password" name="password">
        </p>
        <p>
            <input type="submit" name="register" value="register">
        </p>
    </form>
</body>
</html>