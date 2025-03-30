<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Manage Users</title>
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
            <script>
                document.getElementById("language").addEventListener("change", function () 
                {
                    let selectedLang = this.value;
                    alert("Language changed to: " + selectedLang);
                });
            </script>
        </div>

        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>
    </div>
</header>

<body>
    <div class="container" style="margin-top:50px;">
        <h1 style="left:250px;">Rooms & Payment Details</h1>
        <table border="1"style="margin-top:50px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Type</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Address</th>
                    <th>Zip</th>
                    <th>City</th>
                    <th>Card Number</th>
                    <th>Month</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $servername = "localhost:4306";
                $username = "root";
                $password = "";
                $dbname = "Hotel_reservation_system";

              
                $conn = new mysqli($servername, $username, $password, $dbname);

                
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }

               
                $sql = "SELECT * FROM payment_details1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                  
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['room_type'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['country'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['zip'] . "</td>";
                        echo "<td>" . $row['city'] . "</td>";
                        echo "<td>" . $row['card_number'] . "</td>";
                        echo "<td>" . $row['month'] . "</td>";
                        echo "<td>" . $row['year'] . "</td>";
                        echo "</tr>";
                    }

                }

                else 
                {
                    echo "<tr><td colspan='13'>No data found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

<footer style="margin-top:500px;">
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
