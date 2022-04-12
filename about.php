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
      <span class="btn register-btn">register</span>
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

<section class="heading-link">
   <h3 style="color: blueviolet;">about us</h3>
   <!-- <p> <a href="home.html">home</a> / about </p> -->
</section>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about us equinox.jpeg" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">Equinox-Embracing the nostalgia <h3>
      <p>The 3rd edition of Equinox is here to bring you back to the nostalgic times. This year, Equinox is bigger than ever by merging the charming cultural and fascinating technological facets of IIIT Lucknow, turning it into a techno-cultural fest. So, get on your feet, pack your bags and brace yourselves for the biggest Equinox yet!</p>
      <div class="icons-container">
         <div class="icons">
            
            <h3>Technical Events</h3>
            <span>20+</span>
         </div>
         <div class="icons">
           
            <h3>Cultural Events</h3>
            <span>10+</span>
         </div>
         <div class="icons">
            
            <h3>Prices</h3>
            <span>Worth 50k+</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- teachers section starts  -->

<section class="teachers">

   <h1 class="heading">Festival Conveners</h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/sarthak1-removebg-preview.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Sarthak Singh</h3>
               <span>Festival coordinator</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/Vinamr-removebg-preview.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Vinamr Bajaj</h3>
               <span>Festival converner</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/saksham-removebg-preview.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Saksham Varshney</h3>
               <span>Festival</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-4.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>john deo</h3>
               <span>expert tutor</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-5.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>john deo</h3>
               <span>expert tutor</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-6.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>john deo</h3>
               <span>expert tutor</span>
            </div>
         </div>
         
      </div>

   </div>

</section>

<!-- teachers section ends -->

<!-- students reviews section starts  -->

<section class="reviews">

   <h1 class="heading"> our Speakers </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/speaker1.jpeg" alt="">
            <h3>Mr.Sandeep Jain </h3>
         
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/speaker2.jpeg" alt="">
            <h3>Mr. Arjun J</h3>
        
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/speaker3.jpeg" alt="">
            <h3>Mr Akash Pareek</h3>
          
         </div>

         
      </div>

   </div>

</section>

<!-- students reviews section ends -->








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
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>