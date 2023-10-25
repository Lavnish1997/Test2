<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user credentials
    // Query the database to validate the user
    
    if (/* User validation is successful */) {
        $_SESSION['email'] = $email;
        header("Location: user_listing.php");
    } else {
        echo "Login failed. Invalid credentials.";
    }
}
?>
