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
                            <h1><b>What Do You Want to Know About Women’s Health?</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By John Cena</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >03 June 2020</label>
                            <p class="source">Source:<a href="https://www.healthline.com/health/womens-health#diet"> https://www.healthline.com/health/womens-health#diet</a></p>
                            
                            <h2>Women’s health</h2>
                            <p class="post-preview"> Healthy habits are the best way to avoid disease, prolong your life, and live more happily. But in the chaos of a woman’s daily life, healthy living may take back seat 
                                to chores, work, busy schedules, and more. Take these simple steps toward a longer, healthier life.
                            </p>   

                            <h2>Get moving</h2>                           
                            <p class="post-preview"> Heart disease is the leading cause of death for American women. In the United States, 1 in 4 womenTrusted Source dies from heart disease. 
                                Exercise is one of the best ways to prevent heart disease and keep your ticker strong. It’s also beneficial for your mental and bone health.
                                <br><br>Aim for 30 minutes of movement at least four days per week. Aerobic, or cardio, exercise is best. This includes:
                                <ul>
                                    <li>walking</li>
                                    <li>jogging</li>
                                    <li>dancing</li>
                                    <li>swimming</li>
                                </ul>
                            </p> 

                            <p class="post-preview"> Mix routines up and keep your exercise plans exciting by trying different activities. Invite a friend to join you for accountability and encouragement.
                                <br><br> Cardio alone isn’t enough for optimal health and fitness. You should combine it with some type of strength training. Strength training builds muscle, boosts metabolism, and helps you maintain stronger 
                                bones. This is especially important in postmenopausal women.
                            </p> 

                            <h2>Eat a balanced diet</h2>
                            <p class="post-preview"> A nourishing diet is the foundation of a healthy lifestyle. Beyond weight loss and maintenance, eating a balanced diet is crucial to a woman’s overall 
                                health. Good foods provide vitamins, minerals, and nutrients that are important for growth, well-being, and development.
                                <br><br>Eating a balanced diet starts with avoiding unhealthy foods. Packaged and processed foods are often full of sugar, salt, unhealthy fats, and calories. Avoid the fake 
                                stuff, and opt for the good stuff, such as:
                                <ul>
                                    <li>fresh fruits and vegetables</li>
                                    <li>whole grains</li>
                                    <li>fiber-rich foods such as beans and leafy greens</li>
                                    <li>fresh fish</li>
                                    <li>lean cuts of meat and poultry</li>
                                    <li>healthy fats such as nuts, seeds, and olive oil</li>
                                    <li>low-fat dairy</li>
                                </ul>
                            </p> 

                            <p class="post-preview"> Here’s a grocery shopping tip: Shop the perimeter of the store. This is where you’ll find fresh foods. Try to avoid the inside aisles, where most of the boxed and processed foods reside.
                                <br><br>Also, be sure to make a list and stick to it, and don’t shop hungry. You’re more likely to make unhealthy choices and pick up foods you don’t need when your tummy is rumbling.
                                <br><br>Additionally, a balanced diet is a cornerstone of weight loss. Carrying around extra weight can increase your risk of several conditions, including cancer, diabetes, and heart disease. These 26 evidence-based 
                                weight loss tips may help you shed pounds once and for all.
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