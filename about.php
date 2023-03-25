<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOOSE US?</h3>
         <p>At Electro, we take great pleasure in providing each and every one of our clients with excellent service. 
            You can rely on us to deliver dependable and precise service since our staff has extensive experience and expertise 
            in the field of electricity. We also provide a broad range of premium goods from reputable manufacturers to provide 
            you the greatest alternatives. You can easily acquire the assistance you want when you require it thanks to our shop's 
            accessible location and long business hours. We are also committed to offering first-rate customer service and paying 
            attention to your requirements and concerns. We are certain that Electro is the ideal option for all of your electric
             needs because of its strong local reputation.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>I recently had some electrical work done at E-Lab and was blown away by the level of service and expertise I received. The team was knowledgeable, professional, and went above and beyond to make sure my needs were met. I will definitely be returning for all of my future electrical needs.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>I was in a bind when my electrical panel stopped working, but E-Lab was able to get me in for an appointment the same day. The technician was able to diagnose and fix the problem quickly and efficiently, and the whole experience was stress-free. I can't thank the team at E-Lab enough for their help.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sera Cliff</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>I was hesitant to have any electrical work done in my home, but E-Lab put my mind at ease with their professionalism and expertise. They explained the process clearly and were able to complete the work to my satisfaction. I am so grateful for their help and will be using them for all of my future electrical needs</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kevin Brian</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>I've been a loyal customer of E-Lab for years and have always been impressed by the quality of service and products they offer. The staff is friendly and helpful, and they take the time to explain things in a way that is easy to understand. I highly recommend [Electric Shop] to anyone in need of electrical work.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Camila Smith</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>"I had a great experience at E-Lab. The technician was prompt, courteous, and efficient. They completed the work on time and within budget, and I was very happy with the end result. I would definitely recommend [Electric Shop] to others in need of electrical work</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zain Malic</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>I recently had the pleasure of working with the team at E-Lab for an electrical project in my home, and I couldn't be happier with the results. From the moment I walked into the shop, I was greeted with friendly and helpful service. The technicians were knowledgeable and professional, and they took the time to listen to my needs and concerns. The work was completed efficiently and to a high standard, and I feel confident in the quality of the service provided by E-Lab. I would highly recommend this shop to anyone in need of electrical work</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jully Sherif</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer1.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>