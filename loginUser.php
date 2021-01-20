<!DOCTYPE html>
<html>
    <head>
        <title>Healthopedia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="loginstyle.css">
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

        <div class="loginbox">
            <img src="img/icon.png" class="avatar">
            <h1>Login Here</h1>
            <form method="POST" action="signinUser.php">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="button" value="Login">
                <p1>Forgot password?</p1><br>
                <p2>Not a member?<a href="signupUser.php"> Sign Up</a></p2>
            </form>

        </div>
    </body>
</html>