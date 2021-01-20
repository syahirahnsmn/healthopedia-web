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
                            <h1><b>A Guide to Taking Care of Your Skin</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Cardi B</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >16 May 2010</label>
                            <p class="source">Source:<a href="https://www.healthline.com/health/beauty-skin-care/skin-types-care"> https://www.healthline.com/health/beauty-skin-care/skin-types-care</a></p>
                            <h2>Your skin type matters</h2>
                            <p class="post-preview"> You may suspect you have dry, oily, or sensitive skin, but do you really know your skin type? Knowing your true skin type can help the next time you’re in the cosmetics aisle. In fact, using the wrong products — 
                                or even popularized Internet hacks — for your skin type could worsen acne, dryness, or other skin problems. <br><br> Read on to learn:
                                <ul>
                                    <li>how to build your own skin care routine</li>
                                    <li>how to treat specific skin concerns like acne or scars</li>
                                    <li>which DIY skin hacks aren’t healthy, even if they seem to work</li>
                                </ul>
                            </p>                              
                            <h2>Building a daily skin care routine</h2>                           
                            <p class="post-preview"> No matter what your skin type is, a daily skin care routine can help you maintain overall skin health and improve specific concerns like acne, scarring, and dark spots. 
                                A daily skin care routine has four basic steps you can do once in the morning and once before you sleep. <br><br>
                                <img src="img/skinguide1.jpg" width="600" height="580" alt="">
                                <br><br><b>1. Cleansing:</b>  Choose a cleanser that doesn’t leave your skin tight after washing. Clean your face no more than twice a day, or just once, if you have dry skin and don’t wear makeup. Avoid washing for that squeaky-clean feeling because that means your skin’s natural oils are gone. Cleansers known to work well for all skin types include Cetaphil and Banila Clean It Zero Sherbet Cleanser.
                                <br><br><b>2. Serums:</b>  A serum with vitamin C or growth factors or peptides would be better in the morning, under sunscreen. At night, retinol or prescription retinoids work best. Makeup Artist’s Choice has an effective vitamin C and E serum and retinol available.
                                <br><br><b>3. Moisturizer:</b>  Even oily skin needs moisturizer, but use one that is lightweight, gel-based, and non-comedogenic, or doesn’t block your pores, like CeraVe’s facial lotion. Dry skin may benefit from more cream-based moisturizers like MISSHA Super Aqua Cell Renew Snail Cream. Most brands will label their products as gel or cream on their packaging.
                                <br><br><b>4. Sunscreen:</b>  Apply sunscreen with at least 30 SPF 15 minutes before heading outdoors, as it takes a while for sunscreen to activate. Darker skin tones actually need more sun protection because hyperpigmentation is harder to correct. Try EltaMD’s sunscreen, which offers broad-spectrum UVA/UVB protection and is recommended by the Skin Cancer Foundation.
                                <br><br>Choose products that fit your skin type and sensitivity, and remember to read the labels. Some products, such as retinol or prescription retinoids, should only be applied at night.
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