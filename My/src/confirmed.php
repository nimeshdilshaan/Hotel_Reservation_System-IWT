<?php

include 'db connection.php';

if (isset($_POST['confirm'])) 
{
   
    $reservation_id = $_POST['reservation_id'];

  
    $sql = "UPDATE reservations SET status='Confirmed' WHERE reservation_id='$reservation_id'";

    if ($conn->query($sql) === TRUE) 
    {
       
        header("Location:reservation.php?status=confirmed");
    } 
    else 
    {
      
        header("Location:reservation.php?status=error");
    }

   
    $conn->close();
}
?>
