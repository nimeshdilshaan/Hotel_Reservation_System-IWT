<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpeg" href="src/image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Manage Dining</title>
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
                document.getElementById("language").addEventListener("change", function () {
                    let selectedLang = this.value;
                    alert("Language changed to: " + selectedLang);
                });
            </script>
        </div>
        <div class="logo">
            <img src="src\image\logo\image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>
    </div>
</header>

<body>

    <div class="faqpart">
        <h2>Manage Dining</h2>
    </div>

    <div class="faq-admin-container">
        <h2>Add or Edit Dining Option</h2>

       
        <form action="process_dining.php" method="POST">

            <input type="hidden" name="dining_id" id="dining_id">

            <label for="title">Dining Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" required></textarea>

            <button type="submit" name="save_dining">Save Dining Option</button>
        </form>

        <h2>Existing Dining Options</h2>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("manage_dining.php"); 
                ?>
            </tbody>
        </table>
    </div>

    <script>

        function editDining(id, title, description) 
        {
            document.getElementById('dining_id').value = id;
            document.getElementById('title').value = title;
            document.getElementById('description').value = description;
        }

    </script>


    

</body>

<footer>
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>
</footer>

</html>
