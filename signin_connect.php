<?php

session_start();

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    //something was posted
    $username = $_POST["user_name"];
    $pwd = $_POST["password"];

    //check customer table
    $sql = "SELECT * FROM registered_user WHERE UserEmail = '$uid' AND UserPW = '$pwd'";
    $result = $conn->query($sql);

    //check administrater table
    $sql1 = "SELECT * FROM administrator WHERE email = '$uid' AND password = '$pwd'";
    $result1 = $conn->query($sql1);

    if($result->num_rows > 0){
        $_SESSION["usename"] = $uid;
        header("Location:homepage.php");
    }
    elseif($result1->num_rows > 0){
        $_SESSION["usename"] = $uid;
        header("Location:admin.php");
    }
    else{
        echo "invalid credintial";
    }
}
else{
    header("Location:homepage.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>App store - login</title>
    <link rel="stylesheet" href="styles/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>   
<body>
  

<section class="one">
        <nav>
            <ul>
            <li class="logo">
                  <img src="images/logo.jpeg">
                </li>
                <li class="search">
                    <input type="search" placeholder="Search..">
                    <label class="icon">
                        <span class="fa fa-search"></span>
                    </label>
                </li>
                <div class="items">
                    <li><a href="homepage.php"><i class="fa fa-home" class="smallicon"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                    <li><a href="library.php"><i class="fa fa-shopping-cart"></i> Library</a></li>
                    <li><a href="help.php"><i class="fa fa-book"></i> Help</a></li>
                </div>
                <i class="fa fa-user"></i>
          </ul>
        </nav>
</section>
    <h1>Login</h1>
    <div class="container">
        
        <form method = "post" action = "signin_connect.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <div class="row">
                <div class="col">
                    <input type="submit" value="Login">
                </div>
                <div class="col">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <br>
            <p>New user? <a href="signUp_connect.php">Sign Up</a></p>
        </form>
    </div>
    <div class="adminlogin">
    <p><a href="admin.php">Log in as admin</a></p>    
    </div>
    <footer class="foot">
        <div class="display">
          <div class="fcoloumn">
            <ul>
              <li><a href="#">Play points</a></li>
              <li><a href="#">Play cards</a></li>
              <li><a href="#">Gift cards</a></li>
              <li><a href="#">Reedme</a></li>
            </ul>
          </div>
      
          <div class="fcoloumn">
            <ul>
              <li><a href="#">Refund policy</a></li>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#">Privacy</a></li>
      
            </ul>
          </div>
      
          <div class="fcoloumn">
            <ul>
              <li><a href="#">Sales</a></li>
              
            </ul>
          </div>
          <div class="fcoloumn">
            <h4>share apps through</h4>
            <div class="-links">
            <a href="https://www.facebook.com/"><image class="image1" src="images/fb.png" alt="facebook icon"></image></a>
            <a href="https://twitsocialter.com/?lang=en"><image class="image1" src="images/twitter.webp" alt="twitter icon"></image></a>
            <a href="https://www.instagram.com/"><image class="image1" src="images/insta.png" alt="instagram"></image></a>
            <a href="https://lk.linkedin.com/"><image class="image1" src="images/in.png" alt="linkin logo"></image></a>
            </div>
          </div>
        </div>
        <hr>
        <p class="fcolor">Copyright © 2023 Apple Inc. All rights reserved.<span class="spa">
            <a href="#">Privacy Policy </a>|
            <a href="#"> Terms and Service </a>|
             <a href="#">Legel </a>|
              <a href="#">Site Map</a>
            </span><span class="spa">Srilanka (English)</span>
        </p>
      
      </footer>
</body>
</html>
