<!DOCTYPE html>
<html lang="en">

<head>
   <script src="edit profile.js">  </script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Edit Profile</title>
    
 
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
    <div class="profile-edit-section">
        <h2>Edit Profile</h2>

        <form id="editProfileForm" action="profile.php" method="POST" enctype="multipart/form-data">
  

    <label for="id">Admin ID:</label>
    <input type="id" id="admin_id" name="admin_id" value="#1" required>

    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" value="Ayesh" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="admin@hotel.com" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="+94 91 5555 825" required>

    <label for="profileImageInput">Change Profile Image:</label>
    <input type="file" id="profileImageInput" name="profileImage">
    
    <center>
        <img id="profileImagePreview" src="image/icon/user png.png" alt="Profile Image Preview" style="width: 100px; height: 100px;">
    </center>

    <button type="submit">Save Changes</button>

    <!--

    <script>


            document.getElementById("editProfileForm").addEventListener("submit", function(event) 
            {
                
                event.preventDefault(); 

                
                alert("Form submitted successfully!");

             
            });

    </script>

        -->


    
</form>

    </div>
</body>

<footer>
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
