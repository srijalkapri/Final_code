<?php
include 'session_check.php'; // Check if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbing Service</title>
    <link rel="stylesheet" href="moving.css">
</head>
<body>
<h1 class="topic">Electrician</h1>
    <div class="container">
        <div class="content">
            <div class="image-container">
                <img src="electrical.jpg" alt="Moving" class="moving-image">
            </div>
            <div class="text-container">
                <h2>Electrician</h2>
                <p>Electrician services involve electrical installations, repairs, and maintenance of wiring and circuits.</p>
                <p>Now Trending: Smart home integrations, energy-efficient lighting, and electrical safety inspections.</p>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <img src="wiring.jpeg" alt="Card 1">
                <div class="card-description">
                    <h3>Wiring</h3>
                    <p>Installation and repair of electrical systems in homes.</p>
                    <a href="booking.html?service=Electrician" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="emergency.jpg" alt="Card 2">
                <div class="card-description">
                    <h3>Emergency Electrical Repairs</h3>
                    <p>Immediate repair services for electrical issues causing outages or hazards.</p>
                    <a href="booking.html?service=Electrician" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="inspec.jpg" alt="Card 3">
                <div class="card-description">
                    <h3>Electrical Inspections</h3>
                    <p>Assessment of electrical systems to ensure safety and code compliance.</p>
                    <a href="booking.html?service=Electrician" class="book-now-link">Book Now</a>
                </div>
            </div>
        </div>
</body>
</html>
