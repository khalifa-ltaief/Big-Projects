<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    
    header("Location: login-form.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="icon" type="image/png" href="../image/logo.png" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <div class="responsive-tab">
      <div class="header">
        <div class="logo">
          <a href="../index.php"><img src="../image/logo.png" alt="" /></a>
        </div>
        <span class="material-symbols-outlined close-menu-responsive">
          menu
        </span>
      </div>
      <aside class="sidebar-responsive">
        <h3>Workouts</h3>
        <div class="items">
          <a href=""
            >Workouts Videos
            <span class="material-symbols-outlined"> chevron_right </span></a>

          <a href=""
            >Custom Workouts
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
        <h3>Programs</h3>
        <div class="items">
          <a href=""
            >Workout Programs
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Meal Plans
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
        <h3>Health</h3>
        <div class="items">
          <a href=""
            >Experts Articles
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Healthy Recipes
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
      </aside>
    </div>
    <main>
      <aside>
        <div class="logo">
<a href="../index.php">          <img src="../image/logo.png" alt="" />
</a>
      </div>
        <h3>Workouts</h3>
        <div class="items">
          <a href=""
            >Workout Videos
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Custom Workouts
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
        <h3>Programs</h3>
        <div class="items">
          <a href=""
            >Workout Programs
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Meal Plans
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Pilot Programs
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
        <h3>Health</h3>
        <div class="items">
          <a href=""
            >Experts Articles
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Healthy Recipes
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Wellness Videos
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
        <h3>Community</h3>
        <div class="items">
          <a href=""
            >Our Community
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Blog
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >Referral
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
          <a href=""
            >What's New
            <span class="material-symbols-outlined"> chevron_right </span></a
          >
        </div>
      </aside>
      <div class="left">
        <header>
          <div class="left-side">
            <div class="icons">
              <i class="fa-solid fa-magnifying-glass"></i>
              <i class="fa-regular fa-bell"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="search-bar">
              <input type="text" placeholder="search here ..." />
              <span class="material-symbols-outlined close"> close </span>
            </div>
          </div>

          <div class="right-side">
            <img src="../image/icon-user.png" alt="" />
            <div class="cnx">
              <a href="#"><i class="fa-regular fa-user"></i>My profile</a>
              <a href="#"> <i class="fa-regular fa-bell"></i>Notification</a>
              <a href="#"><i class="fa-solid fa-gear"></i>Settings</a>
              <a href="logout.php"
                ><i class="fa-solid fa-power-off"></i>Log Out</a
              >
            </div>
          </div>
        </header>
        <section>
          <div class="dash">
            <span>Dashboard</span>
            <span>Dashboard</span>
          </div>
          <div class="success-msg">
            <div class="msg">
              <h4>Success</h4>
              <p>You successfully loged in your dashboard</p>
            </div>
            <span class="material-symbols-outlined close-tab"> close </span>
          </div>
          <h1>Dear user all your statistics will be here</h1>
          <div class="top-section">
            <div>
              <div>
                <h3>My Workouts</h3>
                <i class="fa-solid fa-gear"></i>
              </div>
              <span class="material-symbols-outlined"> monitoring </span>
            </div>
            <div>
              <div>
                <h3>My Programs</h3>
                <i class="fa-solid fa-gear"></i>
              </div>
              <span class="material-symbols-outlined"> bar_chart </span>
            </div>
            <div>
              <div>
                <h3>My Health</h3>
                <i class="fa-solid fa-gear"></i>
              </div>
              <span class="material-symbols-outlined">
                signal_cellular_alt
              </span>
            </div>
          </div>
          <div class="bottom-section">
            <div>
              <i class="fab fa-facebook"></i>
            </div>
            <div>
              <i class="fa-brands fa-twitter"></i>
            </div>
            <div>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div>
              <i class="fa-brands fa-google-plus-g"></i>
            </div>
          </div>
        </section>
      </div>
    </main>

    <footer>
      <p>
        Made with <i class="fa-solid fa-heart" style="color: #ff8787"></i> by
        Khalifa Ltaief
      </p>
    </footer>

    <script src="main.js"></script>
  </body>
</html>
