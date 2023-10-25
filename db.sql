CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    contact VARCHAR(10) NOT NULL,
    profile_image_path VARCHAR(255) NOT NULL
);
