<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <link rel="stylesheet" href="styles/Rooms.css">
    <link rel="stylesheet" href="main.css">
    <title>Famous5 | Hotel Info</title>
</head>

<header>
    <div class="main">
        <div class="line1">
            <label for="language">Language</label>
            <select id="language" name="language" class="dropdown">
                <option value="en">English</option>
                <option value="es">Español</option>
                <option value="fr">Français</option>
                <option value="de">Deutsch</option>
                <option value="zh">中國人</option>
                <option value="jp">日本語</option>
            </select>

            <button id="btn1" class="find"><a href="../../../My/src/find stay.php">Find Stay</a></button>
            <button id="btn2" class="join"><a href="../../../Nimesh/iwt/Join.php">Join</a></button>
            <button id="btn3" class="sign"><a href="../../../Nimesh/iwt/Sign in.php">Log in <img src="image/icon/user png.png" alt="user icon" width="12" height="12" style="margin-left: 5px;"></a></button>
        </div>

        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>

        <div class="navi">
            <ul id="menubar">
                <li><a href="../../../Nimesh/iwt/index.php">Home</a></li>
                <li><a href="../src/Rooms.php">Rooms</a></li>
                <li><a href="main.php">Hotel Info</a></li>
                <li><a href="../../../Induni/src/offer.php">Offers</a></li>
                <li><a href="../../../Induni/src/Gallery.php">Gallery</a></li>
                <li><a href="../../../shashini/src/location.php">Location</a></li>
                <li><a href="../../../shashini/src/dining.php">Dining</a></li>
                <li><a href="../../../My/src/events.php">Events</a></li>
            </ul>
        </div>
    </div>
</header>

<body>
    <div class="hotel-info">
        <h1>Welcome to Famous5 Hotel</h1>
        <div class="hotel-description">
            <h2>Your Home Away from Home</h2>
            <p>At Famous5, we provide an exquisite blend of luxury and comfort, tailored to meet the needs of every guest. 
            Whether you are here for business or leisure, our aim is to ensure an unforgettable experience.</p>
        </div>
        <div class="amenities">
            <h2>Amenities</h2>
            <ul>
                <li>Complimentary Wi-Fi</li><br>
                <li>24/7 Room Service</li><br>
                <li>Fitness Center</li><br>
                <li>Spa and Wellness Center</li><br>
                <li>Outdoor Pool</li><br>
                <li>Conference Rooms</li><br>
            </ul>
        </div>
        <div class="dining">
        <h2 style="margin-top:200px;">Dine with Us</h2>
            <p>Experience culinary excellence in our on-site restaurant, offering a wide array of international cuisines made with the freshest ingredients.</p>
        </div>
        <div class="location">
            <h2>Location</h2>
            <p>Conveniently located near the city center, Famous5 Hotel is just a short distance away from popular attractions and business districts.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.134304211515!2d80.22234041518015!3d6.927078195971877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595e52db674b%3A0x1f4a1bda4b2e3e8b!2sFamous5%20Hotel!5e0!3m2!1sen!2slk!4v1694327311412!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</body>

<footer>
    <div class="footer-container">
        <div class="footer-section company-info">
            <h3>About Us</h3>
            <p>Hotel Famous5 offers luxury and comfort with world-class hospitality. 
                We aim to provide an unforgettable experience, blending modern amenities with personalized service. 
                Whether for business or leisure, we ensure a relaxing stay with elegant accommodations and fine dining, creating a home-like atmosphere.</p>
        </div>

        <div class="footer-section quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="../../../My/src/find stay.php">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="../../../My/src/faq.php">FAQs</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-section contact-info">
            <h3>Contact Us</h3>
            <p><strong>Phone:</strong> +94 91 5555 825</p>
            <p><strong>Email:</strong> info@famous5.lk</p>
            <p><strong>Location:</strong> Malabe, Sri Lanka</p>
        </div>

        <div class="footer-section social-media">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><img src="image/icon/insta.png" alt="Instagram"></a>
                <a href="#"><img src="image/icon/link.png" alt="LinkedIn"></a>
                <a href="#"><img src="image/icon/fb.png" alt="Facebook"></a>
                <a href="#"><img src="image/icon/yt.png" alt="YouTube"></a>
                <a href="#"><img src="image/icon/xnew.png" alt="Twitter"></a>
                <a href="#"><img src="image/icon/tiktok.png" alt="TikTok"></a>
            </div>
        </div>

        <div class="footer-section newsletter">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletter for the latest updates and offers.</p>

            <form action="/subscribe" method="post">
                <input type="email" name="email" placeholder="Your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>
</html>
