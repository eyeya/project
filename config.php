<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spa";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    // ถ้าจะดูว่ามันติดมั้ยให้ เปิด comment echo
// echo "Connected successfully";
?>