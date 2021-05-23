<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testApi";

// Create connectionx
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Okay";