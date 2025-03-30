<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Manage Reservations</title>
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
    <div class="reservation-sectionadmin">
        <h2>Recent Reservations</h2>

        <table style="margin-bottom:500px">
            <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Guest Name</th>
                    <th>Room Type</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                include 'db connection.php';

           
                $sql = "SELECT * FROM reservations ORDER BY check_in DESC LIMIT 5";
                $result = $conn->query($sql);

                
                if ($result->num_rows > 0) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo '<tr>';
                        echo '<td>' . $row['reservation_id'] . '</td>';
                        echo '<td>' . $row['guest_name'] . '</td>';
                        echo '<td>' . $row['room_type'] . '</td>';
                        echo '<td>' . $row['check_in'] . '</td>';
                        echo '<td>' . $row['check_out'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                        echo '<td>';

                       
                        if ($row['status'] !== 'Confirmed') 
                        {
                            echo '<form action="confirmed.php" method="POST">';
                            echo '<input type="hidden" name="reservation_id" value="' . $row['reservation_id'] . '">';
                            echo '<button type="submit" name="confirm" class="confirm-button">Confirm</button>';
                            echo '</form>';
                        }

                         else 
                         {
                            echo 'Confirmed';
                         }

                        echo '</td>';
                        echo '</tr>';
                    }
                } 

                else 
                {
                    echo '<tr><td colspan="7">No recent reservations available.</td></tr>';
                }

                $conn->close();
                ?>
                
            </tbody>
        </table>
    </div>
</body>

<footer>
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
