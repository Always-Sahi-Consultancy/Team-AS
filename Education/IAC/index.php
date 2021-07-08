<?php
    require 'db.php';
    session_start();

    // if(isset($_SESSION['username'])) {
    //     header("Location: welcome.php");
    // }

    // if(isset($_POST['submit'])) {
    //     $email = $_POST['email'];
    //     $password = md5($_POST['password']);
    
    //     $sql = "SELECT * FROM test WHERE email='$email' AND password='$password'";
    //     $result = mysqli_query($connection, $sql);
    //     if($result->num_rows > 0) {
    //         $row = mysqli_fetch_assoc($result);
    //         $_SESSION['username'] = $row['username'];
    //         header("Location: welcome.php");
    //     } else {
    //         echo "<script>alert('Email or Password is wrong')</script>";
    //     }
    // }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['login'])){ // user loggin in
            require 'login.php';
        }
    }
?>

<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-md nav-bar fixed-top nav_bar" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-brand menu">
                    <a style="vertical-align:middle" href="www.google.com"><img src="img/Background Less.png" class="brand-logo"></a>
                    <span><b>Always Sahi Solutions Private Limited</b></span>
                </span>
                <ul id="List">
                    <li><a href="#home"><b>Home<b></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="login">
        <!-- <p class="login-text">Login with Social Account</p>
        <div class="login-social">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i>Google+</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
        </div> -->
        <form action="index.php" method="POST" autocomplete="off" class="login-email">
            <p class="login-text" href="#login">Login with Email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" autocomplete="off" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" autocomplete="off" required>
            </div>
            <div class="input-group">
                <button class="btn" name="login">Login</button>
            </div>
            <p class="login-register-text"><a href="forgot.php">Forgot Password?</a></p>
        </form>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>