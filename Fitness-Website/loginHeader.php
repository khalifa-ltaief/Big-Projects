<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header.css" />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,500;1,700&display=swap"
  rel="stylesheet"
/>
</head>
<body>
<header>
  <div class="left-side">
    <a href="index.html">
      <img src="image/logo.png" alt="logo" />
    </a>
  </div>
  <div class="left-center ">
    <ul>
      <li class="login-workout">Workouts<i class="fas fa-chevron-down"></i></li>
      <li class="login-programs">Programs<i class="fas fa-chevron-down"></i></li>
      <li class="login-health">Healthy <i class="fas fa-chevron-down"></i></li>
      <li class="login-community">Community<i class="fas fa-chevron-down"></i></li>
      <li class="login-about">About<i class="fas fa-chevron-down"></i></li>
      <li>Store</li>
      <li>MemberShip</li>
    </ul>
  </div>

  <div class="right--box">
    <?php echo htmlspecialchars($username); ?>
    <div class="logout">
      <img src="image/logout.png" alt="" />
      <a href="Backend/dashboard.php">My Profile</a>
      <a href="BackEnd/logout.php">Log Out</a>
    </div>

  </div>
  <span class="material-symbols-outlined login-menu"> menu </span>

  <div class="login-workout-items">
    <div>
      <a href=""> <img src="image/workout.png" alt="" /> Workout Videos</a>
    </div>
    <div>
      <a href=""><img src="image/dumbel.png" alt="" />Custom Workouts</a>
    </div>
  </div>
  <div class="login-programs-items">
    <div>
      <a href=""
        ><img src="image/workouet-prog.png" alt="" />Workout Programs</a
      >
    </div>
    <div>
      <a href=""><img src="image/meal-prog.png" alt="" />Meal Plans</a>
    </div>
    <div>
      <a href=""><img src="image/pilot.png" alt="" />Pilot Programs</a>
    </div>
  </div>
  <div class="login-health-items">
    <div>
      <a href=""><img src="image/expert.png" alt="" />Experts Articles</a>
    </div>
    <div>
      <a href=""><img src="image/recipes.png" alt="" />Healthy Recipes</a>
    </div>
    <div>
      <a href=""><img src="image/healthcare.png" alt="" />Wellness Videos</a>
    </div>
  </div>
  <div class="login-community-items">
    <div>
      <a href=""><img src="image/community.png" alt="" />Community</a>
    </div>
    <div>
      <a href=""><img src="image/blog.png" alt="" />Blog</a>
    </div>
    <div>
      <a href=""><img src="image/referral.png" alt="" />Referral</a>
    </div>
    <div>
      <a href=""><img src="image/new.png" alt="" /> What's New</a>
    </div>
  </div>
  <div class="login-about-items">
    <div>
      <a href=""><img src="image/about.png" alt="" />About</a>
    </div>
    <div>
      <a href=""><img src="image/tutorial.png" alt="" />Tutorials</a>
    </div>
    <div>
      <a href=""><img src="image/team.png" alt="" />Our Team</a>
    </div>
  </div>
</header>
<header class="login-responsive">
  <span class="material-symbols-outlined login-close"> close </span>
  
  <div class="section">
    <div class="section-item">
      <a href="Backend/dashboard.php"><h2>My Profile</h2></a>
    </div>
    <div class="section-item">
      <h2>Workouts</h2>
    </div>
    <div class="section-item">
      <h2>Programs</h2>
    </div>
    <div class="section-item">
      <h2>Health</h2>
    </div>
    <div class="section-item">
      <h2>Community</h2>
    </div>
    <div class="section-item">
      <h2>About</h2>
    </div>
    <div class="btn-item">
      
      <a href="BackEnd/logout.php">Log Out</a>
    </div>
  </div>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const loginworkoutItem = document.querySelector(
    ".login-workout"
  );
  const loginworkoutItemsDiv = document.querySelector(".login-workout-items");
  const loginprogramItem = document.querySelector(".login-programs");
  const loginprogramItemDiv = document.querySelector(".login-programs-items");
  const loginhealthItem = document.querySelector(".login-health");
  const loginhealthItemDiv = document.querySelector(".login-health-items");
  const logincommunityItem = document.querySelector(".login-community");
  const logincommunityItemDiv = document.querySelector(".login-community-items");
  const loginaboutItem = document.querySelector(".login-about");
  const loginaboutItemDiv = document.querySelector(".login-about-items");
  const loginaccountBox = document.querySelector(".login-right--box");
  const loginaccountBoxDiv = document.querySelector(".login-logout");
  const loginopenMenu = document.querySelector(".login-menu");
  const logincloseMenu = document.querySelector(".login-close");
  const loginAvatar = document.querySelector(".right--box")
const logoutBox = document.querySelector(".logout")

  const loginMenu = document.querySelector(".login-responsive");
  if (loginworkoutItem && loginworkoutItemsDiv) {
    loginworkoutItem.addEventListener("mouseenter", () => {
      loginworkoutItemsDiv.style.display = "flex";
    });
    loginworkoutItemsDiv.addEventListener("mouseenter", () => {
      loginworkoutItemsDiv.style.display = "flex";
    });

    loginworkoutItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginworkoutItemsDiv.matches(":hover") &&
          !loginworkoutItem.matches(":hover")
        ) {
          loginworkoutItemsDiv.style.display = "none";
        }
      }, 150);
    });

    loginworkoutItemsDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginworkoutItemsDiv.matches(":hover") &&
          !loginworkoutItem.matches(":hover")
        ) {
          loginworkoutItemsDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginprogramItem && loginprogramItemDiv) {
    loginprogramItem.addEventListener("mouseenter", () => {
      loginprogramItemDiv.style.display = "flex";
    });
    loginprogramItemDiv.addEventListener("mouseenter", () => {
      loginprogramItemDiv.style.display = "flex";
    });
    loginprogramItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginprogramItemDiv.matches(":hover") &&
          !loginprogramItem.matches(":hover")
        ) {
          loginprogramItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginprogramItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginprogramItemDiv.matches(":hover") &&
          !loginprogramItem.matches(":hover")
        ) {
          loginprogramItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginhealthItem && loginhealthItemDiv) {
    loginhealthItem.addEventListener("mouseenter", () => {
      loginhealthItemDiv.style.display = "flex";
    });
    loginhealthItemDiv.addEventListener("mouseenter", () => {
      loginhealthItemDiv.style.display = "flex";
    });
    loginhealthItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginhealthItemDiv.matches(":hover") && !loginhealthItem.matches(":hover")) {
          loginhealthItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginhealthItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginhealthItemDiv.matches(":hover") && !loginhealthItem.matches(":hover")) {
          loginhealthItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (logincommunityItem && logincommunityItemDiv) {
    logincommunityItem.addEventListener("mouseenter", () => {
      logincommunityItemDiv.style.display = "flex";
    });
    logincommunityItemDiv.addEventListener("mouseenter", () => {
      logincommunityItemDiv.style.display = "flex";
    });
    logincommunityItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !logincommunityItemDiv.matches(":hover") &&
          !logincommunityItem.matches(":hover")
        ) {
          logincommunityItemDiv.style.display = "none";
        }
      }, 150);
    });
    logincommunityItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !logincommunityItemDiv.matches(":hover") &&
          !logincommunityItem.matches(":hover")
        ) {
          logincommunityItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginaboutItem && loginaboutItemDiv) {
    loginaboutItem.addEventListener("mouseenter", () => {
      loginaboutItemDiv.style.display = "flex";
    });
    loginaboutItemDiv.addEventListener("mouseenter", () => {
      loginaboutItemDiv.style.display = "flex";
    });
    loginaboutItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginaboutItemDiv.matches(":hover") && !loginaboutItem.matches(":hover")) {
          loginaboutItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginaboutItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginaboutItemDiv.matches(":hover") && !loginaboutItem.matches(":hover")) {
          loginaboutItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginaccountBox && loginaccountBoxDiv) {
    loginaccountBox.addEventListener("click", () => {
      if (loginaccountBox.style.display === "flex") {
        loginaccountBoxDiv.style.display = "none";
      } else {
        loginaccountBoxDiv.style.display = "flex";
      }
    });
    loginaccountBoxDiv.addEventListener("mouseleave", () => {
      loginaccountBoxDiv.style.display = "none";
    });

    document.addEventListener("click", (event) => {
      if (
        !loginaccountBox.contains(event.target) &&
        !loginaccountBoxDiv.contains(event.target)
      ) {
        loginaccountBoxDiv.style.display = "none";
      }
    });
  }
  loginopenMenu.addEventListener("click", () => {
    loginMenu.style.display = "flex";
  });
  logincloseMenu.addEventListener("click", () => {
    loginMenu.style.display = "none";
  });
  
loginAvatar.onclick = function(){
  if(logoutBox.style.display === "none"){
    logoutBox.style.display = "flex"
  }else {
    logoutBox.style.display = "none"
  }
}
  fetch("footer.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("footer").innerHTML = data;
    });
});

</script>
</body>
</html>




