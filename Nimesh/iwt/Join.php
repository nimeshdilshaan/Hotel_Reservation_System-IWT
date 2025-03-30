<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/join.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Join </title>
</head>
<header>


    <div class="main">



        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>


    </div>
</header>

<body>


    <center>
        <div class="form-container">


            <form action="./insert.inc.php" method="post">
                <h1
                    style="font-weight: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; font-size: 25px;">
                    Join Famous5</h1>
                <br>
                <fieldset>


                    <p style="text-align: center;">All fields are required unless marked optional </p><br>

                    <div class="name">

                        <div class="inputbox">

                            <label class="details">First Name</label><br>
                            <input id="f_name" class="f_name" type="text" name="f_name" placeholder=" Enter your first name"
                                required>

                        </div>

                        <div class="inputbox">

                            <label class="details">Last Name</label><br>
                            <input id="l_name" type="text" name="l_name" placeholder=" Enter your Last name" required><br>

                        </div>

                        <div class="inputbox">

                            <label class="details">Phone</label><br>
                            <input id="phone" type="tel" name="phone" placeholder=" Enter your phone number" required>

                        </div>

                        <div class="inputbox">

                            <label class="details">Email</label>
                            <input id="email" type="email" name="email" placeholder=" Enter your email" required><br>

                        </div>


                        <div class="inputbox">

                            <label class="details">Country / Region</label>
                            <input id="country" type="text" name="country" placeholder=" Enter your country" required><br>



                            <div class="inputbox">

                                <label class="details">Address</label><br><br>
                                <textarea id="address" name="address" rows="8" cols="50" placeholder=" Enter your address"
                                    required></textarea>



                                <br>

                            </div>


                            <div class="inputbox">

                                <label class="details">Password</label>
                                <input id="pwd" type="password" name="pwd" placeholder=" Enter your password" required>

                            </div>

                            <div class="inputbox">

                                <label class="details">Confirm Password</label>
                                <input id="cnfmpwd" type="password" name="cnfmpwd" placeholder=" Enter your confirm password"
                                    required><br><br>

                            </div>

                        </div>
                        <button class="subs"  type="submit">Join for free</button>

                </fieldset>
            </form>

        </div>


    </center>

    <script src="js/confirmpwd.js"></script>

   

</body>




<footer>
  
    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>

</footer>




</html>