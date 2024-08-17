<?php
$servername = "localhost";
$username = "root";
$password = "Capitano0790";
$databaseName = "database_belajar";
// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>