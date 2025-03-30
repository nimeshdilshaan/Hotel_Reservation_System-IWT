<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image\logo\image-removebg-preview2_0.33x.ico">
    <link rel="stylesheet" href="styles/Rooms.css">
    <link rel="stylesheet" href="billdetails.css">
    <link rel="stylesheet" href="display.css">
    
    
    <title>Famous5</title>
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
        
    
        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

       


    
        
   
    
        
    </div>
</header>
<body>
    <div class="body-container">
<?php

require 'config.php';

$roomtype=$_POST["roomtype1"];
$fname=$_POST["fname1"];
$lname=$_POST["lname1"];
$mail=$_POST["mail1"];
$pn=$_POST["pn1"];
$country=$_POST["country1"];
$address=$_POST["address1"];
$zip=$_POST["zip1"];
$city=$_POST["city1"];
$cn=$_POST["cn1"];
$month=$_POST["month1"];
$year=$_POST["year1"];
$id=$_POST["id"];
$sql4 = "SELECT MAX(id) AS max_id FROM payment_details1";
$result = $con->query($sql4);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $max_id = $row['max_id'];
}



$sql3="DELETE FROM payment_details1  WHERE id = '$max_id'";
if($con->query($sql3))
{
    echo "deleted";
}



$con->close();
?>
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
          <li><a href="/home">Home</a></li>
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