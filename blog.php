<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blogs</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

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


<section class="courses">

   

  <div class="box-container">

     <div class="box">
        <div class="image">
          <h1>Blog1</h1>
           <p style="font-size:1.4rem;">
            "It all begins and ends in your mind. What you give power to has power over you."
            
            Equinox, as a whole 3 day event was extremely successful, this event consisted of multiple opportunities for all students to showcase their technical skills, talents and to definitely to obtain new ones. The fest was organized under the very synergical executive team of twelve members and 20+ volunteers,who worked for about three months rigorously to bring the event to success.</p>
         
        </div>

     </div>
     <div class="box">
        <div class="image">
          <h1>Blog2</h1>
           <p style="font-size:1.4rem;">Hack-O-Fiesta: The main attraction of Tech-Fest was the flagship Hackathon, a 36 hours event . The event was organized by the Axios in cooperation with several tech-giants namely GitHub as our title sponsor, Microsoft Student Partner and  Developer Student Club.
            This Hackathon was focused on introduction of technologies and data sets used in cooperating projects to students . Students come with their own project idea. Our mentors were Mr Harshit Juneja , Chapter Lead at Facebook Developer Circles and  GSOCers named Mr. Divy Khare , Mr Vaibhav Gupta and Mr. Govind Dixit.</p>
         
        </div>

     </div>
     <div class="box">
        <div class="image">
          <h1>Blog3</h1>
           <p style="font-size:1.4rem;">The Freshers' Cup -
            The first ACM ICPC style coding contest of    IIIT L  exclusively for the first yearites where the top 18 teams of the institute had an intense coding competition. This, 5 hour long, posed as a great opportunity for them to prove their coding skills and aimed to promote coding culture amongst the students. It was conducted in two part the prelims where the top teams who were selected to compete in the finals for the freshers cup.The students worked their way through many questions ranging from data structures to implementation of various algorithms.</p>
         
        </div>

     </div>
     <div class="box">
        <div class="image">
          <h1>Blog4</h1>
           <p style="font-size:1.4rem;">Crotonia - The literary society of the Indian Institute of Information Technology, Lucknow in association with Equinox:The Annual Techfest of IIIT Lucknow organized the first edition of Equinox World Model United Nations, a medium to raise awareness amongst today’s youth about youth-centric issues and help them make a sustainable decision.</p>
         
        </div>

     </div>
     <div class="box">
        <div class="image">
          <h1>Blog5</h1>
           <p style="font-size:1.4rem;">Equinox, IIIT Lucknow’s annual tech fest is the paradigm of celebrating all things tech and beyond. Celebrating the coder, the developer, the reader, the learner, the leader. Equinox presents them a platform to exhibit their ideas and build upon them, to guide their unrelenting thoughts into a reality. Upcoming with its 1st edition, Equinox is there to test minds and transcend the norm. The very 1st edition of Equinox comes power-packed with a tantalizing fusion of never before seen events along with the classic headliners.</p>
         
        </div>

     </div>
     <div class="box">
        <div class="image">
          <h1>Blog6</h1>
           <p style="font-size:1.4rem;">This three-day technical fest of IIIT Lucknow showcases a plethora of events ranging from coding competitions to overnight hackathons, from powerful gaming to minds at war. The first edition of Equinox, “Deciphering the Origins” is aimed at being bigger, bolder and better than all.
            Come join us in our pursuit of knowledge.</p>
         
        </div>

     </div>
    
</section>





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

</body>
</html>
