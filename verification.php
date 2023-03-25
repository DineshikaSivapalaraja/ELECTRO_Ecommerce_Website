<?php session_start() ?>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

   <!--<link rel="stylesheet" href="css/style.css">-->

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->

    <title>Verification</title>
    <style>

        body{
            /*background-color: #F8EDE3;*/
            background-image:url("images/signback.jpeg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        
        .col-md-8{
            margin: 10rem 5rem;
            background-color: #85586F;
            padding:1.5rem;
            border-radius: 1rem;
        }

        .card{
           /* align-items: center;*/
           background-color: #F8EDE3;
           padding: 1rem;
           border-radius: 1rem;
            
        }

       /* .login-form .cotainer .card .card-body{
           
            align-items: center;
        }
        */
        .form-group-row{
            text-align: center;
        }
        .col-md-6-offset-md-4{
            text-align: center;
            padding-top:1.5rem;
        }

        .col-md-6{
            padding-top:1rem;
        }

        .subbut{
            padding: .6rem 2rem;
            background-color: #85586F;
            color: white;
            font-weight: 600;
            font-size: medium;
            border: 0;
            
        }

        /* Media query for screens smaller than 768px */
@media (max-width: 768px) {
    body {
       /* background-image: none; /* remove the background image */
        /background-color: #F8EDE3; / use a solid color instead */
    }
    .col-md-8 {
        margin: 2rem; /* reduce the margin for smaller screens */
    }
    .card {
        padding: 0.5rem; /* reduce the padding for smaller screens */
    }
    .form-group-row {
        font-size: smaller; /* reduce the font size for smaller screens */
    }
    .col-md-6-offset-md-4, .col-md-6 {
        padding-top: 0.5rem; /* reduce the padding for smaller screens */
    }
    .subbut {
        font-size: small; /* reduce the font size for smaller screens */
    }
}

@media (max-width: 768px) {
    .card-header h1 {
        font-size: 20px;
    }

    .form-control{
        width: 70%;
    }
}

   
    </style>
</head>
<body>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align:center;"><h1>Verification Account</h1></div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group-row">
                                <label for="email_address" class="col-md-4-col-form-label-text-md-right">OTP Code</label>
                                <div class="col-md-6">
                                    <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6-offset-md-4">
                                <input class="subbut" type="submit" value="Verify" name="verify">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>
<?php

 include 'components/connect.php';
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            $sql="UPDATE users SET status = 1 WHERE email = '$email'";
            $stat=$conn->query($sql);
            ?>
             <script>
                 alert("Verfiy account done, you may sign in now");
                   window.location.replace("index.php");
             </script>
             <?php
        }

    }

?>