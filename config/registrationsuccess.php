
<?php
session_start(); 

$conn = new mysqli('localhost', 'root', '', 'userdb');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
 
// Assuming you have the username of the user who just registered
$username = $_POST['username']; // Replace this with the actual mechanism to get the username
 
$sql = "SELECT * FROM tb_data WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
 
// Check if there is a result
if (mysqli_num_rows($result) > 0) {
    // Fetch the information of the user
    $row = mysqli_fetch_assoc($result);
    $username = $row['username']; // Retrieve username from the row
    $_SESSION['username'] = $username;
    header("Location: success.php");
    exit; ;
            
} else {
    // No user found with the provided username
    echo "<h1>No user found with the provided username.</h1>";
}
 
$conn->close();
?>

