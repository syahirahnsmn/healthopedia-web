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
                    <div class="post-content">
                        <!--<img src="diet.jpg" width="640" height="408" alt="">-->
                        <div class="post-title">
                            <h1><b>Mental health: awareness is great, but action is essential</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Lim Hong Lap</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >15 November 2018</label>
                            <p class="source">Source:<a href="https://www.theguardian.com/science/brain-flapping/2018/may/15/mental-health-awareness-is-great-but-action-is-essential"> https://www.theguardian.com/science/brain-flapping/2018/may/15/mental-health-awareness-is-great-but-action-is-essential</a></p>
                            
                            <img src="img/mhawareness.jpg" width=640 height="408" alt="">

                            <p class="post-preview"> It’s mental health awareness week, 2018. And that’s good. It’s important to be aware of something that affects literally everyone, and that . It’s weird that anyone wouldn’t be when you put it in those terms, but that does seem to the case.
                                <br><br>Perhaps the term is a bit misleading, or not specific enough. It’s not exactly mental health that people need to be made aware of, so much as the fact that mental health can, and regularly does, go wrong. And when someone’s mental health does falter or fail, they should receive 
                                the same concern and help that someone with a more obvious “physical” ailment should get, not scorn and stigma, as often happens.
                                <br><br>This is where awareness helps. If you end up with depression, anxiety, OCD or any other condition, it can be hugely debilitating, often consuming your daily
                                existence. Having someone, be they a family member or total stranger, dismiss it outright or accuse you of “faking it” or similar can only make it worse, compounding the problem.
                                <br><br> This is how campaigns to raise awareness of the issues can be beneficial. Just like how increased exposure to people of different ethnicities or backgrounds has been shown to reduced feelings of prejudice and suspicion, so increased exposure to, or discussions about, mental health problems and what they mean for those who deal with them can 
                                enhance the understanding, or even just the patience, of those who don't have to.
                                <br><br>The human brain, powerful as it is, can still be overwhelmed by the complex world we inhabit, so when it comes to creating mental models of how the world works, it operates a general “stick to what you know” policy. As such, things that are different or unfamiliar, especially if they’re confusing and uncertain or introduce an element of perceived threat or danger, are met with suspicion, doubt, dismissal and so on. All are defence mechanisms, in a way; it’s 
                                the brain saying “this is NOT how the world is meant to work, so I must dismiss this challenging new information”.
                            </p>                       
                        </div>
                    </div>
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