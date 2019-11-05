<?php
$serverName = "localhost";
$userName = "username";
$password = "password";
    //create connection to server
    $conn = new mysqli($serverName, $userName, $password);
    // Check connection
    if ($conn) 
        echo "Connected successfully!";
else
        die("Connection failed:( " .mysqli_error($conn));
    
// Check connection

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
        Describe varchar(30) NOT NULL,
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
$conn->close();
?>
