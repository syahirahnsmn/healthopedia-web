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
                            <h1><b>10 Health Tips for Men of Any Age</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Ahmad Albab</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >29 November 2017</label>
                            <p class="source">Source:<a href="https://www.healthgrades.com/right-care/mens-health/10-health-tips-for-men-of-any-age"> https://www.healthgrades.com/right-care/mens-health/10-health-tips-for-men-of-any-age</a></p>
                            <h2>It's Advantageous to Protect Your Health</h2>
                            <p class="post-preview"> If you’re like most men, you probably have a career plan and a retirement plan. And maybe even a plan for starting or providing for your family. But do you have a plan for keeping yourself healthy? While some health issues are beyond your control, there are several ways you can keep your mind and body strong and healthy. 
                                Here are tips for protecting your health at any age. Start your healthy living plan today! <br><br>
                            </p>
                            <hr>
                            <img src="img/cloy.jpeg" width="630" height="390" alt="">
                            <h2><b>1. Hang Out With Friends and Family</b></h2>
                            <p class="post-preview"> You might think you’re too busy for a boys’ night out or lunch with your mom. But activities like these may save your life. Research shows that social ties can help you survive health problems, make you happier, and even prolong your life. One study even found that 
                                social bonds can protect your physical health as much as quitting smoking. <br><br>
                            </p>
                            <hr>
                            <img src="img/smoke.jpg" width="640" height="408" alt="">
                            <h2><b>2. Don’t Smoke</b></h2>
                            <p class="post-preview"> Smoking is the major cause of lung cancer. Lung cancer kills more men than any other type of cancer. Smoking is also linked to heart disease, stroke, and COPD (chronic obstructive pulmonary disease). And half of all long-term smokers will die because they use tobacco. The good news 
                                is that as soon as you stop smoking, you start to decrease your risk of developing chronic diseases.  <br><br>
                            </p> 
                            <hr>
                            <img src="img/break.png" width="600" height="408" alt="">
                            <h2><b>3. Unplug and Take a Break</b></h2>
                            <p class="post-preview"> Small amounts of stress can energize you and sharpen your ability to perform well. But too much stress over time can cause serious physical and mental health problems, including heart disease, diabetes, digestive problems, sleeplessness, and depression. To de-stress, get some 
                                exercise, meet up with friends, take a break from the phone and computer screens. <br><br>
                            </p>  
                            <hr>
                            <img src="img/dosleeping.jpg" width="580" height="400" alt="">
                            <h2><b>4. Get Plenty of Sleep</b></h2>
                            <p class="post-preview"> It seems like there are never enough hours in the day. As a result, at least 25% of Americans are sleep-deprived. Too little sleep is linked to obesity, accidental trauma, heart disease, depression, and diabetes. It also puts you at risk of car accidents due to drowsy driving. Sleeping seven to nine hours per night 
                                can improve your work performance, your physical safety, and your body’s ability to fight disease.  <br><br>
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