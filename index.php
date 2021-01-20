<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Healthopedia</title>
        <link rel="stylesheet" href="mainstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
            <div class="row">
                <div class="col">
                    <h1>HEALTHOPEDIA</h1>
                    <p>Welcome to Healthopedia. Healthopedia is a platform that can assists people for take care of their physical and mental health especially during the pandemic of Covid-19.</p>
                    <button type="button"><a href="contact.php">Contact Us</a></button>
                </div>
                <div class="col">
                    <div class="card card1">
                        <h5>Various article available for you!</h5>
                    </div>
                    <div class="card card2">
                        <h5>Post your thoughts and join forum!</h5>
                    </div>
                    <div class="card card3">
                        <h5>Update your workout!</h5>
                    </div>
                    <div class="card card4">
                        <h5>Analyse your mood today!</h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>