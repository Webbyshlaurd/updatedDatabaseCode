<?php

include 'registrationsuccess.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$conn = new mysqli('localhost','root', '','userdb');
if($conn->connect_error){
    die('Connection Failed'. $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO tb_data (username, email , password ) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("sss", $username, $email, $password);
if (!$stmt->bind_param("sss", $username, $email, $password)) {
    die("Error binding parameters: " . $stmt->error);
}

// Execute statement
 $execval = $stmt->execute();
if ($execval) {
    echo "Registration successful";
} else {
    echo "Error: " . $conn->error;
}

 
