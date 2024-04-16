<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db = "dbreal";

// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>