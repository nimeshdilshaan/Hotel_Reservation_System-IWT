<?php

$host = 'localhost:4306'; 
$user = 'root'; 
$password = ''; 
$database = 'hotel_reservation_system'; 


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connection successfully";

// Close connection
//$conn->close();
?>
