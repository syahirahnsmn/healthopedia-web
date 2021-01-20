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
                            <h1><b>How to Find a Moisturizer That Won’t Leave Your Face a Greasy Mess</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Rihanna</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >29 February 1996</label>
                            <p class="source">Source:<a href="https://www.self.com/story/how-to-find-face-moisturizer"> https://www.self.com/story/how-to-find-face-moisturizer</a></p>
                            
                            <img src="img/cream.jpg" width="630" height="390" alt="">
                            
                            <p class="post-preview"> As luxurious as putting moisturizer on your face can feel, all it takes is one wrong product to take things in the opposite direction. Rather than feeling like your face is encased in clouds, it’s suddenly covered in grease or simply not hydrated at all.
                                <br><br>It’s true: Finding the right moisturizer (and moisturizing routine, for that matter) can be tricky—almost as tricky as settling on a cleanser. But that doesn’t mean it’s an impossible task. And it’s one that’s almost certainly worth the trouble.
                                <br><br>So, here’s what dermatologists want you to know about finding the right moisturizer for your face.
                            </p>
                            
                            <h2><b>First of all, everyone needs to moisturize.</b></h2>
                            <p class="post-preview"> Your skin retains some amount of moisture on its own, but pretty much all of us need to use additional products in order to keep our skin properly hydrated.
                                <br><br>“I liken [moisturizing] to providing mortar in bricks,” Temitayo A. Ogunleye, M.D., assistant professor of clinical dermatology at the University of Pennsylvania School of Medicine, tells SELF. “It ‘seals’ in the 
                                cracks between your skin and allows you to retain moisture for longer.”
                                <br><br>If the skin’s moisture barrier—the stratum corneum—isn’t functioning properly, it’ll let water escape via a process called transepidermal water loss (TEWL). If that happens, you might notice dryness, flakiness, and sensitivity. With sufficient hydration, your 
                                skin will be noticeably softer and smoother as well as better protected against potential irritants.
                                <br><br>And all sorts of things can contribute to water loss, including the climate, the other products you’re using, and certain skin conditions (like eczema). So the vast majority of us need to help our skin out at least once in a while with a moisturizer. But the 
                                type of moisturizer you need and how often you need to use it will depend on your skin type.
                            </p>

                            <h2><b>So, how do moisturizers work?</b></h2>
                            <p class="post-preview"> There are actually three different types of ingredients in a moisturizer that can increase the level of hydration in your skin, SELF explained previously: Humectants (things like glycerin and hyaluronic acid) draw water into the skin from the surrounding environment. Emollients (ingredients like ceramides, fatty acids, and some natural oils) get in between your skin cells—like the mortar between two bricks in Dr. Ogunleye’s analogy—to strengthen and soften the skin. And then occlusives (e.g. dimethicone, petrolatum, and most natural oils) sit on top of the skin and keep the existing moisture from escaping.
                                <br><br>So, it’s not exactly the thickness of the product that determines how effective it will be for you—it’s the ratio of these ingredients (often oils) to water in a product that does the trick.
                                <br><br>But Dr. Ogunleye doesn’t really speak in these terms about moisturizers with patients, she says. Instead, she focuses on the type of product: If you look at the spectrum of moisturizers out there—from lotions to creams to ointments—you’ll see that the amount of water in each type gradually decreases.
                                <br><br>Lotions tend to have the most water, while ointments have the most oils, and both lotions and creams are somewhere in the middle. The more water in a moisturizer, the easier it will be to apply and the lighter and less greasy it will feel. However, moisturizers with more occlusives tend to be more effective at actually improving the hydration in the skin because they’re better at sealing it in, Dr. Ogunleye says. But they also tend to result in breakouts, especially for those with oily or acne-prone skin.
                                <br><br>So finding the right moisturizer is really about figuring out the right balance of these ingredients for your skin.
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