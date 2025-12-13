<?php
$servername = "db";
$username = "root"; 
$password = "1234"; 
$dbname = "bookstore"; 
//$port = 3306;
//свързване
$conn = new mysqli($servername, $username, $password, $dbname);
//проверка
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
