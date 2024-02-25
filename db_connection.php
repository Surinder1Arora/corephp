<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formvalidation";

// Create connection
$conn = new mysqli('localhost', 'root', " ",'formvalidation');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
