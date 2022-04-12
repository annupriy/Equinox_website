<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Equinox</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<header class="header" style="background-color: black;">

   <a href="home.html" class="logo"> <img src="images/equinox_logo.jpg" alt="" ></i> EQUINOX </a>

   <nav class="navbar" >
      <div id="close-navbar" class="fas fa-times"></div>
      <a  style=" color: white;" href="index.php">home</a>
      <a  style=" color: white;" href="about.php">about</a>
      <a  style=" color: white;" href="gallery.php">gallery</a>
      <a  style=" color: white;" href="contact.php">contact</a>
      <a  style=" color: white;" href="blog.php">Blog</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">Register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form>

</div>

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/equinox_banner.jpeg) ; height: 105vh; width: 100vw;">
         
         </section>

         <section class="swiper-slide slide" style="background: url(images/banner_main.jpg) no-repeat; height: 105vh; width: 100vw;">
      
         </section>

         <section class="swiper-slide slide" style="background: url(images/banner-image5.jpg) no-repeat; height: 105vh; width: 100vw;">
           
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading">Our Tech Events</h1>

   <div class="box-container">

      <div class="box" id="box1" >
         <img src="images/axios-logo.png" alt="">
         <h3 >Treasure Hunt</h3>
         <p >On 22'nd April 2022 at 12:00pm</p>
      </div>

      <div class="box" id="box2">
         <img src="images/axios-logo.png" alt="">
         <h3>Incognito V3</h3>
         <p>On 22'nd April 2022 at 1:00pm</p>
      </div>

      <div class="box" id="box3">
         <img src="images/axios-logo.png" alt="">
         <h3>Codebyte</h3>
         <p>On 22'nd April 2022 at 8:00pm-11:00pm</p>
      </div>

      <div class="box" id="box4">
         <img src="images/axios-logo.png" alt="">
         <h3>Hack-o-fiesta</h3>
         <p>On 22'nd April 2022 starting at 9:00 pm  </p>
      </div>
      <div class="box" id="box5">
         <img src="images/axios-logo.png" alt="">
         <h3>Bug smashuing</h3>
         <p>On 23'rd April 2022 at 3:00pm-6:00pm</p>
      </div>

      <div class="box" id="box6">
         <img src="images/axios-logo.png" alt="">
         <h3>Appophilia</h3>
         <p>On 23'rd April 2022 at 6:00pm</p>
      </div>
      <div class="box" id="box7">
         <img src="images/axios-logo.png" alt="">
         <h3>Battle Sneak</h3>
         <p>On 24'th April 2022 at 12:00pm-3:00pm</p>
      </div>

    
      <div class="box" id="box8">
         <img src="images/axios-logo.png" alt="">
         <h3>Dream in code</h3>
         <p>On 24'th April 2022 at 12:00pm-6:00pm</p>
      </div>
      <div class="box" id="box9">
         <img src="images/axios-logo.png" alt="">
         <h3>Webmaniac</h3>
         <p>On 24'th April 2022 at 6:00pm-10:00pm</p>
      </div>
     
      <div class="box" id="box10">
         <img src="images/axios-logo.png" alt="">
         <h3>WebDev Workshops</h3>
         <p>Workshops for learners - Open for all</p>
      </div>
      <div class="box" id="box11">
         <img src="images/axios-logo.png" alt="">
         <h3>AppDev Workshops</h3>
         <p>Workshops for learners - Open for all</p>
      </div>
    
      <div class="box">
         <img src="images/axios-logo.png" alt="">
         <h3>And Many More ...</h3>
        
      </div>
    

   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> Our Flagship Events </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/hof.jpg" alt="">
               <h3>Hack-O-Fiesta</h3>
            </div>
            <div class="content">
               <h3>Hack-O-Fiesta</h3>
               <p>Equinox'22 is back with the 3rd edition of its flagship hackathon HackOFiesta.
                  This edition is bigger and better than ever with a prize pool of $5000.
                  
                  So what are you waiting for? Get your team of geeks ready to register now at https://hack.iiitl.ac.in
                  </p>
               <a href="https://hackofiesta.devfolio.co/" class="btn" onclick="">Register Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/mun.jpg" alt="">
               <h3>Equinox World MUN</h3>
            </div>
            <div class="content">
               <h3>Equinox World MUN</h3>
               <p>We are proudly announcing our collaboration with the United Nations Informations Centre for Bhutan and India.

                  United Nations Information Centres (UNIC) serve as a focal point for news and information about the United Nations for audiences worldwide.</p>
               <a href="https://allevents.in/org/equinox-world-mun-iiit-lucknow/16929982" class="btn">Register Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/tedx.jpg" alt="">
               <h3>TEDx IIITL</h3>
            </div>
            <div class="content">
               <h3>TEDx IIITL</h3>
               <p>In this much needed era and spirit of “Ideas worth spreading”, we are ecstatic to announce the first ever edition of TEDxIIITL. With this platform we wish to curate stories, gather a plethora of ideas around the spectrum and present it in a way unique to all aspects of life.</p>
               <a href="https://www.ted.com/tedx/events/50213" class="btn">Register Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/hof.jpg" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">Register Now</a>
            </div>
         </div>


      </div>

   </div>

</section>

<!-- home courses slider section ends -->









<!-- footer section starts  -->

<section class="footer" style="background-color: black; ">

   <div class="box-container">

      <div class="box">
         <h3 style="color: white;"> <i class="fas fa-lightbulb"></i> Equinox </h3>
         <p>Embracing the nostalgia</p>
         <div class="share">
            <a href="https://www.facebook.com/equinox22/" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/equinoxiiitl?t=MyAHmBD7mQertlMXa3PNsA&s=08" target="_blank" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/equinoxiiitl/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/equinox-iiitl/" target="_blank" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3 style="color: white;">quick links</h3>
         <a href="home.html" class="link">Home</a>
         <a href="about.html" class="link">About</a>
         <a href="courses.html" class="link">Gallery</a>
         <a href="contact.html" class="link">Contact</a>
         <a href="contact.html" class="link">Blog</a>
      </div>

      <div class="box">
         <h3 style="color: white;">Useful inks</h3>
         <a href="#" class="link">Help center</a>
         <a href="#" class="link">Ask questions</a>
         <a href="#" class="link">Send feedback</a>
         <a href="#" class="link">Private policy</a>
         <a href="#" class="link">Terms of use</a>
      </div>

      <div class="box">
         <h3 style="color: white;">newsletter</h3>
         <p>subscribe for latest upadates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit" style="color: white;"> created by <span>Webd Crow team</span> | all rights reserved! </div>

</section>


<!-- footer section ends -->







<!-- swiper js link  -->


<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>