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
                            <h1><b>How Many Days a Week Should You Work Out? Here’s What Trainers Say</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Kareena Kapoor</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >28 February 2008</label>
                            <p class="source">Source:<a href="https://www.health.com/fitness/how-many-days-work-out"> https://www.health.com/fitness/how-many-days-work-out</a></p>
                            <!--TO INSERT YOUTUBE VID-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/GHYMYYH1bbk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                            <p class="post-preview"> Kicking off a regular workout routine requires both figuring out what to do and also when to do it—and the latter often means answering the common question: How many days a week should I work out?
                                <br><br> Of course, the answer can vary from person to person, and takes into account fitness goals, activity level, age, and more. But you can follow some general guidelines to help you plan an optimal weekly workout schedule—one that keeps 
                                you consistent with your fitness. Here’s how.
                            </p>

                            <h2><b>How often should I work out—and what do I do?</b></h2>
                            <p class="post-preview">Ideally, if you want to boost your general health and fitness, you want to aim to exercise about five days a week, King Hancock, ACSM-CPT, Sweat 2 Success instructor on NEOU, a fitness streaming service, tells Health. That might sound like a lot, but not every day should be intense, and your workouts can last for as little as 30 minutes.
                                <br><br>How often you work out depends on your experience with fitness snd the time you have available, too. If you're new to exercise, for example, start with a smaller goal. Or if your schedule just doesn’t allow for five days a week, aim for three days and see if you can take 45 minutes for your workout.
                                <br><br>You'll also want to switch up which types of workouts you do on those five days—in that case, it's best to aim for two or three days of cardio and spend the other two or three days on strength training. If you're doing fewer workouts during the week, you can mix strength and cardio on those days (think: a 20-minute jog followed by 25 minutes of weight training). High-intensity interval 
                                training (HIIT) OR circuit workouts can also help cut back on time, while still giving your body a good sweat session, Kristian Flores, CSCS, an NYC-based strength and conditioning coach, tells Health.
                                <br><br>And while it's tempting to believe that different fitness goals depend on different workouts, keep this in mind: whether you have a goal of weight loss or strength-building, it's key to incorporate both cardio and weight or strength training into your workout regimen.
                                <br><br>Ultimately, though, how you schedule your workouts and what you do for those workouts comes down to what you enjoy the most, Flores says. If you hate HIIT, skip it. If you love dancing and biking, go for it. Finding pleasure in your workout will keep you coming back for more sweat and lead to results.
                            </p>

                            <h2><b>What to do for cardio workouts:</b></h2>
                            <p class="post-preview"> The American Heart Association recommends 150 minutes of moderate intensity activity per week (that equates to 30 minutes a day for five days), or 75 minutes of vigorous activity per week for good reason: It helps keep your heart healthy, while helping you fight off other conditions like diabetes. Plus, it helps boost your brain function, mood, and betters your bone health.
                                <br><br>If you’re working out three days a week, aim for your cardio workouts to be more intense, Hancock says. “The greater the intensity, the shorter the duration of the workout,” he says “If you want to work for longer, go at a lower intensity.”
                                <br><br>Exactly what you do for cardio again comes down to what you like doing, Hancock says. Whether that’s dancing, biking, running, climbing, or walking up and down the stairs in your apartment building—they all count as cardio.
                                <br><br>That said, both Hancock and Flores say the most efficient and effective is HIIT or Tabata (working out for 20 seconds, resting for 10, and repeating for eight total rounds), which you can do with or without weights. Because you’re working so hard through HIIT workouts, you can easily get a solid sweat in 25 to 30 minutes. “Most importantly, you want to think about HIIT as 
                                working in spikes of effort that take you to that [uncomfortable] feeling and then giving yourself enough recovery to repeat those efforts,” Hancock says.
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