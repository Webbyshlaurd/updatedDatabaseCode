<?php
// Check if form fields are submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    // Check if the provided username or email already exists in the database
    include 'auth.php'; // Include auth.php for database connection
 $sql = "SELECT * FROM tb_data WHERE (username=? OR email=?) AND password=?";
    // Prepare and execute SQL query
    $result = $conn->query($sql);
     
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check for query execution success
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        // Check if user exists
        if ($result->num_rows == 1) {
            // User exists, proceed with authentication
            $user = $result->fetch_assoc(); // Fetch user data from result set
            if (password_verify($password, $user['password'])) {
                // Authentication successful, perform further actions
                if ($user['role'] === 'admin') {
                    echo "Welcome, Admin {$user['username']}!";
                    // Admin-specific actions
                } else {
                    echo "Welcome, User {$user['username']}!";
                    // Normal user actions
                }
            } else {
                echo "Welcome, User {$user['username']}";
            }
        } else {
            // User does not exist, display error message
            echo "Invalid username or email.";
        }
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}

?>
