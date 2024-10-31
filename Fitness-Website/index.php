<?php
session_start(); 
$isLoggedIn = isset($_SESSION['username']);
include 'db.php';
$sql = "SELECT * FROM workouts";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Website</title>
    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/logo.png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>

    
    <?php
session_start(); // Ensure session is started to access session variables

if (isset($_SESSION['username'])) {
    // User is logged in, include the login header
    include 'loginheader.php';
} else {
    // User is not logged in, load main.js
    echo '<script src="main.js"></script>';
}
?>
<div id="header"></div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Check the login status from PHP
      const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

      // Based on the login status, fetch the appropriate header
      const headerToLoad = isLoggedIn ? "loginHeader.php" : "header.html";
    })
    </script>
    <main>
        <div class="section-one">
            <div class="txt">
                <h2>
                    Feel Great. <br>
                    Body and Mind.
                </h2>
                <p>
                    Choose from hundreds of workouts, healthy recipes, relaxing meditations, and expert articles, for a whole body and mind approach to feeling great.
                </p>
                
                    
                
            </div>
            <div class="img">
                <img src="image/bg-main.png" alt="">
            </div>
        </div>
        <div class="section-two">
            <div class="series">
                <h2>
                    Trainer Series
                </h2>
                <p>
                    Exercise with your favorite trainer in our new Trainer Series programs.
                </p>
                
                
            </div>
            <div class="ref">
                <h2>
                    Earn a Free Plus Membership
                </h2>
                <p>
                    Share your referral code and every sign up earns rewards to put toward your membership.
                </p>
                
                <img src="image/pic2.png" alt="">
            </div>
        </div>
        <div class="section-three">
            <div class="dumbells">
                <h2>
                    Small Footprint
Big Gains
                </h2>
                <p>
                    The perfect dumbbells for any space. Use discount code FBXPB20 for $20 off an order of $200 or more.
                </p>
                
                
            </div>
            <div class="content">
                <h2>
                    Specialty Content
                </h2>
                <p>
                    Pilot programs provide special content tailored to smaller audiences, conditions, or life events.
                </p>
                
                <img src="image/pic4.png" alt="">
            </div>
        </div>
        <div class="section-four">
            <div class="workout-vids">
                <h2>
                    Workout Videos
                </h2>
                <p>
                    Exercise with certified personal trainers whether you’re at home or on the road.
                </p>
               
                
            </div>
            <div class="community">
                <h2>
                    Supportive Community
                </h2>
                <p>
                    Stay motivated and engaged with a little help from a supportive community of other members.
                </p>
                
                <img src="image/pic6.png" alt="">
            </div>
        </div>
    </main>
<div class="cards-container">
    <h2>Our Best Exercises</h2>
<?php if ($result->num_rows > 0): ?>
        <div class="workouts-container">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="workout-card">
                <?php 
        // Assuming the image filename is stored in $row['image']
        $imageName = $row["image"]; // This should contain the filename
        $imagePath = 'backend/uploads/' . $imageName; // Adjust this based on where your images are stored

        // Check if the image exists
        $imagePath = 'backend/uploads/' . $imageName; 

if(!empty($imageName) && file_exists($imagePath)):?>
        <div class="front">
 <img src="<?php echo $imagePath; ?>" alt="Workout Image">
        <?php else: ?>
            <img src="backend/uploader/default.jpg" alt="Default Image"> <!-- Make sure this default image exists -->
        <?php endif; ?>
        </div>
           
<div class="back">
  <h3>Exercice: <?php echo $row["title"]; ?></h3>
                    <p> <b>Description:</b> <?php echo $row["description"]; ?></p>
                    <p class="duration"><b>Duration:</b> <?php echo $row["exercice_time"]; ?></p>
                    <button>Voir cette Exercice </button>
</div>

                  
                    
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No workouts found.</p>
    <?php endif; ?>
</div>
<div class="faq-section">
    <div class="search-box-section">
        <h2>Find more responses</h2>
        <div class="input-box">
            <input type="text" placeholder="type a word">
            <button>Search</button>
        </div>
        <h4>Exemples of searchs : 'BEST EXERCICE', 'WOMEN EXERCICES', 'EXERCICE IN HOME'</h4>
    </div>
    <div class="faq-contents">
        <div class="questions">
            <h3>Frequently Asked Questions (FAQ) <i class="fas fa-chevron-right"></i></h3>
            <p>Espace client et données personnelles</p>
            <p>Commande et paiement</p>
            <p>Livraison et retrait</p>
            <p>Retour, SAV et reprise</p>
            <p>Projet, chantier et devis</p>
            <p>Codes promo et cartes cadeaux</p>
            <p>Programme de fidélité</p>
            <p>Programme de fidélité PRO</p>
            <p>Marketplace / Vendeurs partenaires</p>
            <p>Services et location</p>
        </div>
        <div class="answers">
            <h2>Frequently Asked Questions</h2>
            <p>Comment contacter un marchand Marketplace ?</p>
            <p>Ma livraison n'est pas conforme / l'article est défectueux. Que faire ?</p>
            <p>Comment créer une demande de SAV ?</p>
            <p>Comment annuler une commande ?</p>
            <p>J’ai passé une commande en ligne mais je ne vois pas mes points fidélité, pourquoi ?</p>
            <p>Quelles sont les modalités du SAV ?</p>
            <p>Comment retourner un produit de la Marketplace ?</p>
            <p>Comment modifier ou annuler ma commande d'un produit Marketplace ?</p>
            <p>Comment transformer mon devis en commande ?</p>
            <p>Le SAV est-il payant ?</p>
        </div>
    </div>
</div>
<div class="carousel swiper">
    <div class="carousel-container">
        <ul class="swiper-wrapper">
            <li class="swiper-slide">
                <a href="">
                    <img src="image/1.jpg" alt="">
                    <h2>Fente avec rotation des bras</h2>
                    <p>
                        Renforce jambes, abdos, et stabilité.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/2.jpg" alt="">
                    <h2>Jump Squats</h2>
                    <p>
                        Squat, then jump up. Builds leg power and endurance.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/3.jpg" alt="">
                    <h2>Kettlebell Russian Twist</h2>
                    <p>
                        Sit, lift feet, and twist kettlebell side-to-side to work core.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/4.jpg" alt="">
                    <h2>Barbell Curl</h2>
                    <p>
                        Stand and curl the barbell up to engage biceps.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/5.jpg" alt="">
                    <h2>Bodyweight Squat</h2>
                    <p>
                        Stand with feet shoulder-width, lower into a squat to engage legs and glutes
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/6.jpg" alt="">
                    <h2>Overhead Squat</h2>
                    <p>
                        Builds full-body strength and stability.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/7.jpg" alt="">
                    <h2>Air Squa</h2>
                    <p>
                        A basic, effective exercise for lower-body strength.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/8.jpg" alt="">
                    <h2>Concentration Curl</h2>
                    <p>
                        An isolated bicep exercise for targeted strength and muscle growth.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/9.jpg" alt="">
                    <h2>Dumbbell Walking Lunge</h2>
                    <p>
                        Step forward, lower until thigh is parallel; works legs and glutes.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/10.jpg" alt="">
                    <h2>Dumbbell Bicep Curl</h2>
                    <p>
                        Curl dumbbell toward shoulder to work biceps
                    
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/11.jpg" alt="">
                    <h2>Sledgehammer Tire Slam</h2>
                    <p>
                        Builds core, shoulders, and grip strength.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/12.jpg" alt="">
                    <h2>Lateral Raise</h2>
                    <p>
                        Raises dumbbells to shoulder height, working the side deltoids.
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            <li class="swiper-slide">
                <a href="">
                    <img src="image/13.jpg" alt="">
                    <h2>One-Arm Dumbbell Row</h2>
                    <p>
                        Pulls dumbbell toward hip, targeting back muscles
                    </p>
                    <button class="fas fa-chevron-right"></button>
                </a>
            </li>
            
        </ul>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
    </div>
</div>

    <div id="footer"></div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="swiper.js"></script>


</body>
</html>