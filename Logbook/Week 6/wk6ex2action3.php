<?php
	// Connect to server and select database
    $link = mysqli_connect("localhost", "22135877", "mysqluser", "db1_22135877");

    session_Start();

    //Execute sql statement
    $sql = "DELETE FROM test where ID = '$_SESSION[id]'";

    mysqli_query($link, $sql);
    header("Location: ./wk6ex2.php");
    exit();
?>