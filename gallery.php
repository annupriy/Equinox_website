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
   <title>Gallery</title>

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
      <span class="btn register-btn">Register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <!-- <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div> -->
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
   <h3 style="color: blueviolet;">Picture Gallery</h3>
   
</section>

<section class="courses">

   

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image2.jpg" alt="">
          
         </div>

      </div>

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image3.jpg" alt="">
        
         </div>
        
      </div>

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image1.jpg" alt="">
           
         </div>
       
      </div>

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image4.jpg" alt="">
          
         </div>
       
      </div>

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image5.jpg" alt="">
            
         </div>
        
      </div>

      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image6.jpg" alt="">
          
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image7.jpg" alt="">
         
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image8.jpg" alt="">
          
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image9.jpg" alt="">
            
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image10.jpg" alt="">
           
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/iamge11.jpg" alt="">
            
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image12.jpg" alt="">
           
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image13.jpg" alt="">
           
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image14.jpg" alt="">
           
         </div>
         
      </div>
      <div class="box">
         <div class="image">
            <img src="images/photo gallery/image15.jpg" alt="">
           
         </div>
         
      </div>

      <!-- <div class="box hide">
         <div class="image">
            <img src="images/course-2-7.jpg" alt="">
            <h3>teaching</h3>
         </div>
         
      </div>

      <div class="box hide">
         <div class="image">
            <img src="images/course-2-8.jpg" alt="">
            <h3>designing</h3>
         </div>
         
      </div>

      <div class="box hide">
         <div class="image">
            <img src="images/course-2-9.jpg" alt="">
            <h3>dancing</h3>
         </div>
         
      </div>

   </div> -->

   <!-- <div class="load-more"> <div class="btn">load more</div> </div> -->

</section>











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