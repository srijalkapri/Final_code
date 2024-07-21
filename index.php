<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pujan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Home Page</title>
</head>
<body>

    <div class="menu-bar" >
       <a href="index.php" class="logo">
        <h3>Quick<span>Fix</span></h3>
       </a>
        <ul>
            <li><a href="#services">Services</a></li>
       
            <li><a href="pro.html">Become a Pro</a></li>
            <li>
                <?php if (isset($_SESSION['username'])): ?>
                    <a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                <?php else: ?>
                    <a href="login.html">Login/Signup</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>

    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Our Services</h1>
            <p>Find the best services tailored for you</p>
            <div class="search-box">
                <input type="text" id="search-input" placeholder="Search for services...">
                <button id="search-button">Search</button>
            </div>
        </div>
    </div>

    <div id="services" class="serviceSection">
        <section class="handyman-services">
            <h2>Our Services:</h2>
            <div class="card-container">
                <a href="plumbing.php">
                    <div class="card">
                        <img src="plumbing.jpg" alt="plumbing">
                        <h3>Plumbing</h3>
                    </div>
                </a>
                <a href="painting.php">
                    <div class="card">
                        <img src="painting.jpg" alt="Painting">
                        <h3>Painting</h3>
                    </div>
                </a>
                <a href="carpenter.php">
                    <div class="card">
                        <img src="carpenter.jpg" alt="Carpenter">
                        <h3>Carpenter</h3>
                    </div>
                </a>
                <a href="moving.php">
                    <div class="card">
                        <img src="moving.jpg" alt="Moving">
                        <h3>Moving</h3>
                    </div>
                </a>
                <a href="electrician.php">
                    <div class="card">
                        <img src="electrical.jpg" alt="Electrical">
                        <h3>Electrical</h3>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <div class="advertisement" id="advert-scroll">
        <div class="ad-text">
            <h1>About Us</h1>
            <p>Welcome to QuickFix, your premier destination for reliable and skilled handyman services. Our platform connects you with experienced professionals for all your home improvement needs, including carpentry, electrical work, painting, plumbing, and housekeeping. We pride ourselves on delivering top-notch craftsmanship and exceptional customer service, ensuring every job, big or small, is completed with precision and care. Transform your house into the home of your dreams with our trusted handymen. Your satisfaction is our highest priority.
</p>
<p>Discover the ease of home improvement with QuickFix today!</p>
            <button>Learn More</button>
        </div>
        <div class="ad-image">
            <img src="adimg.jpg" alt="Handyman Services">
        </div>
    </div>

    <footer>
        <div class="footerContainer">
            <div class="contactus">
                <h2>Contact Us</h2>
                <p>Email: rpsb234@gmail.com</p>
            </div>
            <div class="socialIcons">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#advert-scroll">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Our Team</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Quickfix, Inc. All Rights Reserved</p>
        </div>
    </footer>

    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            var searchQuery = document.getElementById('search-input').value.toLowerCase();
            var pageMap = {
                'painting': 'painting.html',
                'painter': 'painting.html',
                'paint': 'painting.html',
                'plumbing': 'plumbing.html',
                'plumber': 'plumbing.html',
                'plumb': 'plumbing.html',
                'pipefix': 'plumbing.html',
                'electrician': 'electrician.html',
                'electricity': 'electrician.html',
                'electric': 'electrician.html',
                'wiring': 'electrician.html',
                'moving': 'moving.html',
                'mover': 'moving.html',
                'shifting': 'moving.html',
                'carpenter': 'carpenter.html',
                'furniture': 'carpenter.html',
                'carpentry': 'carpenter.html'
            };

            if (pageMap[searchQuery]) {
                window.location.href = pageMap[searchQuery];
            } else {
                alert('Service not found. Please try again.');
            }
        });

        document.getElementById('search-input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('search-button').click();
            }
        });

        document.querySelector('.menu-bar a[href="#services"]').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
        });
        
    </script>
</body>
</html>
