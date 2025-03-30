<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Events</title>
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
            <script>

              document.getElementById("language").addEventListener("change", function() 
                  {
                      let selectedLang = this.value;
                      alert("Language changed to: " + selectedLang);
                  });
            </script>

        
    
        <button id="btn1" class="find"><a href="find stay.php">Find Stay</a></button>
        <button id="btn2" class="join"><a href="../../Nimesh/iwt/Join.php">Join</a></button>
        <button id="btn3" class="sign"><a href="../../Nimesh/iwt/Sign in.php">Log in<img src="image/icon/user png.png" alt="user icon" width="12" height="12" style="margin-left: 5px;"></a> </button>
        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

       


    
        
   
        <div class="navi" >
            <ul id="menubar">
                <li><a href="../../Nimesh/iwt/index.php">Home</a></li>
                <li><a href="../../Thisantha\Rooms\src\Rooms.php">Rooms</a></li>
                <li><a href="../../Thisantha/Rooms/Hotel info/main.php">Hotel Info</a></li>
                <li><a href="../../Induni/src/offer.php">Offers</a></li>
                <li><a href="../../Induni/src/Gallery.php">Gallery</a></li>
                <li><a href="../../shashini/src/location.php">Location</a></li>
                <li><a href="../../shashini/src/dining.php">Dining</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
        </div>
    
        
    </div>



    
</header>


<body>
  
  

  

    <div class="container-event">

      <section class="event-info">

        <h1>Meetings and Events at Famous5 Hotel</h1>

        <div class="photo2-container">
          <img id="photo" src="image/Hilton-Singapore-Orchard-Grand-Ballroom-Weddings-2048x1365.jpg" alt="Photo Collection">
          <div class="prev" onclick="prevPhoto()">&#10094;</div>
          <div class="next" onclick="nextPhoto()">&#10095;</div>
        </div>
        
        <script>
          const photos = ['image/Hilton-Singapore-Orchard-Grand-Ballroom-Weddings-2048x1365.jpg' , 'image/Hilton-Singapore-Orchard-Imperial-Ballroom-Weddings-1536x1025.jpg', 'image/Hilton-Singapore-Orchard-Rhu-Wedding-Solemnization-2048x1365.jpg'];
          let currentPhoto = 0;
        
          function showPhoto(index) {
            const photoElement = document.getElementById('photo');
            photoElement.src = photos[index];
          }
        
          function prevPhoto() {
            currentPhoto = (currentPhoto > 0) ? currentPhoto - 1 : photos.length - 1;
            showPhoto(currentPhoto);
          }
        
          function nextPhoto() {
            currentPhoto = (currentPhoto < photos.length - 1) ? currentPhoto + 1 : 0;
            showPhoto(currentPhoto);
          }
        </script>
        

        <p>
          At Famous5 Hotel, we offer a range of elegant event spaces designed to accommodate meetings, conferences, weddings, and special events. 
          Our dedicated team ensures every event is seamlessly executed with attention to detail, 
          providing an unforgettable experience for your guests.
        </p>

        <p>
          Whether you are hosting a corporate conference or a lavish wedding,
           our versatile spaces are equipped with cutting edge audio,visual technology and designed to meet all your needs.
          Our multi language event planners are ready to assist with every detail,
           ensuring that language is never a barrier in creating a spectacular event.
        </p>

      </section>
  
      <section class="ballroom-section">

        


        <div style="display: flex; align-items: center;">

          <img  src="image/1520543553156.jpeg" 
          alt="Pillar free Ballroom" class="event-image" width="55%" style="margin-left: 20px; margin-top: 50px; border-radius: 10px;  padding: 10px;
          border: 1px solid #ddd;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"  >
         
          <h2>Pillar Free Ballroom</h2> 

          <p>
            Our spacious, pillar free ballroom provides a stunning setting for large events such as weddings, galas, and corporate gatherings.<br>
            With its open layout and high ceilings, 
            the ballroom can be customized to suit any event design.<br>
             Modern lighting systems and flexible seating arrangements make it an ideal space for hosting up to 500 guests.
          </p>

        </div>
        
       
      </section>
  
      <section class="outdoor-section">

        
        <div style="display: flex; justify-content: space-between; align-items: center;">
          
          
        <p>
           For those seeking an open air experience, 
           our scenic outdoor restaurant offers a charming space for social events,cocktail parties,and private dinners.<br>
           Surrounded by lush greenery and a picturesque backdrop,it provides a perfect blend of nature and luxury dining.
        </p>

        <h2>Outdoor Restaurant</h2>

        
       
          <img src="image/GARDEN.0.jpg" alt="Outdoor Restaurant" class="event-image" width="50%" style=" margin-top: 50px; margin-right: 10px; border-radius:10px; padding: 10px;
          border: 1px solid #ddd;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        </div>
        

     

        

        

      </section>
  
      <section class="multifunction-space-section">



        <div style="display: flex; align-items: center;">

          <img  src="image/F5 img 1.png" 
          alt="Soundproof Multifunctional Spaces" class="event-image" width="55%" style="margin-left: 20px; margin-top: 50px; border-radius: 10px;  padding: 10px;
          border: 1px solid #ddd;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"  >
         
          <h2>Soundproof Multifunctional Spaces</h2>

        <p>
            Our soundproof multifunctional spaces are equipped with the latest audio/visual technology,
            making them ideal for meetings, workshops, and private gatherings.<br>
            These flexible spaces can be tailored to accommodate various event sizes and formats, ensuring privacy and a professional atmosphere.
        </p>

        </div>
        
       


      </section>
  
      <section class="event-planners">


        <div style="display: flex; justify-content: space-between; align-items: center;">
          
          
          <p>
            Our dedicated team of multi language event planners will assist you with every detail,
            from initial planning to the final execution of your event.<br>
            Whether it's a corporate meeting or a grand wedding, we ensure that every aspect is handled with precision and care, leaving you free to enjoy the occasion.
         </p>
  
          <h2>Experienced Event Planners</h2>
  
          
         
            <img src="image/pexels-olia-danilevich-5313132.jpg" alt="Experienced Event Planners" class="event-image" width="45%" style=" margin-top: 50px; margin-right: 10px;  margin-bottom: 50px; border-radius:10px;  padding: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
  
          </div>
          

       

       

        
      </section>

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
              <li><a href="../../Nimesh/iwt/index.php">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="faq.php">FAQs</a></li>
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