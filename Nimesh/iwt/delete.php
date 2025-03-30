<?php

require 'connection.php';


$sql1 = "SELECT MAX(id) AS max_id FROM users";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $max_id = $row['max_id'];
}



$sql3="DELETE FROM users  WHERE id = '$max_id'";
if($conn->query($sql3))
{
    echo "deleted successfully";
    echo "<script>alert('deleted successfully')</script>";
    echo "<script>window.location.href='./sign in.php'</script>";
}



$conn->close();
?>