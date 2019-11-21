<?php
$serverName = "localhost";
$userName = "username";
$password = "password";
    //create connection to server
    $conn = mysqli_connect($serverName, $userName, $password);
    // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform a query, check for error
if (!mysqli_query($conn,"INSERT INTO Persons (FirstName) VALUES ('Glenn')"))
{
echo("Error description: " . mysqli_error($conn));
}

mysqli_close($conn);
?>

    // Create database
   // $sql = "CREATE DATABASE myDB";
    //if ($conn->query($sql) === TRUE) {
     //   echo "Database created successfully";
    //} else {
      //  echo "Error creating database: " . $conn->error;
    //}
    //create table with sql
    /*$sql = "CREATE TABLE Product_Information (
        Id int(6) PRIMARY KEY,
        Name_of_product varchar(30) NOT NULL,
        Description varchar(30) NOT NULL,
        Price money NOT NULL,
        Date_of_manufacture date NOT NULL,
        Expiration_date date NOT NULL,
        Type_of_product varchar(10) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";       
        //primary key: khoa chinh trong 1 bang, khong duoc chua gia tri NULL
        if ($conn->query($sql) === TRUE) {
            echo "Table Product Information has been born!";
        } else {
            echo "Error creating table: " . $conn->error;
        } */  
mysqli_close($conn);
?>
*/