<?php
session_start();

include ("config.php");
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fullname = $_POST['full_name'];
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $number = $_POST['phone'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !empty($number) && !empty($email) && !empty($country) &&  !empty($fullname))
    {
        //save to database
        $user_id = random_num(20);
        $date = date('Y-m-d H:i:s');
    

    // Insert user data into the database
    $sql = "insert into users(user_id,full_name, user_name,email,country, phone, password,date ) values ('$user_id','$fullname', '$username', '$email', '$country', '$number','$password','$date')";

    if ($conn->query($sql)){
        header("Location:signIn.php");
        die;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}else {
    echo "please enter all the information!";
}
    
}



function random_num($length) {
     $text = "";
     if ($length < 5) {
         $length = 5;
     }
     $len = rand(1, $length);

     for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);  //Concatenate each random digit to $text
     }

     return $text;

}



?>

<html>
<head>
    <title>App Store-Sign Up</title>
    <link rel="stylesheet" href="styles/signUp.css">
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
                    <li><a href="homepage.php"><i class="fa fa-home"></i> Home</a></li>
                   <li><a href="library.php"><i class="fa fa-shopping-cart"></i> Library</a></li>
                    <li><a href="help.php"><i class="fa fa-book"></i> Help</a></li>
                </div>
                
                <li><a href="../userProfile.php"><i class="fa fa-user"></i></a></li>
            </ul>
        </nav>
</section>
  <div class="container">
    <h1>App Store Registration</h1>
    <form action="signUp_connect.php" method="post" >
      <label for="Fullname">Full Name:</label>
      <input type="text" id="fname" name="full_name" required>

      <label for="username">User Name:</label>
      <input type="text" id="lname" name="user_name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="country">Country:</label>
      <input type="Country" id="country" name="country" required>


      <label for="phone">Phone:</label>
      <input type="phone" id="phone" name="phone" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="password">Confirm Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value = "Register">
      <div class="link">
        Already have an account? <a href="signin.php">Sign in</a>
      </div>
    </form>
  </div>
<!--<script src="signUp.php"></script> !-->
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
      <h4>follow us</h4>
      <div class="social-links">
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