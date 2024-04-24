<?php
$name = $_POST['name'];
$guestNum = $_POST['guestNum'];
$date = $_POST['date'];
// $time = $_POST['time'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'registration');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO registration (name, date, guestNum) VALUES (?, ?, ?)");
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
