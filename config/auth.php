<?php

// Database connection parameters
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Create connection
$conn = new mysqli('localhost','root', '','userdb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to authenticate users
function authenticateUser($conn, $username, $email, $password) {
    $sql = "SELECT * FROM tb_data WHERE username='$username' OR email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

?>