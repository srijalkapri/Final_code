<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    
    header('Location: login_instructions.php');
    exit();
}
?>
