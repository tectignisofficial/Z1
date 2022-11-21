<?php 
session_start();
include_once 'include/config.php';

$pid = $_SESSION['product_id'];


// $insert = $db->query("UPDATE product SET status='cancelled' where id='".$pid."'");
// session_destroy();
header('location:shop.php');
?>

        <!-- <h1 class="error">Your PayPal Transaction has been Canceled</h1>
    <a href="index.php" class="btn-link">Back to Home</a> -->