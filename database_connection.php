<?php
// database_connection.php
$host = 'localhost';
$db = 'CosmoAirlines';
$user = 'your_username';
$pass = 'your_password';

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
