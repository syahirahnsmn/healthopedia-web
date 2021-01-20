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
                            <h1><b>The 15 Best Quick and Easy At-Home Workout Moves</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Hannah Montana</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >19 July 2010</label>
                            <p class="source">Source:<a href="https://www.fatherly.com/health-science/easy-workout-quick-workout/"> https://www.fatherly.com/health-science/easy-workout-quick-workout/</a></p>
                            
                            <img src="img/ezworkout.jpg" width="630" height="390" alt="">

                            <p class="post-preview"><br> Living rooms are more about vegging out than doing complex cardio moves or lifting weights. But these days, the world is upside down, and the living room is the new home gym. 
                                Everyone needs workouts to do at home — easy at-home workouts that require little equipment, little space, and little furniture-shaking. So, if you want to get a home workout routine that is simple, 
                                easy, and good, you’ve come to the right place.
                                <br><br>We’ve got a few effective, simple exercises to do at home on this list. These high-intensity workouts are not just good, basic home workouts — they’re also extremely doable, with simple exercises 
                                that make simple workouts attainable with little time, equipment, or space. <br><br>The first step for at-home workout success is to find a space and keep it clean. Make it a refuge for your quick at-home 
                                workout. Then, find bodyweight moves that are familiar, effective, and work in a small space. This makes the living room workout more likely to get started in the first place —  and that’s half the battle.
                                <br><br>We’ve put together an easy at-home workout comprised of 15 strength and cardio moves that can be performed in your living room, in less than 30 minutes, making it a great 
                                quick at-home workout. Together, the workout will tone your weak spots, get your blood flowing and heart pumping, and allow you to supervise (at least in theory) your kids nearby while you’re 
                                at it. String together the following in an order of your choosing and keep at it.
                            </p>   

                            <h2>Core Home Workout Moves</h2>                           
                            <p class="post-preview"> <b>Sit-Ups.</b> Basic, but effective. Aim for 20 to start, and work your way up to 50 once you’re a pro. Do not tuck your feet under a chair or 
                                table for assistance, to get the maximum effect.
                                <br><br><b>Crunches.</b> These bite-sized versions of the whole enchilada isolate smaller, deeper abdominal muscles in their motion. Shoot for three sets of 20.
                               <br><br><b>Bicycles.</b> Lie on your back feet in the air, knees bent. Place your hands behind your head. Begin pumping your legs in the classic bicycle motion, vigorously, for one minute.
                                <br><br><b>Planks.</b> Hands down the best overall bodyweight toning move you can do. Rest on your elbows and toes, keeping your back and legs straight. Hold for one minute.
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