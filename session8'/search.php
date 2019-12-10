<?php
$conn = mysqli_connect("localhost","root","","19php03");
if (isset ($_POST['search'])) {
$key=addslashes($_POST['keyword']);
$search=$_POST['search'];
$query = mysqli_query($conn, "SELECT * FROM producers WHERE title LIKE '%$search%' OR description LIKE '%$search%'");
$result = mysqli_num_rows($query);
if($result == 0) 
    $output = "<span style='color: red;'>No result was found</span>";
else {
    $output = "<span>The result with keyword is: $result</span>";
    while($row = mysql_fetch_array($query)) {
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $avatar = $row['image'];
        $datepost = $row['datepost'];
        $output = "<tr>;
        <td>id: $id</td>;
        <td>title: $title</td>;
        <td>description: $description</td>;
        <td><img src='uploads/".$avatar."'></td>;
        <td>$datepost</td>;
        </tr>";
    }
}
echo $output;
}
?>