<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$db = "appstore";

//create connection object
$conn =  mysqli_connect($servername,$username,$password,$db);

//check connection
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

//echo "connected succesfully";
?>