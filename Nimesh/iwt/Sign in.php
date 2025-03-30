

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/sign.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    
    <title>User Log in Famous5</title>

</head>
<header>


    <div class="main">



        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200">
        </div>


    </div>

</header>

<body>

    <div class="signin-container">

        <div class="box">

            <h1>Welcome to Famous5!</h1>

            
            <form action="log.inc.php" method="POST" >
            
                <label>Username</label>
                <input name="mail" type="email" placeholder="sample@gmail.com" required>
                
                <label>Password</label>
                <input name="pwd" type="password" placeholder="Enter your password" required> 
                
                <div class="remender-forgot">
                    <div class="remember">
                        <input type="checkbox">
                        <label>Remember Me</label>  
                    </div>    
                    <a href="####" class="forgot-password">Forgot Password?</a>   
                </div>
                
                <button type="submit" class="login-button" name="login" >Login</button>
                
                <div class="or">OR</div>
                
                <button type="button" class="google-button">
                    <img src="image/icon/google.png" alt="Google Logo" ><a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&hl=en&ifkv=ARpgrqevJvvp4HhRc9EK_jmzquBMaU9YVrUXTiW3nUyzoz0crOp1BZLdOtP2I8sndNuPWeDqR2QdoA&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1915503126%3A1727996676404845&ddm=0" class="googlebtn">Sign in with Google</a>
                </button>
            </form>

            <h3 class="signup">Don't have an account? <a href="./join.php">signup</a></h3>

        </div>
    </div>


    

</body>




<footer>
   

    <div class="footer-bottom">
        <p>©2024 Famous5. All rights reserved.</p>
    </div>

</footer>




</html>