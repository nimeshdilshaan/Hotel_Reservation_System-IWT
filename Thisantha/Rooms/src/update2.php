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




$sql3="UPDATE payment_details1 set room_type='$roomtype',first_name='$fname',last_name='$lname',email='$mail',phone='$pn',country='$country',address='$address',zip='$zip',city='$city',card_number='$cn',month='$month',year='$year' WHERE id = '$max_id'";
($con->query($sql3));}




$con->close();

?>
<button type="submit" class="subdet" style="margin-left: 100px;width:100px ;"><a href="Rooms.php" >Home Page</a></button>
</div>
</body>

<footer>
    <div class="footer-container">
      
  
    <div class="footer-bottom">
      <p>©2024 Famous5. All rights reserved.</p>
    </div>

  </footer>
  



</html>