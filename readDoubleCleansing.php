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
                            <h1><b>Is Double Cleansing Truly Worth Your Precious Time?</b></h1>
                            <i class="fa fa-user-o icon" aria-hidden="true"></i><label class="postDetails"> By Kareena Kapoor</label>
                            <i class="fa fa-calendar icon" aria-hidden="true"></i><label class="postDetails" >28 February 2008</label>
                            <p class="source">Source:<a href="https://www.self.com/story/is-double-cleansing-worth-your-precious-time"> https://www.self.com/story/is-double-cleansing-worth-your-precious-time</a></p>
                            <img src="img/cleanser.jpg" width="630" height="390" alt="">
                            <p class="post-preview"> Washing the oil, dirt, and dead skin off your face is simultaneously one of the simplest and kindest things you can do for your skin. But that hasn’t stopped the skin-care community from making the cleansing process seem very, very complicated.
                                <br><br> Whether you’re considering giving double cleansing a try (literally using two different types of cleansers, one after the other) or testing out the myriad varieties of cleansers on the market, it’s easy to feel overwhelmed.
                                <br><br>Don’t worry—we’re about to make your approach to cleansing as clear as your ideal pores.
                            </p>
                            <h2><b>First things first: Here’s how often you should wash your face.</b></h2>
                            <p class="post-preview"> Even if your options for a decent cleanser and solid routine are seemingly endless, don’t wash your hands (or face) of cleansing altogether.
                                <br><br>Regularly washing your face (once in the morning, once before bed, and after any activity that involves sweating) prevents clogged pores, refreshes the skin, and even helps mitigate the symptoms of some skin conditions, such as rosacea and acne, Jamie B. MacKelfresh, MD, assistant professor in the department of dermatology at Emory University, tells SELF.
                                <br><br>Some people may find that washing with an actual cleanser twice a day is too much and prefer to just use cold water, micellar water, or a mild cleanser in the morning, saving their more intense cleansers with active ingredients for nighttime. Unless your skin is very dry (in which case Dr. MacKelfresh says it's totally fine to limit cleansing to once a day), basically everyone can benefit from washing their face in one way or another at least twice a day.
                                <br><br>If your current cleanser isn’t making a huge difference in your skin’s quality—say, if your acne remains or actually worsens—you should check with your derm to make sure there isn’t a better option out there for you, Dr. MacKelfresh says. And, oh, what options there are!
                            </p>
                            <h2><b>Here’s how to pick the right cleanser for your skin and habits.</b></h2>
                            <p class="post-preview"> Generally, you can categorize cleansers by their main ingredient (their “base”), which will go a long way in pointing you toward the right cleanser for your skin. Cleansers can be water-based, cream-based, gel-based, or oil-based, Syril Keena Que, MD, MPH, assistant professor of clinical dermatology at Indiana University, tells SELF.
                                <br><br>The right type of cleanser for you depends on your skin type and the other products you use. When in doubt, pay attention to what your skin is like “at baseline,” or what it’s like when you first wake up, before applying any products to your face, Dr. MacKelfresh says. For example, if it’s greasy to the touch, you can quite safely assume that you have oily skin. If you don’t take these characteristics into consideration when shopping for a cleanser, you may end up with a product that at the very least isn’t effective and, at worst, irritates your skin.
                                <br><br><b>If you have dry or sensitive skin:</b>A cream-based cleanser is about as gentle and moisturizing as you can get, so it’d work nicely for someone with dry or sensitive skin. But people with dry skin should usually avoid gel-based or “foaming” face washes because they often contain sulfates, ingredients that can irritate or dry out skin, Dr. Que says. Some of her favorite, ultra-gentle cleansers are CeraVe Hydrating Cleanser, $14, and Free & Clear Liquid Cleanser, $8. For people with extremely sensitive skin, Dr. MacKelfresh says a simple rinse with water will do the trick.
                                <br><br>People with sensitive skin may also need to pay attention to the rest of their cleanser’s ingredients, too. For example, Dr. Que says that washes containing alcohol may increase redness, while Dr. MacKelfresh points to strong fragrances as possible irritants. “Simple is going to be better for these people,” she explains. And some cream-based cleansers also contain ingredients known to help with acne (like salicylic acid and benzoyl peroxide), which might be irritating for people with super-sensitive skin.
                                <br><br><b>If you have oily or acne-prone skin:</b> A gel-based cleanser will be more drying because it likely contains more acids than a cream-based one, Dr. Que says, which means that someone with oily or acne-prone skin would be able to tolerate it better. Dr. Que recommends Neutrogena Oil-Free Acne Wash, $9, (which contains salicylic acid), Panoxyl Acne Creamy Wash, $12, (specifically the version with 4 percent benzoyl peroxide), and Aveeno Clear Complexion Foaming Cleanser, $9, for oily skin and acne.
                                <br><br><b> If you have normal skin:</b>If you’d describe your skin as “normal” (not too dry and not too oily), a water-based cleanser would be a safe, neutral choice that’s not likely to cause any problems. Dr. Que points to Neutrogena Naturals Purifying Facial Cleanser, $8, for those with this “middle of the road” skin type, while Dr. MacKelfresh says very few cleansers would be totally off-limits for people with normal skin—as long as it doesn’t irritate you on contact.
                                <br><br><b> If you wear a lot of makeup:</b>Regardless of your skin type, if you wear heavier products (especially ones that contain vegetable oil or mineral oil as a main ingredient), you might feel like your usual cleansers don’t leave you feeling totally clean. In that case, you might need an oil-based cleanser.“Oil and water repel each other,” Dr. Que explains. “You want something with oil to attract all the oil from the skin and pull it away.” In other words, to completely remove heavy-duty makeup, you’ll need to fight fire with 
                                fire—or, in this case, oil with oil. <br><br> Since oil-based cleansers are naturally great at removing dirt and excess oil, they don’t contain many (or sometimes any) surfactants, which are compounds that help break down and separate oil and dirt from the skin so that they can be easily washed away. Some people find that surfactants take away too many of their skin’s natural oils, disrupting the skin’s barrier and drying them out. Oil-based cleansers may still have some surfactants to make it easier to wash the oil off, but they typically don’t have enough to leave you with that stripped-skin feeling—even as the oil thoroughly cleanses your face.
                                <br><br> Therefore, if your usual cleanser still leaves you with some excess makeup on your skin, you may want to check out oil-based cleansers like Clinique Take the Day Off Cleansing Balm, $30, DHC Deep Cleansing Oil, $28, or Neutrogena Ultra Light Cleansing Oil, $10.
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