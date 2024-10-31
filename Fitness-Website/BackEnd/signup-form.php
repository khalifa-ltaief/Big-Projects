<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Sign up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="../image/logo.png" />
  </head>
  <body>
    <div class="logo">
      <a href="../index.php"><img src="../image/logo.png" alt="Logo" /></a>
    </div>
    
 
   
    
    <form method="post" action="signup.php">
      <div class="login--box">
        <h1>Sign up</h1>
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
            <label for="full_name">Full Name</label>
            <i class="fa fa-address-book"></i>
            <input
              type="text"
              id="full_name"
              name="full_name"
              placeholder="Type your Full Name"
              required
            />
          </div>
          
          <div class="input-container">
            <label for="username">Username</label>
            <i class="fas fa-user"></i>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Type your username"
              required
            />
          </div>
          
          <div class="input-container">
            <label for="email">Email</label>
            <i class="fas fa-envelope"></i>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Type your email"
              required
            />
          </div>
          
          <div class="input-container">
            <label for="password">Password</label>
            <i class="fas fa-lock"></i>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Type your password"
              required
              class="pass-input"
            />
            <div class="test">
            <i class="fas fa-eye" ></i>
            </div>
          </div>
          
          <a href="loginUser.php">You can login from here</a>
          <button class="button">Sign Up</button>
        </div>
      </div>
    </form>
    <script src="showbtn.js"></script>
  </body>
</html>
