<?php

require_once('connection.php');
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$username = $email = '';
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $username = $row["username"];
        $password = $row["password"];
        $email = $row["email"];
    }   
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="articlestyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Healthopedia</title>

    </head>
    <body style="background-color:lightblue;">

        <div class="container">
            <div class="navbar">
                <img src="img/logo.jpg" class="logo">
                <nav>
                    <ul>
                        <li><a href="userPage.php">HOME</a></li>
                        <li><a href="Article.php">ARTICLE</a></li>
                        <li><a href="#">FORUM</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                    <button class="dropbtn">Hi, <?php echo $username;?></button>
                            <div class="dropdown-content">
                              <a href="Workout.php">Workout Progress</a>
                              <a href="Moodtracker.php">Mood Tracker</a>
                              <a href="logout.php">Log Out</a>
                        </div>
                      </div> 

        <!--RECENT POSTS-->
        <section class="container">
            <div class="content">
                <div class="posts">
                    <h2>Recent Post</h2>
                    <div class="post-content">
                        <img src="img/men health.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>10 Health Tips for Men of Any Age</b></a>
                            <p> If you’re like most men, you probably have a career plan and a retirement plan. And maybe even a plan for starting or providing for your family. But do you have a plan for keeping yourself healthy? While some health issues are beyond your control, there are several ways you can keep your mind and body strong and healthy. Here are tips for protecting your health at any age. Start your healthy living plan today!</p>
                            <a href="readMenHealth.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/disconnected.jpeg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>If You've Woken up Feeling Disconnected Today, Here's 8 Things Experts Want You to Know</b></a>
                            <p>You made it to 2021. That, in and of itself, is cause for celebration. But, needless to say, this dawning of the new year is a little different to most.
                                While there is hope on the horizon that we'll all be inoculated from the virus over the coming months, you might be feeling somewhat disconnected, today – the prospect of further reams of time separated from the people you love and a haze of terrifying headlines can certainly achieve that effect.</p>
                            <a href="readDisconnect.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/double cleansing.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>Is Double Cleansing Truly Worth Your Precious Time?</b></a>
                            <p> Washing the oil, dirt, and dead skin off your face is simultaneously one of the simplest and kindest things you can do for your skin. But that hasn’t stopped the skin-care community from making the cleansing process seem very, very complicated.
                                Whether you’re considering giving double cleansing a try (literally using two different types of cleansers, one after the other) or testing out the myriad varieties of cleansers on the market, it’s easy to feel overwhelmed.</p>
                            <a href="readDoubleCleansing.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/trainer workout.png" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>How Many Days a Week Should You Work Out? Here’s What Trainers Say</b></a>
                            <p>Kicking off a regular workout routine requires both figuring out what to do and also when to do it—and the latter often means answering the common question: How many days a week should I work out?
                                Of course, the answer can vary from person to person, and takes into account fitness goals, activity level, age, and more. But you can follow some general guidelines to help you plan an optimal weekly workout schedule—one that keeps you consistent with your fitness. Here’s how.
                            </p>
                            <a href="readTrainer.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    
                   <ul class="pagination">
                        <li><a href="Article.php"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li class="pages active"><a href="Article.php">1</a></li>
                        <li class="pages"><a href="secPage.php">2</a></li>
                        <li class="pages"><a href="thirdPage.php">3</a></li>
                        <li><a href="thirdPage.php" class="prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            <li class="list-items">
                                &nbsp;<a href="beautyCategory.php">Beauty</a>                            
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="dietCategory.php">Diet and Nutrition</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="womenCategory.php">Women's Health</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="menCategory.php">Men's Health</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="fitnessCategory.php">Fitness</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="mentalCategory.php">Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Popular Post</h2> 
                        <div class="post-content">
                            <a href="readMenHealth.php"><img src="img/men health.jpg" alt=""></a>
                            <div class="post-title">
                                <a href="readMenHealth.php"><b>10 Health Tips for Men of Any Age</b></a>
                            </div>
                        </div>
                        <div class="post-content">
                           <a href="readDietGuide.php"><img src="img/diet.jpg" alt=""></a>
                            <div class="post-title">
                                <a href="readDietGuide.php"><b>A Guide To Eating A Balanced Diet</b></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <a href="readAcne.php"><img src="img/beauty1.jpg" alt=""></a>
                             <div class="post-title">
                                 <a href="readAcne.php"><b> How To Cover Up Every Type of Acne</b></a>
                             </div>
                    </div>
                    </div>
                </aside>
            </div>
            <!-- Scroll button to allow user automatically goes up -->
            <button onclick="topFunction()" id="btnTop" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
            <script>
                //Get the button
                var topbtn = document.getElementById("btnTop");
                
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    topbtn.style.display = "block";
                  } else {
                    topbtn.style.display = "none";
                  }
                }
                
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
                }
            </script>
        </section>
    </div> 
    </body>
</html>