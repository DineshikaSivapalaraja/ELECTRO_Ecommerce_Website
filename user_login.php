<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? AND status=1 ");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      header('location:user_login.php?error=username or password is wrong');
   }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="UTF-8">
   
   <link rel="stylesheet" href="css/user_login_style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
        .error{
          color:red;
          
        }
        /*
        a:hover{
         color:aqua;
        }
        */
</style>

<body>
   <div class="container">
      <div class="title" align="center"><span style="color:white;">Sign In to</span> <a href="index.php"><span style="color:#ec7f37;"> Electro</span> </a> </div>
      <div class="content">
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error'] ?></p>
                            <?php } ?>
            <div class="user-details">


               <div class="input-box">
                  <span class="details" style=" color:white;">Email</span>
                  <input type="text" name="email" placeholder="Enter Your Email Address " required>
                  <br>
                 
               </div>
               

               <div class="input-box">
                  <span class="details" style=" color:white;">Password</span>
                  <input type="password" name="pass" placeholder="Enter The Password" required>
               </div>

            </div>



            <div class="button">
               <input type="submit" value="Sign In" name="submit">
            </div>
            
         </form>
         <div class="forget" align="center">
            <a href="#">Forget Password</a>
         </div>
         <div align="center" style="margin-top:20px; ">
           <span style="color:white;" >Do not Have an Account?</span>
            <a href="user_register.php">
            <span style="color:#fcbc83;"> Sign Up</span> 
               
            </a>
         </div>
      </div>
   </div>

</body>

</html>