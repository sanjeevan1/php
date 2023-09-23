<?php
// Connect to the database
$conn = new mysqli("localhost", "your_username", "your_password", "healthcare_prescriptions");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
