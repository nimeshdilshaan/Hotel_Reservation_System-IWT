<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/Gallery.css">
    <link rel="icon" type="image/jpeg" href="image\logo\image-removebg-preview2_0.33x.ico">
    <script src="js/Gallery.js"></script>
    <title>Famous5 | Gallery</title>
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
        <button id="btn2" class="join"><a href="../../Nimesh/iwt/Join.php">Join</a></button>
        <button id="btn3" class="sign"><a href="../../nimesh/iwt/Sign in.php">Log in <img src="image/user png.png" alt="user icon" width="12" height="12" style="margin-left: 5px;"></a> </button>
        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

       


    
        
   
        <div class="navi">
            <ul id="menubar">
                <li><a href="../../nimesh/iwt/index.php">Home</a></li>
                <li><a href="../../Thisantha\Rooms\src\Rooms.php">Rooms</a></li>
                <li><a href="../../Thisantha/Rooms/Hotel info/main.php">Hotel Info</a></li>
                <li><a href="offer.php">Offers</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="../../shashini/src/location.php">Location</a></li>
                <li><a href="../../shashini/src/dining.php">Dining</a></li>
                <li><a href="../../My/src/events.php">Events</a></li>
            </ul>


            
        </div>
        
    
        
    </div>
    

    
</header>





<body>
    
    
  <div class="gallery-container">
    
        <h1>Hotel Gallery</h1><br><br>
            
        <div class="gallery-nav">
            <button class="active" onclick="filterGallery('all')">All</button>
            <button onclick="filterGallery('hotel')">Hotel</button>
            <button onclick="filterGallery('rooms')">Rooms</button>
            <button onclick="filterGallery('dining')">Dining</button>
            <button onclick="filterGallery('amenities')">Amenities</button>
            <button onclick="filterGallery('events')">Events</button>
        </div><br>
        <div class="gallery">
           
            <div class="gallery-item hotel">
                <img src="image/gallery/image1.jpg" alt="Hotel Exterior">
                <p>Hotel Exterior</p>
            </div>
            <div class="gallery-item rooms">
                <img src="image/gallery/image2.jpg" alt="Deluxe Room">
                <p>Deluxe Room</p>
            </div>
            <div class="gallery-item dining">
                <img src="image/gallery/image3.jpg" alt="Dining Area">
                <p>Dining Area</p>
            </div>
            <div class="gallery-item amenities">
                <img src="image/gallery/image4.jpg" alt="Swimming Pool">
                <p>Swimming Pool</p>
            </div>
            <div class="gallery-item events">
                <img src="image/gallery/image5.jpg" alt="Conference Room">
                <p>Conference Room</p>
            </div>
            <div class="gallery-item amenities">
                <img src="image/gallery/image6.jpg" alt="Spa">
                <p>Spa & Wellness</p>
            </div>
            <div class="gallery-item rooms">
                <img src="image/gallery/image7.jpg" alt="Luxury Suite">
                <p>Luxury Suite</p>
            </div>
            <div class="gallery-item events">
                <img src="image/gallery/image8.jpg" alt="Wedding Setup">
                <p>Wedding Setup</p>
            </div>
            
            <div class="gallery-item hotel">
                <img src="image/gallery/image9.jpg" alt="Lounge Area">
                <p>Lounge Area</p>
            </div>
            <div class="gallery-item dining">
                <img src="image/gallery/image10.jpg" alt="Buffet Breakfast">
                <p>Buffet Breakfast</p>
            </div>
            <div class="gallery-item rooms">
                <img src="image/gallery/image11.jpg" alt="Family Room">
                <p>Family Room</p>
            </div>
            <div class="gallery-item amenities">
                <img src="image/gallery/image12.jpg" alt="Gym">
                <p>Gym</p>
            </div>
            <div class="gallery-item events">
                <img src="image/gallery/image13.jpg" alt="Event Hall">
                <p>Event Hall</p>
            </div>
            <div class="gallery-item dining">
                <img src="image/gallery/image14.jpg" alt="Outdoor Dining">
                <p>Outdoor Dining</p>
            </div>
            <div class="gallery-item hotel">
                <img src="image/gallery/image15.jpg" alt="Rooftop View">
                <p>Rooftop View</p>
            </div>
            <div class="gallery-item amenities">
                <img src="image/gallery/image16.jpg" alt="Yoga Area">
                <p>Yoga Area</p>
            </div>
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
          <li><a href="../../nimesh/iwt/index.php">Home</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="../../My/src/faq.php">FAQs</a></li>
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