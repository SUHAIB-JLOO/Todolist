<?php

require "conn.php";

$x1 = $_POST['user'];
$x2 = $_POST['pass'];


$sql = "INSERT INTO user (user, pass)
VALUES ('$x1', '$x2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
