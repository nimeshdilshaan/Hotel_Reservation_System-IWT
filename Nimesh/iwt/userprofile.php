<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/userprof.css">

    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | User Profile </title>
</head>
<header>


    <div class="main">

        <div class="user-profile">
            <button><a href="/src/image/icon/User-Profile.png"><img src="image/icon/User-Profile.png" alt="user-profile"
                        width="60px" height="60px"></a></button>
                        
            <h2><?php include 'display.inc.php'; echo $username; echo" "; echo $username2; ?></h2>
        </div>




        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>






    </div>
</header>

<body>
    <div class="prof">


    

    <div class="user-view">
        <button><a href="#"><img src="image/icon/User-Profile.png" alt="user" width="100px" height="100px"></a></button>
        <h1><?php echo $username; echo" "; echo $username2; ?></h1>
        
    </div>

    <hr>



    <div class="databox4">
        <h3>Mobile app</h3>
        <h4>This site has mobile app access enabled</h4>
        <p><a href="#">Download the mobile app.</a></p>

         

    </div>




    

    

    <div class="databox1">
        <h3>User Details</h3>
        <p><a href="./edit.php">Edit Profile</a></p>

        <br>

        <h3>Email</h3>
        <p><a href="#"><?php echo $email; ?></a></p>
    </div>

    <div class="databox3">
        <h3>Login activity</h3>

        <h4>Date and time</h4>
        <p><a href="#"> 
            <script>
                document.write(new Date().toLocaleString());
                setInterval(() => {
                    
                }, 1000);
                
            </script>
        </a>
    </p><br>

        <h4>Last access to site</h4>
        <p ><a href="#"> 
                <script>
                    document.write(new Date().toLocaleString());
                </script>
            </a>
            <button id="logout" style="background-color:#ffcc00; color:white;"><a href="index.php"> Log Out </a></button> 
        </p>

        <br>
     
    </div>

    

    <div class="databox2">
        <h3>Privacy and policies</h3>
         <p><a href="#">Data retention summary</a></p>

    </div>






</div>




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
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./contact">Contact</a></li>
                <li><a href="../../My/src/faq.php">FAQs</a></li>
                <li><a href="./privacy-policy">Privacy Policy</a></li>
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