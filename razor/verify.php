<?php

session_start();
include("config.php");
$id=$_SESSION['id'];
include('razconf.php');
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $id=$_SESSION['customerid'];
    $rid=$_SESSION['razorpay_order_id'];
    $payment_id=$_POST['razorpay_payment_id'];
    $email=$_SESSION['email'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d H:i:s');
    if(isset($_SESSION['shopping_cart'])){
        foreach($_SESSION['shopping_cart'] as $keys => $values){
            $product=$values['name'];
            $qua=$values['quantity'];
            $q=mysqli_query($conn," INSERT INTO `orders`(`order_no`, `order_date`, `customer`, `payment_method`, `order_status`, `product`, `quantity`, `discount`) VALUES ('$rid','$date','$id','razorpay','1','$product','$qua','20%','')");
        }
    }
    else{
        $product=$_SESSION['productname'];
            $qua=$_SESSION['quantity'];
        $q=mysqli_query($conn," INSERT INTO `orders`(`order_no`, `order_date`, `customer`, `payment_method`, `order_status`, `product`, `quantity`, `discount`) VALUES ('$rid','$date','$id','razorpay','1','$product','$qua','20%','')");
    }
    
   
    if($q)
    {
        echo "Payment Successful";
    }
    else
    {
        echo "Payment Failed";
    }
}
else
{
    echo "<p>Your payment failed</p>
             <p>{$error}</p>";
}

