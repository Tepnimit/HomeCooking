<?php
echo 'Connection Page'; 
# !!!! Come back to test this line na
#$db = new mysqli('127.0.0.1', 'root', 'root', 'appx'); 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homecooking";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
