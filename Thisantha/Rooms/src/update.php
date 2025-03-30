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
    <form action="update2.php" method="POST"   >
    <table style="border:1" class="distab">
    <tr>
    <td> Room Type:</td>
        <td>  <select  name="roomtype1"  class="dropdownroom">
            <option value="Deluxe suit $200 per night">Deluxe suit $200 per night </option>
            <option value="Business suit $250 per night">Business suit $250 per night</option>
            <option value="Sea view suit $300 per night">Sea view suit $300 per night</option>
            <option value="Twin Superior Room $350 per night">Twin Superior Room $350 per night</option>
            <option value="King Superior Room $220 per night">King Superior Room $220 per night</option>
            <option value="Twin Deluxe Sea View Room $400 per night">Twin Deluxe Sea View Room $400 per night</option>
            <option value="Twin Executive Room $500 per night">Twin Executive Room $500 per night </option>
            <option value="King Executive Room $700 per night">King Executive Room $700 per night</option>
          </select>
  </td>
  
</tr>
        
        <tr style="padding:0px;margin:0px">
        <td>First name</td>
        <td><input type="text"  name="fname1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;" ></td>
        </tr>
       
        <tr style="padding:0px;margin:0px">
        <td>Last name</td>
        <td><input type="text"  name="lname1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr> 

        

        <tr style="padding:0px;margin:0px">
        <td> Email</td>
        <td><input type="text"  name="mail1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>

        <tr style="padding:0px;margin:0px">
        <td> Phone</td>
        <td><input type="text"  name="pn1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>


        <tr style="padding:0px;margin:0px">
        <td> Country</td>
        <td><input type="text"  name="country1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>

        <tr style="padding:0px;margin:0px">
        <td> Address</td>
        <td><input type="text"  name="address1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>

        <tr style="padding:0px;margin:0px">
        <td> zip code</td>
        <td><input type="text"  name="zip1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>

        <tr style="padding:0px;margin:0px">
        <td>city</td>
        <td><input type="text"  name="city1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>

        <tr style="padding:0px;margin:0px">
        <td>card number</td>
        <td><input type="text"  name="cn1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>


        <tr>
    
            <td><label for="month1" style="padding:0px;margin-left:6px;">Month</label></td>
            <td><select id="month1" name="month1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;">
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
            </td>
</tr>
              
        <tr style="padding:0px;margin:0px">
        <td>Year</td>
        <td><input type="text"  name="year1" style="width:700px;height:50px;margin:0px;font-size:19px;padding:3px;font-weight:500;"></td>
        </tr>
        <td style="display:none">ID:</td>
        <input type="text" name="id" style="display:none">
    

  
       </table>
    
    
       <br><input type="submit" class="subdet" value="Book Reservation" style="margin-left:1000px;"><a href="update2.php"></a></button>
</form>
</div>
</body>


<footer>
    <div class="footer-container">
      
     
    <div class="footer-bottom">
      <p>©2024 Famous5. All rights reserved.</p>
    </div>

  </footer>
  



</html>