<?php

$host = 'localhost:4306';
$dbname = 'Hotel_reservation_system';  
$username = 'root';  
$password = '';  

try {
   
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    $stmt = $conn->prepare("SELECT id, first_name, last_name, phone, email, country, address, photo FROM users");
    $stmt->execute();

   
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($users);

} 

catch(PDOException $e) 
{
    echo "Error: " . $e->getMessage();
}

?>
