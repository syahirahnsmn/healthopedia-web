<!DOCTYPE html>
<html>
    <head>
        <title>Healthopedia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="signupstyle.css">
        <link rel="stylesheet" type="text/css" href="navbarstyle.css">
    </head>
    <body>

        <div class="container">
            <div class="navbar">
                <img src="img/logo.jpg" class="logo">
                <nav>
                    <ul>
                        <li><a href="main.php">HOME</a></li>
                        <li><a href="GArticle.php">ARTICLE</a></li>
                        <li><a href="#">FORUM</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                <button class="dropbtn">Login</button>
                    <div class="dropdown-content">
                      <a href="loginAdmin.php">Admin</a>
                      <a href="loginUser.php">Member</a>
                    </div>
                  </div>                  
            </div>

        <div class="sign-up-form">
            <img src="img/icon.png">
            <h1>Sign Up Here</h1>
            <form action="registerAdmin.php" method="POST">
                <input type="username" name="username"  class="input-box" placeholder="Username">
                <input type="password" name="password" class="input-box" placeholder="Password">
                <input type="email" name="email" class="input-box" placeholder="Email">
                <p><span><input type="checkbox"></span>I agree to the term of service</p>
                <input type="submit" name="button" value="Sign Up">
                <p>Do you have an account?<a href="loginAdmin.php"> Sign in</a></p>
            </form>
        </div>
    </body>
</html>