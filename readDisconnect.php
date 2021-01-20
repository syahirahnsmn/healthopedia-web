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
                            <h1><b>If You've Woken up Feeling Disconnected Today, Here's 8 Things Experts Want You to Know</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Dylan Sprouse</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >30 December 2015</label>
                            <p class="source">Source:<a href="https://www.womenshealthmag.com/uk/health/a35065455/new-years-day-loneliness/"> https://www.womenshealthmag.com/uk/health/a35065455/new-years-day-loneliness/</a></p>
                            <p class="post-preview"> You made it to 2021. That, in and of itself, is cause for celebration. But, needless to say, this dawning of the new year is a little different to most.
                                While there is hope on the horizon that we'll all be inoculated from the virus over the coming months (we see you, Oxford vaccine scientists), you might be feeling somewhat disconnected, today – the prospect of further reams of time separated from the people you love and a haze of terrifying headlines can certainly achieve that effect.
                                <br><br>Naturally, this could have been true any time over the past year. According to research conducted by Women's Health of you, our readers, 79% feel lonelier now, than you did before the pandemic. That stat rises to 87% for single people.
                                So, where to find some sort of balm, if you need one? As part of WH's latest campaign, The Loneliness Remedy, we've been speaking to a collection of the country's wisest mental health experts. Here, curated from the advice they've offered up throughout the pandemic, is a list of key points on handling loneliness. Today, treat them as a tonic, to help you wade, again, into strange waters.
                            </p>
                            <hr>
                            <h2><b>1. Don't fall back on habits that hurt you</b></h2>
                            <p class="post-preview"> 'When you feel lonely, your mood drops and it can be easy to fall into unhelpful coping behaviours (like withdrawing from other people, spending too long online, eating foods that don't make us feel good, drinking too much). The most important thing to do is to look after and be kind to yourself,' explains clinical psychologist and author of The Imposter Cure, Dr Jessamy Hibberd.
                                <br><br> Boost your mood by doing the things that make you feel good, and avoiding the things that make you feel bad. Try to set yourself a goal each day to incorporate the small things that bring you pleasure – maybe an hour of Zoom yoga, journalling or listening to a podcast in the bath, or help you relax. <br><br>
                            </p>
                            <h2><b>2. Know what you can control</b></h2>
                            <p class="post-preview"> If you've woken up today feeling out of sorts, take a second to work out what you can do something about – and what you can't. 'Recognising and jotting down the things you can change and influence and those you can’t is                                
                                 worth sticking on your fridge door,' leading psychotherapist and author of This Too Shall Pass, Julia Samuel, details.
                            </p> 
                            <h2><b>3. Reach out to your support network</b></h2>
                            <p class="post-preview"> While we may be physically alone, it is still vital to stay connected to those who care for you. 'It’s important to stay in contact with your loved ones/close people, and those you can lean on, when you need emotional support,' advises therapist and founder of CultureMinds Therapy, Sharnade George.
                                <br><br>Know that your mode of communication counts: There is a distinction between the ways that you connect. Having a phone call, for example, is far more 'socially nutritious' than commenting beneath someone's latest Instagram grid post or firing off a WhatsApp in a group chat.
                                <br><br>‘The gold standard is always meeting face to face, followed by a phone call,’ Jeffrey Hall, Professor of Communication Studies at the University of Kansas, says. 'Video isn’t actually all that fulfilling. Because you expend more energy in setting it up and keeping it going, it isn’t as easy as calling someone for a chat.’ After this is texting and instant messaging and, last, comes social media.
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