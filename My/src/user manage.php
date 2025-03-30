<!DOCTYPE html>
<html>

<head>
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
    <div class="user-data">
        <h2>User Data</h2>
        <table id="userTable" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Address</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                
            
    
            </tbody>
        </table>
    </div>

    <script>
        
        fetch('get_user_data.php')
            .then(response => response.json())
            .then(data => {
                let tableBody = document.querySelector('#userTable tbody');
                data.forEach(user => {
                    let row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${user.id}</td>
                        <td>${user.first_name}</td>
                        <td>${user.last_name}</td>
                        <td>${user.phone}</td>
                        <td>${user.email}</td>
                        <td>${user.country}</td>
                        <td>${user.address}</td>
                        <td><img src="${user.photo}" alt="User Photo" width="50" height="50"></td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>

<footer>
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
