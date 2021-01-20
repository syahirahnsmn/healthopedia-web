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
                        <img src="img/easy workout.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>The 15 Best Quick and Easy At-Home Workout Moves</b></a>
                            <p> Living rooms are more about vegging out than doing complex cardio moves or lifting weights. But these days, the world is upside down, and the living room is the new home gym. Everyone needs workouts to do at home — easy at-home workouts that require little equipment, little space, and little furniture-shaking. So, if you want to get a home workout routine that is simple, easy, and good, you’ve come to the right place.
                            </p>
                            <a href="readEasyWorkout.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
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