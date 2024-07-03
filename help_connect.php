<?php
require "config.php";
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert user data into the database
    $sql = "INSERT INTO contact_us (name, email, message )VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql)){
        echo "Response saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
  
    // Close the database connection
    //$conn->close();
}
else{
  header("Location: contact.php");
}
?>