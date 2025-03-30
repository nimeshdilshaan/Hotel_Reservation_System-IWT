<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<style>
    table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  border: 1px solid black;
  padding: 10px;
  text-align: left;
  
}

th {
  background-color: #222;
  color:#f2f2f2 ;
  font-weight: bold;
}

td {
  background-color: white;
}

a {
  text-decoration: none;
  color: #ffcc00;
}

a:hover {
  color: #e6b800;
}

.col1 {
  text-align: center;
}

tr:nth-child(even) td {
  background-color: white;
}

tr:hover td {
  background-color: #f1f1f1;
}




</style>


    <link rel="stylesheet" href="styles/Book Now.css">
    <link rel="icon" type="image/jpeg" href="image\logo\image-removebg-preview2_0.33x.ico">
    <script src="js/Book Now.js" defer></script>
    <title>Famous5 | Bookings</title>
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
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>
        
    </div>
</header>



<body>
    <table border="1" width="100%">
        <tr>
            <th class="col1">ID</th>
            <th class="col1">Name</th>
            <th class="col1">Email</th>
            <th class="col1">Check In</th>
            <th class="col1">Check Out</th>
            <th class="col1">Offers</th>
            <th class="col1">Edit</th>
            <th class="col1">Delete</th>
        </tr>
        <?php
     
        $sql = "SELECT * FROM book";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                echo "<tr>
                    <td>{$row['Book_id']}</td>
                    <td>{$row['Book_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['check_in']}</td>
                    <td>{$row['check_out']}</td>
                    <td>{$row['offers']}</td>
                    <td><a href='editrecord.php?id={$row['Book_id']}&name={$row['Book_name']}&email={$row['email']}&check_in={$row['check_in']}&check_out={$row['check_out']}'>Edit</a></td>
                    <td><a href='deleteBook.php?id={$row['Book_id']}'>Delete</a></td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No bookings available</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>

<footer style="margin-top:500px;">
    <div class="footer-bottom" >
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
