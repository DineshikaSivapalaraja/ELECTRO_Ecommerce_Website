<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
<?php include 'components/head.php'; ?> 
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span style="font-size:25px;">DISCOUNTS UP TO 40% OFF</span>
            <h3 style="font-size:25px;">Latest Watches</h3>
            <a href="shop.php" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-4.png" alt="">
         </div>
         <div class="content">
            <span style="font-size:25px;">DISCOUNTS UP TO 50% OFF</span>
            <h3 style="font-size:25px;">Latest Smartphones</h3>
            <a href="shop.php" class="btn">Shop Now</a>
         </div>
      </div>

     

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/pngfind.com-macbook-pro-png-384091.png" alt="">
         </div>
         <div class="content">
            <span style="font-size:25px;">DISCOUNTS UP TO 60% OFF</span>
            <h3 style="font-size:25px;">Latest Laptops</h3>
            <a href="shop.php" class="btn">Shop Now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

</section>

</div>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>Secure Payment</h3>
            <p>100% secure payment</p>
        </div>
    </div>    

    <div class="icons">
        <i class="fa fa-truck"></i>
        <div class="content">
            <h3>Free Delivery</h3>
            <p>Order over Rs.10,000</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 Support</h3>
            <p>Call us anytime</p>
        </div>
    </div>

</section>

<section class="category">

   <h1 class="heading" style="font-size:25px;">Featured Categories</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Laptops</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>TV</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>Cameras</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>Smartphones</h3>
   </a>

   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>Watches</h3>
   </a>

   </div>

   <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f63fa25110eed9c2b"></div>

   <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f63fa25110eed9c2b"></div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading" style="font-size:25px;">Latest Products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>LKR.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<section class="ads"  style="background:url(images/mr.jpg) no-repeat;background-size: cover;background-position: center;margin-bottom:.5rem">
   <div class="add" style="display:flex">
   <div class="content"  style="color:white;margin-top:8rem; ">
            <span style="font-size:25px;">UP TO 100% Cashback</span>
            <h3 style="font-size:25px;">On Selected OPPO Products</h3>
            <p style="font-size:1.4rem">Valid only on EMI transactions</p>
            <a href="shop.php" class="btn"style="display: inline-block; background-color: #F8EDE3; color:black; width: auto">Shop Now</a>
         </div>

      <div class="image2">
            <img src="images/hhgrb.png" alt="">
         </div>
    
   
</section>





<?php include 'components/footer1.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".category-slider", {
         spaceBetween: 20,
         slidesPerView: 5,
        slidesPerGroup: 5,
        loop: true,
        loopFillGroupWithBlank: true,
         navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var mySwiper = new Swiper('.home-slider', {
    // enable auto-swiping
    autoplay: {
        //delay: 3000,
        speed:20000,
    },
   });


</script>

</body>
</html>