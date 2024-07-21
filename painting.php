<?php
include 'session_check.php'; 
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
<div id="message"></div>
    <h1 class="topic">Painting</h1>
    <div class="container">
        <div class="content">
            <div class="image-container">
                <img src="painting.jpg" alt="Moving" class="moving-image">
            </div>
            <div class="text-container">
                <h2>Painting</h2>
                <p>Painting services cover interior and exterior painting, including surface preparation and finishing.</p>
                <p>Now Trending: Eco-friendly paints, textured wall finishes, and color consultations.</p>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <img src="interior_painting.jpg" alt="Card 1">
                <div class="card-description">
                    <h3>Interior Painting</h3>
                    <p>Painting the interior walls, ceilings, and trim of a home or building</p>
                    <a href="booking.html?service= Painting" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="exterior_painting.jpg" alt="Card 2">
                <div class="card-description">
                    <h3>Exterior Painting</h3>
                    <p>Painting the exterior surfaces of a building, including walls, trim, and facades.</p>
                    <a href="booking.html?service= Painting" class="book-now-link">Book Now</a>
                </div>
            </div>
            <div class="card">
                <img src="decorative_painting.jpg" alt="Card 3">
                <div class="card-description">
                    <h3>Decorative Painting</h3>
                    <p>Artistic painting techniques such as murals, faux finishes, and textured effects.</p>
                    <a href="booking.html?service= Painting" class="book-now-link">Book Now</a>
                </div>
            </div>
        </div>
       
</body>
</html>
