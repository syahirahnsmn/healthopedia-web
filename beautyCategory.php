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
                    <h2>Beauty <br></h2>
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
                        <img src="img/skin guide.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>A Guide to Taking Care of Your Skin</b></a>
                            <p> You may suspect you have dry, oily, or sensitive skin, but do you really know your skin type? Knowing your true skin type can help the next time you’re in the cosmetics aisle. In fact, using the wrong products — or even popularized Internet hacks — for your skin type could worsen acne, dryness, or other skin problems.</p>
                            <a href="readSkinGuide.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
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
                        <img src="img/moisturizer.jpg" width="640" height="408" alt="">
                        <div class="post-title">
                            <a><b>How to Find a Moisturizer That Won’t Leave Your Face a Greasy Mess</b></a>
                            <p> As luxurious as putting moisturizer on your face can feel, all it takes is one wrong product to take things in the opposite direction. Rather than feeling like your face is encased in clouds, it’s suddenly covered in grease or simply not hydrated at all.
                                It’s true: Finding the right moisturizer can be tricky—almost as tricky as settling on a cleanser. But that doesn’t mean it’s an impossible task. And it’s one that’s almost certainly worth the trouble.</p>
                            <a href="readMoisturizer.php"><button class="readMorebtn">Read More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>                </div>
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