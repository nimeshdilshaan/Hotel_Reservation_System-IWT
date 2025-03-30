<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="styles/styles1.css">
    <link rel="stylesheet" href="styles/slideshow.css">




    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Home</title>
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


            <button id="btn1" class="find"><a href="../../My/src/find stay.php">Find Stay</a></button>
            <button id="btn2" class="join"><a href="Join.php">Join</a></button>
            <button id="btn3" class="sign"><a href="Sign in.php">Log in <img src="image/user png.png" alt="user icon" width="12"height="12" style="margin-left: 5px;"></a> </button>

        </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>







        <div class="navi">
            <ul id="menubar">
                <li><a href="index.php">Home</a></li>
                <li><a href="../../Thisantha/Rooms/src/Rooms.php">Rooms</a></li>
                <li><a href="../../Thisantha/Rooms/Hotel info/main.php">Hotel Info</a></li>
                <li><a href="../../Induni/src/offer.php">Offers</a></li>
                <li><a href="../../Induni/src/Gallery.php">Gallery</a></li>
                <li><a href="../../shashini/src/location.php">Location</a></li>
                <li><a href="../../shashini/src/dining.php">Dining</a></li>
                <li><a href="../../My/src/events.php">Events</a></li>
            </ul>
        </div>


    </div>
</header>


<body>


    <div class="add">

        <button id="btn5" class="rg"><a href="#">1 Room 1 Guest</a></button>
        <button id="btn6" class="rate"><a href="#">Special Rates</a></button>
        <button id="btn7" class="cr"><a href="#">Check Rooms & Rates</a> </button>

    </div><br>

    <main>

        <div class="slideshow">
            <div class="slides">

                <img class="active" src="image\main\F5 img 1.png" alt="#img 1" width="1024px" height="520px">
                <img class="slide" src="image\main\image 1.jpg" alt="#img 2" width="1024px" height="520px">
                <img class="slide" src="image\main\image 2.jpg" alt="#img 3" width="1024px" height="520px">
                <img class="slide" src="image\main\image 3.jpg" alt="#img 4" width="1024px" height="520px">
                <img class="slide" src="image\main\image 5.jpg" alt="#img 5" width="1024px" height="520px">
                <img class="slide" src="image\main\image 6.jpg" alt="#img 6" width="1024px" height="520px">
                <img class="slide" src="image\main\image 7.jpg" alt="#img 7" width="1024px" height="520px">
                <img class="slide" src="image\main\image 8.jpg" alt="#img 8" width="1024px" height="520px">
                <img class="slide" src="image\main\image 9.jpg" alt="#img 9" width="1024px" height="520px">
                <img class="slide" src="image\main\image 10.jpg" alt="#img 10" width="1024px" height="520px">
                <img class="slide" src="image\main\image 11.jpg" alt="#img 11" width="1024px" height="520px">
                <img class="slide" src="image\main\image 12.jpg" alt="#img 12" width="1024px" height="520px">
                <img class="slide" src="image\main\image 13.jpg" alt="#img 13" width="1024px" height="520px">

            </div>

            <div class="picctrl">
                <span class="next">&#10095</span>
                <span class="prev">&#10094</span>
            </div>

            <div class="dotsline">
                <div class="dot active" attr="0"></div>
                <div class="dot" attr="1"></div>
                <div class="dot" attr="2"></div>
                <div class="dot" attr="3"></div>
                <div class="dot" attr="4"></div>
            </div>

        </div>

        <script src="js\script.js"></script>

    </main>






</body>




<footer>
    <div class="footer-container">

        <div class="footer-section company-info">
            <h3>About Us</h3>
            <p>Hotel Famous5 offers luxury and comfort with world-class hospitality.
                We aim to provide an unforgettable experience, blending modern amenities with personalized service.
                Whether for business or leisure, we ensure a relaxing stay with elegant accommodations and fine dining,
                creating a home-like atmosphere.</p>
        </div>


        <div class="footer-section quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="../../My/src/faq.php">FAQs</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>


        <div class="footer-section contact-info">
            <h3>Contact Us</h3>
            <p><strong>Phone:</strong> +94 91 5555 777</p>
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

            <form action="Join.html" method="post">

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