<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famous5 | Location</title>

    <link rel="shortcut icon" href="./image/logo/image-removebg-preview2_0.33x.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/locationStyles.css">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>

    <!-- header -->
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
          <button id="btn3" class="sign"><a href="../../Nimesh/iwt/Sign in.php">Log in <img src="image/icon/user png.png" alt="user icon" width="12" height="12" style="margin-left: 5px;"></a> </button> 
        </div>

      <div class="logo">
        <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
      </div>

      <div class="navi" >
          <ul id="menubar">
              <li><a href="../../Nimesh/iwt/index.php">Home</a></li>
              <li><a href="../../Thisantha\Rooms\src\Rooms.php#">Rooms</a></li>
              <li><a href="../../Thisantha/Rooms/Hotel info/main.php">Hotel Info</a></li>
              <li><a href="../../Induni/src/offer.php">Offers</a></li>
              <li><a href="../../Induni/src/Gallery.php">Gallery</a></li>
              <li><a href="location.php">Location</a></li>
              <li><a href="dining.php">Dining</a></li>
              <li><a href="../../My/src/events.php">Events</a></li>
          </ul>
      </div>  
    </div>
  </header>

    <div class="frame">

        <div class="content">

            <div id="cardContainer" class="mini_frame">
                
                <!-- <div class="box">
                    <h3></h3>
                    <p></p>
                    <div class="list_frame">
                        <div class="row">
                            <div class="data">
                                <p></p>
                            </div>
                            <div class="data">
                                <p></p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

            <div class="mini_frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.3073866542404!2d-73.17594122432507!3d41.2150714066665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e80c1b1d70cc63%3A0x90b8e5e788d69baf!2sFamous%2050&#39;s%20Diner!5e0!3m2!1sen!2slk!4v1727600699834!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

    <!-- footer -->
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
    
    <script>

        let cards = [
            {title: 'Parking', para: "We've added more detailed options for parking with specifics about rates and availability", list: [
                {topic: 'Main Street Parking Lot', distance: '0.5 miles', detail: '$2/hour', intro: 'Open 24/7'},
                {topic: 'Central Garage', distance: '0.8 miles', detail: '$1.50/hour', intro: 'Weekdays 6 AM - 10 PM'},
                {topic: 'West Side Lot', distance: '1 mile', detail: '$10/day flat rate', intro: 'Overnight available'},
                {topic: 'East Plaza Parking', distance: '0.6 miles', detail: 'Free after 6 PM', intro: 'Limited spaces'},
                {topic: 'Riverside Parking Deck', distance: '0.9 miles', detail: '$3/hour', intro: 'Covered parking'},
                {topic: '24-Hour Parking', distance: '1.2 miles', detail: '$5 flat rate', intro: 'Easy access to public transport'},
            ]},
            {title: 'Transport', para: "Whether you're using public transportation or a ride-share, there are plenty of options", list: [
                {topic: 'Colombo Bus Station', distance: '0.2 miles', detail: '', intro: 'Major bus lines available'},
                {topic: 'Metro Line 1 - Downtown Station', distance: '0.4 miles', detail: '', intro: 'Direct access to the city center'},
                {topic: 'Central Train Station', distance: '0.7 miles', detail: '', intro: 'Regular service to all major suburbs'},
                {topic: 'Taxi Service Hub', distance: '24/7 availability', detail: '', intro: 'Near the metro station'},
                {topic: 'Bike Rental', distance: '0.3 miles', detail: '', intro: 'Hourly and daily rentals'},
                {topic: 'Ride-Share Zone', distance: '0.2 miles', detail: '', intro: 'Dedicated Uber/Lyft pickup'},
            ]},
            {title: 'Nearby', para: "Explore the surrounding area with these local gems within walking distance", list: [
                {topic: 'City Museum', distance: '0.3 miles', detail: 'Open daily 9 AM - 5 PM', intro: 'Rich history of Colombo'},
                {topic: 'Famous Harbor', distance: '0.6 miles', detail: '', intro: 'Scenic walking routes along the waterfront'},
                {topic: 'Botanical Gardens', distance: '1 mile', detail: 'Free entry', intro: 'Perfect for a relaxing stroll'},
                {topic: 'Art Gallery', distance: '1.2 miles', detail: 'Rotating exhibitions', intro: 'Open until 7 PM on weekends'},
                {topic: 'Shopping District', distance: '0.4 miles', detail: '', intro: 'Local boutiques and global brands'},
                {topic: 'Ocean View Point', distance: '0.5 miles', detail: '', intro: 'Popular for sunset views'},
            ]}
        ];

        function addCards (content, frame) {
            let cards = [];

            content.forEach(element => {
                let card = '';
                card += `
                <div class="box">
                    <h3>${element.title}</h3>
                    <p>${element.para}</p>
                    <div class="list_frame">
                `;

                element.list.forEach(data => {
                    card += `
                        <div class="row">
                            <div class="data">
                                <p>${data.topic}</p>
                            </div>
                            <div class="data">
                                <p>${data.distance}</p>
                                <p>${data.detail}</p>
                                <p>${data.intro}</p>
                            </div>
                        </div>
                    `;
                });

                card +=` 
                    </div>
                </div>
                `; 

                cards.push(card);

            });

            document.getElementById(frame).innerHTML = cards.join('');
        }

        addCards (cards, 'cardContainer');

    </script>
    
</body>
</html>