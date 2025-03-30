<?php


require_once "connection.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      //  echo "<div class='user-profile'>";
       // echo "<h2>" . $row["first_name"] . "</h2>";
      //  echo "<p>" . $row["email"] . "</p>";
     //   echo "</div>";
    $username = $row["first_name"];
    $username2 = $row["last_name"];
    $email = $row["email"];
    $country = $row["country"];




    }
    
} else {
    echo "0 results";
}
$conn->close();

?>