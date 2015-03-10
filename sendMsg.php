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
echo "Connected successfully";

$query = mysqli_query($conn, 'INSERT INTO messages (sender,msg) VALUES("'.$_POST['id'].'","'.$_POST['msg'].'")');
print_r($query);
?>