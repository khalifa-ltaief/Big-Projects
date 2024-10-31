
<?php
session_start(); // Start the session
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
    <style>
        #message {
            padding: 5px;
            color: #5a5959;
            width: fit-content;
            margin: 5px auto;
            opacity: 1;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .success {
            background: #6ae56ac2;
        }
        .error {
            background: red;
        }
        .fade-out {
            opacity: 0;
            visibility: hidden;
        }
    </style>
  </head>
  <body>
    <div class="responsive-tab">
      <div class="header">
        <div class="logo">
         <a href="../index.php"> <img src="../image/logo.png" alt="" /></a>
        </div>
        <span class="material-symbols-outlined close-menu-responsive">
          menu
        </span>
      </div>
      <div class="sidebar-responsive">
        
        <h3>Workouts</h3>
        <div class="items">
          <a href="" class="workout-tab link" 
            >Workout Videos
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="workouts-sous-categories box">
            <a href=""
              >Modify Workout Videos <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Workout Videos <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="custom-workouts-tab link" 
            >Custom Workouts
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="custom-workouts-sous-categories box">
            <a href=""
              >Modify Custom Workouts <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Custom Workouts <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Programs</h3>
        <div class="items">
          <a href="" class="programs-tab link" 
            >Workout Programs
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="programs-sous-categories box">
            <a href=""
              >Modify Workout Programs <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Workout Programs <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="meal-tab link" 
            >Meal Plans <i class="fas fa-chevron-down"></i>
          </a>
          <div class="meal-sous-categories box">
            <a href=""
              >Modify Meal Plans <i class="fas fa-chevron-right"></i>
            </a>
            <a href="">Show Meal Plans <i class="fas fa-chevron-right"></i></a>
          </div>
          <a href="" class="pilot-tab link" 
            >Pilot Programs <i class="fas fa-chevron-down"></i
          ></a>
          <div class="pilot-sous-categories box">
            <a href=""
              >Modify Pilot Programs <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Pilot Programs <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Health</h3>
        <div class="items">
          <a href="" class="health-tab link" 
            >Experts Articles <i class="fas fa-chevron-down"></i
          ></a>
          <div class="health-sous-categories box">
            <a href=""
              >Modify Experts Articles <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Experts Articles <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="recipes-tab link" 
            >Healthy Recipes <i class="fas fa-chevron-down"></i
          ></a>
          <div class="recipes-sous-categories box">
            <a href=""
              >Modify Healthy Recipes <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Healthy Recipes <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="wellness-tab link" 
            >Wellness Videos <i class="fas fa-chevron-down"></i
          ></a>
          <div class="wellness-sous-categories box">
            <a href=""
              >Modify Wellness Videos <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Wellness Videos <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Community</h3>
        <div class="items">
          <a href="">Our Community <i class="fas fa-chevron-right"></i></a>

          <a href="" class="blog-tab link" 
            >Blog <i class="fas fa-chevron-down"></i
          ></a>
          <div class="blog-sous-categories box">
            <a href="">Modify Blog <i class="fas fa-chevron-right"></i> </a>
            <a href="">Show Blog <i class="fas fa-chevron-right"></i></a>
          </div>
          <a href="">Referral <i class="fas fa-chevron-right"></i></a>

          <a href="">What's New <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      
    </div>
    <main>
      
      <aside>
        <div class="logo">
          <a href="../index.php"><img src="../image/logo.png" alt="" /></a>
        </div>
        <h3>Workouts</h3>
        <div class="items">
          <a href="" class="workout-tab link" 
            >Workout Videos
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="workouts-sous-categories box">
            <a href=""
              >Modify Workout Videos <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Workout Videos <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="custom-workouts-tab link" 
            >Custom Workouts
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="custom-workouts-sous-categories box">
            <a href=""
              >Modify Custom Workouts <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Custom Workouts <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Programs</h3>
        <div class="items">
          <a href="" class="programs-tab link" 
            >Workout Programs
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="programs-sous-categories box">
            <a href=""
              >Modify Workout Programs <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Workout Programs <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="meal-tab link" 
            >Meal Plans <i class="fas fa-chevron-down"></i>
          </a>
          <div class="meal-sous-categories box">
            <a href=""
              >Modify Meal Plans <i class="fas fa-chevron-right"></i>
            </a>
            <a href="">Show Meal Plans <i class="fas fa-chevron-right"></i></a>
          </div>
          <a href="" class="pilot-tab link" 
            >Pilot Programs <i class="fas fa-chevron-down"></i
          ></a>
          <div class="pilot-sous-categories box">
            <a href=""
              >Modify Pilot Programs <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Pilot Programs <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Health</h3>
        <div class="items">
          <a href="" class="health-tab link" 
            >Experts Articles <i class="fas fa-chevron-down"></i
          ></a>
          <div class="health-sous-categories box">
            <a href=""
              >Modify Experts Articles <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Experts Articles <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="recipes-tab link" 
            >Healthy Recipes <i class="fas fa-chevron-down"></i
          ></a>
          <div class="recipes-sous-categories box">
            <a href=""
              >Modify Healthy Recipes <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Healthy Recipes <i class="fas fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="wellness-tab link" 
            >Wellness Videos <i class="fas fa-chevron-down"></i
          ></a>
          <div class="wellness-sous-categories box">
            <a href=""
              >Modify Wellness Videos <i class="fas fa-chevron-right"></i>
            </a>
            <a href=""
              >Show Wellness Videos <i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
        <h3>Community</h3>
        <div class="items">
          <a href="">Our Community <i class="fas fa-chevron-right"></i></a>

          <a href="" class="blog-tab link" 
            >Blog <i class="fas fa-chevron-down"></i
          ></a>
          <div class="blog-sous-categories box">
            <a href="">Modify Blog <i class="fas fa-chevron-right"></i> </a>
            <a href="">Show Blog <i class="fas fa-chevron-right"></i></a>
          </div>
          <a href="">Referral <i class="fas fa-chevron-right"></i></a>

          <a href="">What's New <i class="fas fa-chevron-right"></i></a>
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
        <?php
// Display message if it exists
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']); // Clear the message after displaying it
}
?>
        <div class="add-workouts">
            <h2>Add Workout</h2>
    
            
            <form action="process_workout.php" method="POST" enctype="multipart/form-data">
                <div>
                    <h4>Basic Information:</h4>
                    <div class="title">
                        <label for="title">Title:</label>
                    <span>*</span>
                    </div>
                <input type="text" id="title" name="title" required>
                <div class="title">
                    <label for="sous_titre">Subtitle:</label>
                <span>*</span>
                </div>
                <input type="text" id="sous_titre" name="sous_titre" required>
                </div>
                <div>
                    <h4>Workout Duration:</h4>
                   <div class="title">
                    <label for="exercice_time">Exercise Time:</label>
                    <span>*</span>
                   </div>
                <input type="text" id="exercice_time" name="exercice_time" required>
                </div>
                <div>
                    <h4>Workout Description:</h4>
                    <div class="title">
                        <label for="description">Description:</label>
                    <span>*</span>
                    </div>
                    <textarea id="description" name="description" rows="5" cols="30" required></textarea>
                
                </div>
                
                <div>
                    <h4>Workout Image:</h4>
                    <div class="title">
                        <label for="image">Upload Image:</label>
                    <span>*</span>
                    </div>
                <input type="file" id="image" name="image" accept="image/*">
                </div>
                
                
                
                
                
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        </div>
      </div>
    </main>

    <footer>
      <p>
        Made with <i class="fa-solid fa-heart" style="color: #ff8787"></i> by
        Khalifa Ltaief
      </p>
    </footer>
    <script>
        // Check if the message div exists
        const messageDiv = document.getElementById('message');
        if (messageDiv) {
            // Set a timeout to add the fade-out class after 2 seconds (2000 milliseconds)
            setTimeout(() => {
                messageDiv.classList.add('fade-out');
            }, 2000);
        }
        
    </script>
  
<script src="main.js"></script>
  </body>
</html>
