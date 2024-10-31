<?php
// Include database connection
include('db.php');
session_start(); // Start the session

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    $sous_titre = mysqli_real_escape_string($conn, $_POST['sous_titre']);
    $exercice_time = mysqli_real_escape_string($conn, $_POST['exercice_time']);

    // Check if an image was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_folder = 'uploads/'; // Make sure this folder exists with write permissions

        // Move the uploaded file to the uploads folder
        if (move_uploaded_file($image_tmp, $image_folder . $image_name)) {
            $image_status = "Image uploaded successfully!";
        } else {
            $image_status = "Failed to upload image!";
        }
    } else {
        $image_name = null; // If no image is uploaded
    }

    // SQL query to insert data into the workouts table
    $sql = "INSERT INTO workouts (title, description, image, sous_titre, exercice_time) 
            VALUES ('$title', '$desc', '$image_name', '$sous_titre', '$exercice_time')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "<div id='message' class='success'>Workout added successfully!</div>";
    } else {
        $_SESSION['message'] = "<div id='message' class='error'>Error: " . mysqli_error($conn) . "</div>";
    }

    // Redirect back to workout.php
    header("Location: workout.php");
    exit(); // Ensure no further code is executed
}

// Close the database connection
mysqli_close($conn);

?>
background: #6ae56ac2;
    padding: 5px;
    color: #5a5959;
    width: fit-content;
    /* position: absolute; */
    margin: 5px auto;