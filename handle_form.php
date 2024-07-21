<?php
// Database credentials
$servername = "localhost"; // Change this if your database is on a different server
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "service_booking"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO professionals (name, specialization, contact_email, contact_phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $specialization, $contact_email, $contact_phone);

    // Execute the query
    if ($stmt->execute()) {
        echo "Profile information saved successfully! <a href='index.php'>View Profile</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
