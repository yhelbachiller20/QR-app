<?php

/* Database credentials. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */


/* Attempt to connect to MySQL database */
$link = mysqli_connect("localhost", "root", "", "checklist");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
