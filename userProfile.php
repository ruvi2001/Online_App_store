<?php
session_start();
?>
<html>
<head>
    <title>User-Profile</title>
    <link rel="stylesheet" href="styles/userProfile.css">
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
                    <?php
                      if(isset($_SESSION["usename"]))
                      {
                        echo '<li><a href="../logout.php"><i class="fa fa-sign-in"></i> logout</a></li>';
                      }
                      else{
                        echo '<li><a href="signIn.php"><i class="fa fa-sign-in"></i> Login</a></li>';
                      }
                    ?>
                    
                    <li><a href="library.php"><i class="fa fa-shopping-cart"></i> Library</a></li>
                    <li><a href="help.php"><i class="fa fa-book"></i> Contact Us</a></li>
                </div>
                <?php
                  if(isset($_SESSION["usename"])){
                    echo '<p>'.$_SESSION["usename"].'</p>';
                  }
                  else{
                    echo "welcome guest";
                  }
                ?>
                <i class="fa fa-user"></i>
            </ul>
        </nav>
</section>
<body>
  <div class="container">
    <h1>User Profile</h1>

    <div class="profile">
      <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture">
      <div class="profile-details">
        <h2>John Doe</h2>
        <p>Email: <span id="email">johndoe@example.com</span></p>
        <p>Location: <span id="location">New York, USA</span></p>
        <button id="deleteButton" onclick="deleteAccount()">Delete Account</button>
        <button id="editButton" onclick="editAccount()">edit Account</button>
      </div>
    </div>
  </div>
  <script src="user profile.js"></script>
 <script src="user profile.js"></script>
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
        <div class="social-links">
        <a href="https://www.facebook.com/"><image class="image1" src="images/fb.png" alt="facebook icon"></image></a>
        <a href="https://twitsocialter.com/?lang=en"><image class="image1" src="images/twitter.webp" alt="twitter icon"></image></a>
        <a href="https://www.instagram.com/"><image class="image1" src="images/insta.png" alt="instagram"></image></a>
        <a href="https://lk.linkedin.com/"><image class="image1" src="images/in.png" alt="linkin logo"></image></a>>
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
    <script src="javascript/userProfile.js"></script>
  
  </footer>
  </body>
  </html>