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
<h1 class="topic">Plumbing</h1>
    <div class="container">
        <div class="content">
            <div class="image-container">
                <img src="plumbing.jpg" alt="Moving" class="moving-image">
            </div>
            <div class="text-container">
                <h2>Plumbing</h2>
              <p>Plumbing services include installation, maintenance, and repair of pipes, fixtures, and water systems.</p>
             <p>Now Trending: Leak detection, water filtration systems, and eco-friendly plumbing solutions.</p>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <img src="pipeinstall.jpg" alt="Card 1">
                <div class="card-description">
                    <h3>Pipe Installation</h3>
                    <p> Installing new water, drain, and gas pipes in residential and commercial properties.</p>
                    <a href="booking.html?service=Plumbing" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="fixtureinstall.webp" alt="Card 2">
                <div class="card-description">
                    <h3>Fixture Installation</h3>
                    <p>Setting up sinks, faucets, toilets, and other plumbing fixtures.</p>
                    <a href="booking.html?service=Plumbing" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="leakdetect.jpg" alt="Card 3">
                <div class="card-description">
                    <h3>Leak Detection</h3>
                    <p>Identifying and locating leaks in pipes and fixtures using specialized tools.</p>
                    <a href="booking.html?service=Plumbing" class="book-now-link">Book Now</a>
                </div>
            </div>
        </div>
</body>
</html>
