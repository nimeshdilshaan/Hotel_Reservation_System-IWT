<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image\logo\image-removebg-preview2_0.33x.ico">
    <link rel="stylesheet" href="styles/Rooms.css">
    <title>Famous5 | Rooms</title>
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
        <button id="btn3" class="sign"><a href="../../../Nimesh/iwt/Sign in.php">Log in <img src="image/icon/user png.png" alt="user icon" width="12" height="12" style="margin-left: 5px;"></a> </button>
        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

       


    
        
   
        <div class="navi" >
            <ul id="menubar">
                <li><a href="../../../Nimesh/iwt/index.php">Home</a></li>
                <li><a href="Rooms.php">Rooms</a></li>
                <li><a href="../Hotel info/main.php">Hotel Info</a></li>
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
  <div class="body-container">
  <br>
  <p class="room-p1"style="margin-right:250px;">Rooms and Suits</p><br><br>
  <p class="room-p2">Your stay includes</p>

  <ol class="ol-1">
    <li>Free parking</li>
    <li>Free Wifi</li>
    <li>On-site restaurant</li>
    <li>Outdoor pool</li>
    <li>Fitness center</li>
  </ol>
  
  <nav class="navbar">
    <ol>
      <li><a href="Rooms.php">All</a></li>
      <li><a href="Rooms guest.php">Guest Rooms</a></li>
      <li><a href="Rooms suits.php">Suits</a></li>
      <li><a href="Rooms executive.php">Executive</a></li>
    </ol>

  



<!-- The deluxe suite -->
<div class="room-1">
  <img src="image/room1.jpg" alt="room1" height="240px" class="roomimg">
  <h3>Deluxe suit</h3>
  <button type="button" class="btn-4" id="openroomd1"><p>Room details >></p></button>
 
<div id="myModal1" class="modal">
<div class="modal-content">
  <span class="close">&times;</span>
  <h3>Room Details</h3>
  <p><strong>Room Type:</strong> Deluxe Suite</p>
  <p><strong>Price:</strong> $200 per night</p>
  <p><strong>Features:</strong>Dining table,Mini refrigerator,Separate bathtub and shower,Separate toilet area,Hand-held shower,Seating area with sofa </p>
  <p><strong>Description:</strong> A luxurious suite with a beautiful view and top-notch amenities.</p>
</div>
</div>
<br>
<button type="button" class="bookbtn"><a href="billdetails.php" target="_blank">Book now for $200</a></button>
</div>

<!--Business suit-->
<div class="room-1">
  <img src="image/room2.jpg" alt="room2" height="240px" class="roomimg">
  <h3>Business suit</h3>
  <button type="button" class="btn-4" id="openroomd2"><p>Room details >></p></button>

  <div id="myModal2" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Room Details</h3>
      <p><strong>Room Type:</strong> Business Suite</p>
      <p><strong>Price:</strong> $250 per night</p>
      <p><strong>Features:</strong> Dining table,Mini refrigerator,Separate bathtub and shower,Separate toilet area,Hand-held shower,Seating area with sofa,Seating,area with sofa sleeper</p>
      <p><strong>Description:</strong> A luxurious suite with a beautiful view and top-notch amenities.</p>
    </div>
  </div>
  <br>
  <button type="button" class="bookbtn"><a href="billdetails.php" target="_blank">Book now for $250</a></button>
</div>

<!--Sea view suit suit-->
<div class="room-1">
  <img src="image/room3.jpg" alt="room3" height="240px" class="roomimg">
  <h3>Sea view suit</h3>
  <button type="button" class="btn-4" id="openroomd3"><p>Room details >></p></button>

  <div id="myModal3" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Room Details</h3>
      <p><strong>Room Type:</strong> Sea view suit</p>
      <p><strong>Price:</strong> $300 per night</p>
      <p><strong>Features:</strong> Ocean view, King-sized bed, Free Wi-Fi, Mini-bar,Seating area with sofa,Seating,area with sofa sleeper</p>
      <p><strong>Description:</strong> A luxurious suite with a beautiful ocean view and top-notch amenities.</p>
    </div>
  </div>
  <br>
  <button type="button" class="bookbtn"><a href="billdetails.php" target="_blank">Book now for $300</a></button>
</div>


  

    
</div>
<script src="mainJS.js"></script>
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
              <li><a href="../../../Nimesh/iwt/index.php">Home</a></li>
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