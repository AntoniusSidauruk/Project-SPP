<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbspp";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn){
		echo "Failed connect " . $conn->mysqli_error();
	}

 ?>