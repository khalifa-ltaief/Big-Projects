<?php
session_start(); 
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

    
    $email_check_sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($email_check_sql);
    $username_check_sql = "SELECT * FROM users WHERE username='$username'";
    $resultat = $conn->query($username_check_sql);

    if ($result->num_rows > 0) {
        
        $_SESSION['message'] = "This email is already registered!";
        $_SESSION['message_type'] = "error"; 
        header("Location: signup-form.php"); 
        exit();
    } else {
        if ($resultat->num_rows > 0) {
            
            $_SESSION['message'] = "This Username is already registered!";
            $_SESSION['message_type'] = "error"; 
            header("Location: signup-form.php"); 
            exit();
    }else {
        
        $sql = "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name','$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "User registered successfully!";
            $_SESSION['message_type'] = "success"; 
            $_SESSION['redirect'] = true;
            header("Location: signup-form.php"); 
            exit();
        } else {
            $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION['message_type'] = "error"; 
            header("Location: signup-form.php"); 
            exit();
        }
    }

    $conn->close();
}
}
?>