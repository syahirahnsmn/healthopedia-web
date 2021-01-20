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
    <body style="background-color: lightblue;">
    
        <div class="container">
        <div class="navbar">
            <img src="img/logo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="userpage.php">HOME</a></li>
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
                        <img src="img/diet.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>A Guide To Eating A Balanced Diet</b></a>
                            <p> A balanced diet includes foods from five groups and fulfills all of a person’s nutritional needs. Eating a balanced diet helps people maintain good health and reduce their risk of disease.
                                Dietary guidelines evolve with scientific advances, so it can be challenging to stay on top of current recommendations and know what to eat.
                                In this article, we look at current dietary recommendations and describe how to build a balanced diet.
                            </p>
                            <a href="readDietGuide.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/beauty1.jpg" alt="">
                        <div class="post-title">
                            <a><b>How To Cover Up Every Type of Acne</b></a>
                            <p> You've been doing everything right with your skincare routine. Cleansing, toning, moisturizing, treating...and yet, the worst uninvited guest still comes out of nowhere: a breakout. 
                                While you're not going to see anyone IRL soon, your calendar is still packed with virtual get-togethers where your new friend will be on display. And, as helpful as it may be to set up a teledermatology appointment, your doc can't reach through FaceTime to give you an emergency cortisone shot to kill the zit. Here's where makeup comes in.
                            </p>
                            <a href="readAcne.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/fitness1.jpg" alt="">
                        <div class="post-title">
                            <a><b>30-Day Fitness Challenge Will Sculpt Your Body From Head To Toe</b></a>
                            <p> I've heard a lot of excuses about why people can't start or maintain a fitness routine in my years as a certified personal trainer and founder of Le Sweat. I don't have access to a gym. I don't have enough time. I wouldn't know where to start. 
                                And I get it. Those are all very real concerns. That's why I designed this 30-day fitness challenge complete with follow-along videos you can access via the All/Out Studio fitness app.
                            </p>
                            <a href="readfitnessChallenge.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content">
                        <img src="img/anxiety.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>Everything You Need to Know About Anxiety</b></a>
                            <p> Anxiety is your body’s natural response to stress. It’s a feeling of fear or apprehension about what’s to come. The first day of school, going to a job interview, or giving a speech may cause most people to feel fearful and nervous.
                                But if your feelings of anxiety are extreme, last for longer than six months, and are interfering with your life, you may have an anxiety disorder.
                            </p>
                            <a href="readAnxiety.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    
                    <ul class="pagination">
                        <li class="pages active"><a href="Article.php">1</a></li>
                        <li class="pages"><a href="secPage.php">2</a></li>
                        <li class="pages"><a href="thirdPage.php">3</a></li>
                        <li><a href="secPage.php" class="prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
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