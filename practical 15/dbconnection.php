<?php
// DB connection setup
$conn = new mysqli("localhost", "root", "root", "test_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)");

// Insert sample data
$conn->query("INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')");

// Retrieve and display data
$result = $conn->query("SELECT id, name, email FROM users");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} - Name: {$row['name']} - Email: {$row['email']}<br>";
    }
} else {
    echo "No users found.<br>";
}

$conn->close();
?>
