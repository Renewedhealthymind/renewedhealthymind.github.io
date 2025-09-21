<?php
$servername = "localhost"; // If using XAMPP, WAMP, or MAMP, keep it as 'localhost'
$username = "root"; // Default username for local servers
$password = ""; // Default password is empty for XAMPP and WAMP
$database = "renewed_healthy_mind"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
