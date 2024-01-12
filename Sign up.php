<html>
    <head>
          <title>SIGN IN</title>
          <link rel="stylesheet" href="Signin.css">
          <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    
        <div class="banner">
            <div class="navbar">
                <img src="LOGO.svg" class="LOGO">
            </div>
    <body>
        <div class="body">
            <div class="wrappers">
                <form action="connect.php" method="post">
                    <h1>Sign Up</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username"
                        required name="Username">
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Email"
                        required name="Email">
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <input type="password"
                        placeholder="Password" required name="Password">
                        <i class='bx bxs-lock-alt'></i>
                    </div>
    
                    <div class="remember-forgot">
                        <label><input type="checkbox"> I agree to the terms & conditions
                        </label>
                    </div>
    
                    <button type="submit" class="btn">Register</button>
    
                    <div class="Login-link">
                        <p>Already have an account? <a href="Sign in.php">Login</a></p>
                    </div>
                </form>
            </div>      
            </div>
 
    </body>
</div>
</html>