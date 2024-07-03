<?php
require "config.php";


    $aID = $_POST['adminId'];
    $aPwd = $_POST['adminPwd'];
    $aAddr = $_POST['addressA'];
    $aEmail = $_POST['aEmail'];


    $sql = "INSERT INTO administrator (admin_id, admin_password, admin_address, admin_email ) VALUES ('$aID', '$aPwd', '$aAddr', '$aEmail')";

    if ($conn->query($sql)){
        echo "<script> alert ('Records added successfully!!!!')</script>";
    } 
    else{
        echo "<script> alert ('ERROR: Could not able to execute the query. ')</script>" ;
    }

?>