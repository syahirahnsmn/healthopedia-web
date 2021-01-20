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
                            <h1><b>How To Cover Up Every Type of Acne</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Mariah Carey</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >21 February 2020</label>
                            <p class="source">Source:<a href="https://www.womenshealthmag.com/beauty/a25617862/how-to-cover-up-acne/"> https://www.womenshealthmag.com/beauty/a25617862/how-to-cover-up-acne/</a></p>
                            <p class="post-preview"> You've been doing everything right with your skincare routine. Cleansing, toning, moisturizing, treating...and yet, the worst uninvited guest still comes out of nowhere: a breakout. 
                                While you're not going to see anyone IRL soon, your calendar is still packed with virtual get-togethers where your new friend will be on display. And, as helpful as it may be to set up a teledermatology appointment, your doc can't reach through FaceTime to give you an emergency cortisone shot to kill the zit. 
                                Here's where makeup comes in. <br><br> While concealers and foundation can't fix acne, they sure can help your confidence when a cyst makes an untimely appearance. If you're looking to minimize the your breakouts, look no further than these expert tips from makeup artist Allan Aponte on how to cover up every kind of pimple in the book.
                            </p> 

                            <h2>Jump to your concern</h2>
                            <img src="img/acne1.jpg" width="580" height="408" alt=""> 
                            <p class="post-preview"><br> How to cover it up:   
                                <ol>
                                    <li>Prep skin by applying a primer with smoothing ingredients, like cetyl ethylhexanoate (a skin conditioner that removes appearance of dry patches/flakes). Aponte's pick is the Surratt 
                                        Perfectioniste Primer. "It's a light, water-based primer and gives a flawless finish," he says.</li>
                                    <li>Use a medium coverage liquid foundation ("something too thick will enhance the appearance of blackheads," Aponte says). 
                                        Dispense a pea-sized portion in your hand—a little goes a long way.</li>
                                    <li>Use a fluffy brush (he uses the Real Techniques Setting Brush) to pick up some of the product and move it in circular motions to sheer out the amount of product that goes into the brush. "This way it will be 
                                        easier to apply thinner layers and create your desired coverage," Aponte suggests.</li>
                                  </ol>  
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