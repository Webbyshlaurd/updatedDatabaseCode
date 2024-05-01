<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$guestNum = isset($_POST['guestNum']) ? $_POST['guestNum'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

// Database connection
$conn = new mysqli('localhost', 'root', '', 'data');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO tb_data (name, date, guestNum) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("ssi", $name, $date, $guestNum);
    if (!$stmt->bind_param("ssi", $name, $date, $guestNum)) {
        die("Error binding parameters: " . $stmt->error);
    }
    
    // Execute statement
    $execval = $stmt->execute();
    if ($execval) {
        echo "Registration successful";
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
