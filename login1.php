<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackaverse";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user_input = $_POST['username']; 
$input_password = $_POST['password'];


$sql = "SELECT * FROM signup_users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
   
    $user = $result->fetch_assoc();
    if (password_verify($input_password, $user['password'])) {
       
        session_start();
        $_SESSION['user_id'] = $user['id']; 
        $_SESSION['username'] = $user['username']; 

        
        header("Location: index.php");
        exit();
    } else {
       
        echo "Invalid password.";
    }
} else {
  
    echo "User does not exist.";
}

$stmt->close();
$conn->close();
?>
