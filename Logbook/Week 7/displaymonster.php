<?php
$conn = mysqli_connect("localhost", "22135877", "mysqluser", "db1_22135877");

$sql = "select id from monster;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close();
?>