<?php

include '../components/connect.php';

session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);
   $row = $select_admin->fetch(PDO::FETCH_ASSOC);

   if($select_admin->rowCount() > 0){
      $_SESSION['admin_id'] = $row['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Login </title>
   <style>
      body{
    margin: 0;
    padding: 0;
    background: url("../images/signback.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
   
}
.login-box{
    width: 320px;
    height: 435px;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    background:#85586F;
    font-size:20px;
    font-family: 'Poppins', sans-serif;
    border-radius: 2rem;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 20px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
    color: #fff;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 14px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: black;
    color: white;
    font-size: 16px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: black;
    color: wheat;
}

.login-box a{
    text-decoration: none;
    font-size: 18px;
    color: beige;
}
.login-box a:hover
{
    color: black;
}

@media (max-width: 480px) {
    .login-box {
        width: 280px;
        height: 385px;
        font-size: 16px;
    }
    .avatar{
        width: 80px;
        height: 80px;
    }
    .login-box p{
        font-size: 14px;
    }
    .login-box input[type="text"], input[type="password"] {
        font-size: 12px;
    }
}

@media only screen and (max-width: 320px) {
  body {
    background-size: contain;
  }
}




   </style>
</head>
    <body>
    <div class="login-box">
    <img src="../images/avatar.jpg" class="avatar">
        <h1>Admin</h1>
            <form action="" method="POST">
            <p>Username</p><br>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Password</p><br>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a><br>    
            </form>
        
        
        </div>
    
    </body>
</html>
    
 
</body>
 
</html>