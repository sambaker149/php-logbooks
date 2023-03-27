<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
    $link = mysqli_connect("localhost", "22135877", "mysqluser", "db1_22135877");

    //echo "Success: A proper connection to MySQL was made!";
    
    mysqli_query($link, $sql);
	
	// Execute sql statement		
	$sql = "SELECT * from test";
    $result = mysqli_query($link, $sql);
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>