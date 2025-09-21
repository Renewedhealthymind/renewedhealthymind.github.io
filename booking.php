<?php
include 'db_connect.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) : '';

    if (empty($name) || empty($email) || empty($date)) {
        echo "All fields are required.";
        exit;
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, appointment_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $date);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
