<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
require "config.php";


    $name = $_POST['name'];
    $card_number = $_POST['card-number'];
    $expiry_date = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $email = $_POST['email'];
    $country = $_POST['country'];



    $sql = "INSERT INTO payment ('name', card_number, expiry_date, CVV, email, country) VALUES ('$name', '$card_number', '$expiry_date', '$cvv', '$email', '$country')";

    if ($conn->query($sql)){
        echo "<script> alert ('Payment Succesfull')</script>";
    } 
    else{
        echo "<script> alert ('ERROR: Payment cannot be proceed ')</script>" ;
    }

?>