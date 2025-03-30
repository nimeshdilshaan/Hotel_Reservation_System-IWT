<?php
$servername = "localhost:4306";
$database = "Hotel_reservation_system";
$username = "root";
$password = "";
 

 
$conn = mysqli_connect($servername, $username, $password, $database);
 

 
if (!$conn) 
{
 
    die("Connection failed: " . mysqli_connect_error());
    
}


?>
