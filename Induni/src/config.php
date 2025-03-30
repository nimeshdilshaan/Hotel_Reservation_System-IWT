<?php

$servername = "localhost:4306";
$username = "root";
$password = "";
$db="Hotel_reservation_system";




$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
  


?>