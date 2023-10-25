<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample user data (you would get this from your form or other input)
$name = "John Doe";
$age = 30;
$email = "johndoe@example.com";
$dob = "1993-10-25"; // Date format must be yyyy-mm-dd
$contact = "1234567890";
$profile_image_path = "path/to/profile_image.jpg";

// Insert data into the "users" table
$sql = "INSERT INTO users (name, age, email, dob, contact, profile_image_path)
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $conn->prepare($sql);
$stmt->bind_param("sissss", $name, $age, $email, $dob, $contact, $profile_image_path);

if ($stmt->execute()) {
    echo "User data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
