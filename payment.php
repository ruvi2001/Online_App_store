<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
session_start();
require 'config.php';

$sql = "SELECT * FROM apps";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 

?>

<html>
<head>
  <title>App Store - Payment</title>
  <link rel="stylesheet" href="styles/paymentStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="javascript/payment.js"></script>

</head>
  

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
                    <li><a href="signIn.php"><i class="fa fa-sign-in"></i> Login</a></li>
                    <li><a href="library.php"><i class="fa fa-shopping-cart"></i> Library</a></li>
                    <li><a href="help.php"><i class="fa fa-book"></i> Help</a></li>
                </div>
                <i class="fa fa-user"></i>
                
            </ul>
        </nav>
</section>

<body>
  <div class="container">
    <h2>Payment Details </h2>
    <form action="payment_connect.php" method="post">

      <div class="form-group">
        <label for="name">Name on Card:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" required>
      </div>
      <div class="form-group">
        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" maxlength="3" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <select id="country" name="country" >
            
          <option>Select your country</option>
          
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="UK">United Kingdom</option>
          <option value="India">India</option>
          <option value="Australia">Australia</option>
          <option value="Sweden">Sweden</option>
          <option value="China">China</option>
          <option value="Japan">Japan</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Canada">Canada</option>
          <option value="Brazil">Brazil</option>
        
        </select>
      </div>
      <input type="submit" Value="Submit Payment">


    </form>

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