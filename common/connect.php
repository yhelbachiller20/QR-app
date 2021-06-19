<?php
	include_once("../config.php");
	// Database connection
	$conn = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
?>
