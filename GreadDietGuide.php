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
                        <li><a href="main.php">HOME</a></li>
                        <li><a href="GArticle.php">ARTICLE</a></li>
                        <li><a href="#">FORUM</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                    <button class="dropbtn">Login</button>
                    <div class="dropdown-content">
                        <a href="loginAdmin.php">Admin</a>
                        <a href="loginUser.php">Member</a>
                    </div>
                  </div> 

        <!--RECENT POSTS-->
        <section class="container">
            <div class="content">
                <div class="posts">
                    <div class="post-content">
                        <!--<img src="diet.jpg" width="640" height="408" alt="">-->
                        <div class="post-title">
                            <h1><b>A Guide To Eating A Balanced Diet</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Johhny Doe</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >09 August 2004</label>
                            <p class="source">Source:<a href="https://www.medicalnewstoday.com/articles/324093"> https://www.medicalnewstoday.com/articles/324093</a></p>
                            <p class="post-preview"> A balanced diet includes foods from five groups and fulfills all of a person’s nutritional needs. Eating a balanced diet helps people maintain good health and reduce their risk of disease.
                                Dietary guidelines evolve with scientific advances, so it can be challenging to stay on top of current recommendations and know what to eat.
                                In this article, we look at current dietary recommendations and describe how to build a balanced diet.
                            </p>
                                <h2>What is a balanced diet?</h2>
                                <img src="img/dietguide1.jpg" width="640" height="408" alt="">
                            <p class="post-preview"> A balanced diet is one that fulfills all of a person’s nutritional needs. Humans need a certain amount of calories and nutrients to stay healthy.
                                A balanced diet provides all the nutrients a person requires, without going over the recommended daily calorie intake. <br><br>
                                By eating a balanced diet, people can get the nutrients and calories they need and avoid eating junk food, or food without nutritional value.
                                The United States Department of Agriculture (USDA) used to recommend following a food pyramid. <br><br> However, as nutritional science has changed, they now recommend eating foods from the five groups and building a balanced plate.
                                According to the USDA’s recommendations, half of a person’s plate should consist of fruits and vegetables.
                                The other half should be made up of grains and protein. <br><br> They recommend accompanying each meal with a serving of low-fat dairy or another source of the nutrients found in dairy.
                            </p>
                                <h2>The 5 food groups</h2>
                            <p class="post-preview"> A healthful, balanced diet includes foods from these five groups:
                                <ul>
                                    <li>vegetables</li>
                                    <li>fruits</li>
                                    <li>grains</li>
                                    <li>protein</li>
                                    <li>dairy</li>
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
                                &nbsp;<a href="GbeautyCategory.php">Beauty</a>                            
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="GdietCategory.php">Diet and Nutrition</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="GwomenCategory.php">Women's Health</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="GmenCategory.php">Men's Health</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="GfitnessCategory.php">Fitness</a>
                            </li>
                            <li class="list-items">
                                &nbsp;<a href="GmentalCategory.php">Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Popular Post</h2> 
                        <div class="post-content">
                            <a href="GreadMenHealth.php"><img src="img/men health.jpg" alt=""></a>
                            <div class="post-title">
                                <a href="GreadMenHealth.php"><b>10 Health Tips for Men of Any Age</b></a>
                            </div>
                        </div>
                        <div class="post-content">
                           <a href="GreadDietGuide.php"><img src="img/diet.jpg" alt=""></a>
                            <div class="post-title">
                                <a href="GreadDietGuide.php"><b>A Guide To Eating A Balanced Diet</b></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <a href="GreadAcne.php"><img src="img/beauty1.jpg" alt=""></a>
                             <div class="post-title">
                                 <a href="GreadAcne.php"><b> How To Cover Up Every Type of Acne</b></a>
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