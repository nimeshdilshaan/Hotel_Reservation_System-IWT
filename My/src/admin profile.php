<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Admin</title>

    
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

                document.getElementById("language").addEventListener("change", function() 
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
    <div class="sidebaradmin">
        <a href="admin profile.php">Dashboard</a>
        <a href="reservation.php">Reservations</a>
        <a href="room manage.php">Rooms & Payment Details</a>
        <a href="../../shashini/manageDining.php">Dining</a>
        <a href="user manage.php">Users</a>
        <a href="../../Induni/src/index.php">Special Offers</a>
        <a href="#">Settings</a>
        <a href="manage faq.php">FAQs</a>
        <a href="admin log in portal.php">Logout</a>
    </div>

    <div class="containeradmin">
        <div class="profile-sectionadmin">

        <div class="time">

            <span id="currentTime"></span>

        </div>
                    
   

        <?php
        include 'db connection.php'; 
        $sql = "SELECT * FROM admin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc())
             {
                echo "<div class='profile-pictureadmin'>";
                
                echo "<img src='" . $row['profile_image'] . "' alt='Profile Image' id='profile-pictureadmin-img'><br><br>";
                
                echo "</div>";

                echo "<div class='profile-infoadmin'>";
                echo "<strong>ID:</strong> " . $row['id']. "<br>";
                echo "<strong>Name:</strong> " . $row['full_name']. "<br>";
                echo "<strong>Email:</strong> " . $row['email'] . "<br>";
                echo "<strong>Phone:</strong> " . $row['phone'] . "<br>";
                echo "<strong>Role:</strong> " ."Administrator". "<br>";
                echo "</div>";
             
            }
        } 
        else 
        {
            echo "No users found.";
        }

        $conn->close();
        ?>

        


            

            <div class="actionsadmin">
                <button onclick="window.location.href='edit profile main.php'">Edit Profile</button>
                <button>Change Password</button>
                <button onclick="window.location.href='admin log in portal.php'">Logout</button>
            </div>
        </div>

        <div class="notifications-sectionadmin">
            <h2>Notifications</h2>
            <?php
          

            include 'db connection.php';
            $sql = "SELECT * FROM notifications WHERE admin_id = 1 ORDER BY created_at DESC LIMIT 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['message'] . '<br>';
                }
            } else {
                echo 'No new notifications.';
            }
            $conn->close();
            ?>
        </div>

        <div class="stats-sectionadmin">
            <h2>Hotel Statistics</h2>
            <p><strong>Total Reservations:</strong> 120</p>
            <p><strong>Active Guests:</strong> 58</p>
            <p><strong>Available Rooms:</strong> 15</p>
        </div>

        <div class="reservation-sectionadmin">
            <h2>Recent Reservations</h2>

            <table>
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>Guest Name</th>
                        <th>Room Type</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // reservations
                    include 'db connection.php';
                    $sql = "SELECT * FROM reservations ORDER BY check_in DESC LIMIT 5";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['reservation_id'] . '</td>';
                            echo '<td>' . $row['guest_name'] . '</td>';
                            echo '<td>' . $row['room_type'] . '</td>';
                            echo '<td>' . $row['check_in'] . '</td>';
                            echo '<td>' . $row['check_out'] . '</td>';
                            echo '<td>' . $row['status'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="6">No recent reservations available.</td></tr>';
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <div class="activity-sectionadmin">
            <h2>Admin Activity Log</h2>

            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Action</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    // activity log
                    include 'db connection.php';
                    $sql = "SELECT * FROM admin_logs ORDER BY action_date DESC LIMIT 5";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        while ($row = $result->fetch_assoc()) 
                        {
                            echo '<tr>';
                            echo '<td>' . $row['action_date'] . '</td>';
                            echo '<td>' . $row['action'] . '</td>';
                            echo '<td>' . $row['details'] . '</td>';
                            echo '</tr>';
                        }
                    } 
                    
                    else 
                    {
                        echo '<tr><td colspan="3">No recent activity available.</td></tr>';
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <script>

                function updateTime() {
                    const now = new Date();
                    
                    const hours = now.getHours().toString().padStart(2, '0');
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    const seconds = now.getSeconds().toString().padStart(2, '0');
                    const currentTime = `${hours}:${minutes}:${seconds}`;
                    
                    
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    const currentDate = now.toLocaleDateString(undefined, options); 
                    
                    
                    document.getElementById('currentTime').textContent = `${currentDate} ${currentTime}`;
                }

                
                setInterval(updateTime, 1000);

                
                updateTime();

</script>








</body>

<footer>
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
