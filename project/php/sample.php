<?php
$servername = "localhost";
$description1 = "description1";

// Create connection
$conn = new mysqli($servername,$description1);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>