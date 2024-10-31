<?php
// Include the database connection file
include 'db.php';

session_start(); // Start the session to manage user login

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query to find the user by username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start the session
            $_SESSION['username'] = $user['username'];
            
             $_SESSION['message'] = "Login successful! Welcome, " .$_SESSION['username'];;
            $_SESSION['message_type'] = "success"; 
            $_SESSION['redirect'] = true;
            header("Location: loginUser.php"); 
            exit();
            
        } else {
            // Password is incorrect
           $_SESSION['message'] = "Password is incorrect!";
        $_SESSION['message_type'] = "error"; 
        header("Location: loginUser.php"); 
        exit();
        }
    } else {
        // Username does not exist
        $_SESSION['message'] = "Username does not exist";
        $_SESSION['message_type'] = "error"; 
        header("Location: loginUser.php"); 
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
