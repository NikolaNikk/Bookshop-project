<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "1234"; // Your MySQL password
$dbname = "bookstore"; // Your database name
//$port = 3306; // Replace with your actual MySQL port (default is 3306)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
