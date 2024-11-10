<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ved";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if (isset($_POST['formButton'])) {
    // Retrieve form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // Insert data into the database
    $sql = "INSERT INTO contacts (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
