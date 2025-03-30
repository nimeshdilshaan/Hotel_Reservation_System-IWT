
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="mage\logo\image-removebg-preview2_0.33x.ico">
    <link rel="stylesheet" href="styles/Rooms.css">
    <link rel="stylesheet" href="billdetails.css">
   
    
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

<body >
    <div class="body-container">
    <fieldset>
        <legend style="margin-top:100px;">Payment:</legend>
        <form method="POSt" action="insert.php" class="formdetails" >
          
            <label for="roomtype" class="detailh">Room Type:</label>
            <select id="roomtype" name="roomtype1"  class="dropdownroom">
              <option value="Deluxe suit $200 per night">Deluxe suit $200 per night </option>
              <option value="Business suit $250 per night">Business suit $250 per night</option>
              <option value="Sea view suit $300 per night">Sea view suit $300 per night</option>
              <option value="Twin Superior Room $350 per night">Twin Superior Room $350 per night</option>
              <option value="King Superior Room $220 per night">King Superior Room $220 per night</option>
              <option value="Twin Deluxe Sea View Room $400 per night">Twin Deluxe Sea View Room $400 per night</option>
              <option value="Twin Executive Room $500 per night">Twin Executive Room $500 per night </option>
              <option value="King Executive Room $700 per night">King Executive Room $700 per night</option>
            </select><br>
            <p class="detailh">First name:</p>
            <input type="text" class="debox" name="fname1">
            <p class="detailh">Last name:</p>
            <input type="text" class="debox" name="lname1">
            <p class="detailh">Email:</p>
            <input type="text" class="debox" name="mail1">
            <p class="detailh">Phone:</p>
            <input type="text" class="debox" name="pn1">
            <p class="detailh">Country/Region:</p>
            <input type="text" class="debox" name="country1">
            <p class="detailh">Address:</p>
            <input type="text" class="debox" name="address1">
            <p class="detailh">Zip:</p>
            <input type="text" class="debox" name="zip1">
            <p class="detailh">City:</p>
            <input type="text" class="debox" name="city1">
            <p class="detailh">Card Number:</p>
            <input type="text" class="debox" name="cn1">
          
            <div style="display: flex;gap: 10px;">
            <label for="month" class="detailh" style="width:90px;margin-top: 15px;">Month:</label>
            <select id="month" name="month1" class="debox" style="width:90px;margin-top: 8px;font-weight: 600;">
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
              
            </select>
            <p class="detailh">Year:</p>
            <input type="text" class="debox" style="width:90px;margin-top: 8px;" name="year1">
          </div><br>
          <p class="detailh" style="margin-bottom: 5px;">Special Requests:</p>
            <textarea rows="7" cols="80"> </textarea><br><br>
            <p class="detailh" style="display:none">ID:</p>
            <input type="text" class="debox" name="id" style="display:none">

            

            
            
            


          <br><button type="submit" class="subdet">Book Reservation</button>
          <button type="reset" class="subdet" style="margin-left: 100px;width:100px ;">Reset</button>
        </form>
      
            


    </fieldset>

        
           


        
            


        







    
</div>
</body>

<footer>
   
  
    <div class="footer-bottom">
      <p>©2024 Famous5. All rights reserved.</p>
    </div>

  </footer>
  



</html>