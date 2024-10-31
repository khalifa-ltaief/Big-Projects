<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="../image/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="logo">
        <a href="..//index.php"><img src="../image/logo.png" alt=""></a>
    </div>
   <form method="post" action="login.php">
    <div class="login--box">
        <h1>Login</h1>
        <?php
session_start();

if (isset($_SESSION['message'])) {
    $message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : '';
    $message_class = $message_type === 'success' ? 'success-message' : 'error-message';
    $message_style = $message_type === 'success' 
    ? 'padding: 10px; border: 1px solid green; width: 99%; margin: 0 auto; text-align: center; font-weight: 500; background: #00ff0038;'
    : 'padding: 10px; border: 1px solid red; width: 99%; margin: 0 auto; text-align: center; font-weight: 500; background: #ff000038;';

   
    echo '<div class="' . $message_class . '" style="' . $message_style . '">' . $_SESSION['message'] . '</div>';

    
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}


if (isset($_SESSION['redirect']) && $_SESSION['redirect'] === true) {
    echo '<div class="success-message" id="redirect-message" style="margin:15px 0;text-align:center;">You will be redirected to the dashboard automatically after <span id="countdown">5</span> seconds...</div>';
    echo '<script>
        var countdown = 5;
        var countdownInterval = setInterval(function() {
            countdown--;
            document.getElementById("countdown").textContent = countdown;
            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "dashboard.php"; // Redirect to the dashboard
            }
        }, 1000);
     
    </script>';


    unset($_SESSION['redirect']);
}
?> 
        <div class="input--box">
            <div class="input-container">
                <label for="">Username</label>
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Type your username" name="username" required>
            </div>
            
            <div class="input-container">
                <label for="">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Type your password" name="password" required>
            </div>
            
            <a href="">Forgot password?</a>
            <button>Login</button>
        </div>
        <div class="socials">
            <h3>Or sign up using</h3>
            <div class="links">
                <img src="../image/face.png" alt="">
                <img src="../image/twitter.png" alt="">
                <img src="../image/gmail.png" alt="">
            </div>
        </div>
        <div class="signup--box">
            <h3>Have not account yet?</h3>
            <a href="signup-form.php">sign up</a>
        </div>
    </div>
   </form>
</body>
</html>