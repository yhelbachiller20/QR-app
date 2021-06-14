<?php
$servername = "hdf.assumptionantipolo.edu.ph";
$database = "checklist";
$username = "root";
$password = "Marieldbsql2021";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

mysqli_close($conn);

?>