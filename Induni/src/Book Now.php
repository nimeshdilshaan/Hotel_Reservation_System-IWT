<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/Book Now.css">
    <link rel="icon" type="image/jpeg" href="image\logo\image-removebg-preview2_0.33x.ico">
    
    <title>Famous5 | Book-now</title>
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

    <center>

          <div class="body-content">
            <h2>Book Now</h2>
            
            <form  action="completeBook.php" method="POST">
               Full Name:
                <input type="text"  name="field1" required><br/><br/>
                
               Email:
                <input type="email"  name="field2" required><br/><br/>
                
                Check-in:
                <input type="date" name="field3" required><br/><br/>
                
                Check-out:
                <input type="date"  name="field4" required><br/><br/>
                
                Offers:
                <textarea name="field5"  rows="4" required></textarea><br/>
                
                <input type="submit" id="submitBtn" value="Book Now">
            </form>
            </div>
        
    </center>

  
   
        
</body>

<footer>
    
  
    <div class="footer-bottom">
      <p>©2024 Famous5. All rights reserved.</p>
    </div>

  </footer>
  



</html>

