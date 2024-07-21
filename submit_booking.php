<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service_booking";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_POST['specialization'])) {
        die("Specialization not set in POST request");
    }
    $specialization = $_POST['specialization'];

    
    $sql = "SELECT id FROM professionals WHERE specialization = ? ORDER BY RAND() LIMIT 1";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $specialization);
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    $result = $stmt->get_result();
    $professional_id = null;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $professional_id = $row['id'];
    } else {
        die("No professionals found for specialization: " . $specialization);
    }

    $stmt->close();

    $sql = "SELECT name, contact_email, contact_phone FROM professionals WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $professional_id);
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    $result = $stmt->get_result();
    $professional_details = null;
    if ($result->num_rows > 0) {
        $professional_details = $result->fetch_assoc();
    } else {
        die("No professional found with ID: " . $professional_id);
    }

    $stmt->close();
    $conn->close();

   
    if ($professional_details) {
        $filename = "professional_details_" . $professional_id . ".txt";
        $file = fopen($filename, "w");
        if ($file) {
            $content = "Name: " . $professional_details['name'] . "\n";
            $content .= "Contact Email: " . $professional_details['contact_email'] . "\n";
            $content .= "Contact Phone: " . $professional_details['contact_phone'] . "\n";
            fwrite($file, $content);
            fclose($file);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <?php if (isset($professional_details)): ?>
        <p>Professional Details:</p>
        <ul>
            <li>Name: <?php echo htmlspecialchars($professional_details['name']); ?></li>
            <li>Contact Email: <?php echo htmlspecialchars($professional_details['contact_email']); ?></li>
            <li>Contact Phone: <?php echo htmlspecialchars($professional_details['contact_phone']); ?></li>
        </ul>
        <a href="<?php echo $filename; ?>" download>Download Professional Details</a>
    <?php else: ?>
        <p>Professional details not available.</p>
    <?php endif; ?>
</body>
</html>
