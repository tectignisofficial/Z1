<?php
include('include/config.php');

if(isset($_GET['email'])){
    $email=mysqli_real_escape_string($conn,$_GET['email']);
    $sql=mysqli_query($conn,"UPDATE `customers` SET `email_verify`='1'  where email='$email'");
    if($sql=1){
        header("location:login.php");
    }
    }
    ?>