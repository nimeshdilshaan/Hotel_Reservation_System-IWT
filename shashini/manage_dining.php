<?php

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "Hotel_reservation_system"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM dining";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>
            <form action='process_dining.php' method='POST' style='display:inline;'>
                <input type='hidden' name='dining_id' value='" . $row['id'] . "'>
                <button type='submit' name='delete_dining' style='margin-bottom:10px'>Delete</button>
            </form>
            <button onclick=\"editDining('" . $row['id'] . "', '" . $row['title'] . "', '" . $row['description'] . "')\"   >Edit</button>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No dining options available.</td></tr>";
}

$conn->close();
?>
