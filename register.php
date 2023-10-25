<?php
// Perform server-side validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact"];

    // Validate data
    // You can add more detailed validation for each field

    // Connect to the MySQL database
    $db = new mysqli("localhost", "username", "password", "database_name");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Insert data into the database
    $insert_query = "INSERT INTO users (name, age, email, dob, contact) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($insert_query);
    $stmt->bind_param("sisss", $name, $age, $email, $dob, $contact);
    $stmt->execute();
    $stmt->close();

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);

    $db->close();
    
    header("Location: login.html");
}
?>
