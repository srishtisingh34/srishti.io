<?php
// Define your password
$correct_password = "0011";

// Check if form is submitted
if(isset($_POST['submit'])){
    // Get entered password
    $password = $_POST['password'];

    // Check if password matches
    if($password === $correct_password){
        // Redirect to the resume file
        header("Location: SrishtiSingh_DA.pdf");
        exit();
    } else {
        // Display error message
        echo "<p>Incorrect password. Please try again.</p>";
    }
}
?>
