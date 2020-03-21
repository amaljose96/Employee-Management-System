<?php
$servername = "*****";
$username = "a21*****l";
$password = "*****";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  echo("<script>alert('Connection error');</script>");
    die("Connection failed: " . $conn->connect_error);
}
else{
  echo "<script>alert('connection successful');</script>";
}
?>
