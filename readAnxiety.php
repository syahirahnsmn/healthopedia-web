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
                        <div class="post-title">
                            <h1><b>Everything You Need to Know About Anxiety</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Aleesa B.C</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >13 November 1998</label>
                            <p class="source">Source:<a href="https://www.healthline.com/health/anxiety#disorders"> https://www.healthline.com/health/anxiety#disorders</a></p>
                            <img src="img/anxiety.jpg" width=640 height="408" alt="">
                            <p class="post-preview"> Anxiety is your body’s natural response to stress. It’s a feeling of fear or apprehension about what’s to come. The first day of school, going to a job interview, 
                                or giving a speech may cause most people to feel fearful and nervous. <br><br>But if your feelings of anxiety are extreme, last for longer than six months, and are interfering with your life, you may have an anxiety disorder.
                            </p>
                            <h2>What are anxiety disorders?</h2>
                            <p class="post-preview"> It’s normal to feel anxious about moving to a new place, starting a new job, or taking a test. This type of anxiety is unpleasant, but it may motivate you to work harder and to do a better job. Ordinary anxiety is a feeling that 
                                comes and goes, but does not interfere with your everyday life. <br><br> In the case of an anxiety disorder, the feeling of fear may be with you all the time. It is intense and sometimes debilitating.
                                <br><br>This type of anxiety may cause you to stop doing things you enjoy. In extreme cases, it may prevent you from entering an elevator, crossing the street, or even leaving your home. If left untreated, the anxiety will keep getting worse.
                                <br><br>Anxiety disorders are the most common form of emotional disorder and can affect anyone at any age. According to the American Psychiatric Association, women are more likely than men to be diagnosed with an anxiety disorder.
                            </p>
                            <h2>What are the types of anxiety disorders?</h2>
                            <p class="post-preview"> Anxiety is a key part of several different disorders. These include:
                                <ul>
                                    <li>panic disorder: experiencing recurring panic attacks at unexpected times. 
                                        A person with panic disorder may live in fear of the next panic attack.</li>
                                    <li>phobia: excessive fear of a specific object, situation, or activity</li>
                                    <li>social anxiety disorder: extreme fear of being judged by others in social situations</li>
                                    <li>obsessive-compulsive disorder: recurring irrational thoughts that lead you to perform specific, repeated behaviors</li>
                                    <li>separation anxiety disorder: fear of being away from home or loved ones</li>
                                    <li>illness anxiety disorder: anxiety about your health (formerly called hypochondria)</li>
                                    <li>post-traumatic stress disorder (PTSD): anxiety following a traumatic event</li>
                                </ul>
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