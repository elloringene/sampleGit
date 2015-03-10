<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "livechat";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = mysqli_query($conn, 'SELECT * FROM messages');
echo json_encode($conn->mysqli_result($query));
?>