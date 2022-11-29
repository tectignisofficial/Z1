<?php
include("../include/config.php");
$sql=mysqli_query($conn,"select * from paymentmethod where name='razorpay'");
$arr=mysqli_fetch_array($sql);
$keyId= $arr['id/key'];
$keySecret= $arr['secrete'];
$displayCurrency= 'INR';

// Create the Razorpay Order
// error_reporting(E_All);
// ini_set('display_errors', 1);
?>