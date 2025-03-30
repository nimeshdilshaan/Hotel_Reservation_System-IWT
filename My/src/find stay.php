<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Find stay</title>
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

<!--<div class="time">

<span id="currentTime"></span>

</div>-->

    
        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

      
   
    </div>
</header>


<body>

   <h2 class="findstay">For The Stay</h2>
  

   <div class="container0">
    
    <div class="form-box">

      <h2>Find a stay</h2>

      <p>All fields are required unless marked optional.</p><br>

      <label for="confirmation">Confirmation #</label>
      <input type="text" id="confirmation" placeholder="Enter Confirmation Number">
      
      <label for="last-name">Last Name</label>
      <input type="text" id="last-name" placeholder="Enter Last Name">
      
      <label for="arrival-date">Arrival Date</label>
      <input type="date" id="arrival-date">
      
      <button type="submit">Find It</button>
      
      <div class="help-text">

        <p>If you don't know your confirmation number or need help finding your reservation, 
          feel free to call us at <strong>+94 91 5555 825</strong>.</p>

      </div>

    </div>
  
   
    <div class="form-box">

      <h2>Sign in to see your reservations</h2>

      <p>All fields are required.</p><br>
      
      <label for="username">Username#</label>
      <input type="text" id="username" placeholder="Enter Username or Hilton Honors #">
      
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter Password">
      
      <a href="#">Forgot your info?</a>
      
      <button type="submit">Sign In</button>
      
      <p class="small-text">Your information is secure <span>&#128274;</span></p>

    </div>

  </div>



  <script>

                function updateTime() 
                {
                    const now = new Date();
                    
                    const hours = now.getHours().toString().padStart(2, '0');
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    const seconds = now.getSeconds().toString().padStart(2, '0');
                    const currentTime = `${hours}:${minutes}:${seconds}`;
                    
                    
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    const currentDate = now.toLocaleDateString(undefined, options); 
                    
                    
                    document.getElementById('currentTime').textContent = `${currentDate} ${currentTime}`;
                }

                
                setInterval(updateTime, 1000);

                
                updateTime();

</script>
  

  

  

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