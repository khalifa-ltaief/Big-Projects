<?php
// Start the session
session_start();

// Directly set the username (assuming it's already stored in the session)
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .user-info {
            font-size: 18px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <!-- You can replace this with an actual logo image -->
        <img src="logo.png" alt="Logo" style="height: 40px;">
    </div>
    <div class="user-info">
        <!-- This will display the username dynamically -->
        Welcome, <?php echo htmlspecialchars($username); ?>
    </div>
</header>

</body>
</html>
