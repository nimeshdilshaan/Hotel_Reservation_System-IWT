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
<body >
    <div style="height:1200px">
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



$sql1="INSERT INTO payment_details1 VALUES ('$roomtype','$fname','$lname','$mail','$pn','$country','$address','$zip','$city','$cn','$month','$year','')"; 

if($con->query($sql1))
{
    $sql2="SELECT room_type,first_name,last_name,email,phone,country,address,zip,city,card_number,month,year FROM payment_details1 ORDER BY id DESC LIMIT 1";
    $result=$con->query($sql2);
    if($result->num_rows>0){

    echo "<table border='1' class='distab'>";
       while($row=$result->fetch_assoc()) 
       {
        
        echo "<tr>";
        echo "<td>Room type</td>";
        echo "<td>".$row["room_type"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>First name</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Last name</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Email</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Phone</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Country</td>";
        echo "<td>".$row["country"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Address</td>";
        echo "<td>".$row["address"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>zip code</td>";
        echo "<td>".$row["zip"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>City</td>";
        echo "<td>".$row["city"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Card number</td>";
        echo "<td>".$row["card_number"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Month</td>";
        echo "<td>".$row["month"]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Year</td>";
        echo "<td>".$row["year"]."</td>";
        echo "</tr>";
        
       }
       echo "</table>";
    }
    else{
        echo "No room data found.";
    }
}
else{
    echo "Error".$con->error;
}


$con->close();

?>
<br><button type="submit" class="subdet" style="margin-left:800px"><a href="success.php">Book Reservation</a></button>
<button type="submit" class="subdet" style="margin-left: 100px;width:100px ;"><a href="update.php">Update</a></button>
<button type="submit" class="subdet" style="margin-left: 100px;width:100px ;"><a href="delete.php">Delete</a></button>

</div>
</body>
<footer>
    <div class="footer-container">
      
      
  
    <div class="footer-bottom">
      <p>©2024 Famous5. All rights reserved.</p>
    </div>

  </footer>
  



</html>