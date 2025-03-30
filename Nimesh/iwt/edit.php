<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/userprof.css">


    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2.png">
    <title>Edit-Profile </title>
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


















    <div class="edit">
        <form action="./update.php" method="post" enctype="multipart/form-data">
            <br>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <h1><?php echo $username; echo"_"; echo $username2; ?></h1><br>

            <div class="txtbox1">
                <label for="Username">Username</label>
                <input type="text" id="name" name="username" placeholder="<?php echo $username; echo"_"; echo $username2; ?> ">
            </div>

            <br>
<!--
            <div class="txtbox1">
                <label for="Name">Last name</label>
                <input type="text" id="name" name="l_name">
            </div>

            <br>

            -->
            <div class="txtbox2">
                <label for="Name">Email address</label>
                <input type="email" id="email" name="email" placeholder="<?php echo $email; ?>" >
            </div>
            <br>
            <div class="txtbox3">
                <label for="Name">Country</label>
                <input type="text" id="country" name="country" placeholder="<?php echo $country; ?>" >
            </div>

            <br><br>
            <div class="txtbox4">
                <label for="Name">New picture</label>
                <input type="file" id="photo" name="image" accept="image/*">
                <h5>Accepted file types:</h5>
                <h6>Image files to be optimised, such as badges .gif .jpe .jpeg .jpg .png</h6>
            </div>
            <br><br>




            <input type="submit" value="Save Changes" class="submit" name="save"> <!-- submit //save parameter for send update --> 

            <button class="can" id="can"><a href="./userprofile.php">Cancel</a></button> <!-- cancel  -->
          
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button id="del" type="submit"><a href="./delete.php">Delete</a></button> <!-- delete  -->
        

            <br>



        </form>


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
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/faq">FAQs</a></li>
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