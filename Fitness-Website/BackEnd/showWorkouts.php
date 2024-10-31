<?php
include 'db.php';

$sql = "SELECT * FROM workouts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts</title>
    <link rel="stylesheet" href="dashboard.css" />
    <style>
        .right-side img {
            width: 50px !important;
            height: 50px;
        }
       header {
        display: flex;
        justify-content: flex-end !important;
       }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 100px;
            height: 100px;
        }
        h1 {
            text-align:center;
            padding-top: 20px;
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
            <a href="workout.php"
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
        <header >
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
        </header>
        <div>
        <h1>Workouts List</h1>
    
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Titre</th>
                <th>Sous-titre</th>
                <th>Description</th>
                <th>Image</th>
                <th>Duration</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["sous_titre"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td>
                        <img src="uploads/<?php echo $row['image']; ?>" alt="Workout Image">
                    </td>
                    <td><?php echo $row["exercice_time"]; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No workouts found.</p>
    <?php endif; ?>
        </div>
    </div>
    </main>
    
    <script src="main.js"></script>
</body>
</html>

<?php $conn->close(); ?>
