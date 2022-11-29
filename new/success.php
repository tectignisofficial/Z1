<?php 
session_start();
include_once 'include/config.php'; 
// include_once 'dbConnect.php';
 
if(isset($_GET['PayerID'])){ 
    echo "<h1>Your Payment has been successfull</h1>";
$currency=$_SESSION['myselect'];
$paypal_id=$_GET['PayerID'];
$id=$_SESSION['customerid'];
$email=$_SESSION['email'];
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i:s');
if(isset($_SESSION['shopping_cart'])){
    $addressid=$_SESSION['addressid'];
    // $amount=$_SESSION['total'];
   
    foreach($_SESSION['shopping_cart'] as $keys => $values){
        $product=$values['name'];
        $size=$values['option1'];
        $qua=$values['quantity'];
        $amount=$values['price'];
        $unique_id = time() . mt_rand() ;
        $ssql=mysqli_query($conn,"select * from stock where product_name='$product' and value='$size'");
        $fetch=mysqli_fetch_array($ssql);
        $tstock=($fetch['stock']-$qua);
        $q=mysqli_query($conn," INSERT INTO `orders`(`order_no`, `order_date`, `customer`, `payment_method`, `order_status`, `product`, `quantity`, `discount`,`address_id`,`size`,`order_id`,`payment_status`,`payment_id`,`amount`,`payment_currency`) VALUES ('1','$date','$id','paypal','Processing','Completed','$product','$qua','20%','$addressid','$size','$unique_id','$paypal_id','$amount','$currency')");

        $usql=mysqli_query($conn,"update `stock` SET `stock`='$tstock' WHERE product_name='$product' and value='$size'");
    }
}
else{
    $addressid=$_SESSION['addressid'];
    $amount=$_SESSION['total'];
    $product=$_SESSION['productname'];
    $size=$_SESSION['option1'];
    $qua=$_SESSION['quantity'];
    $unique_id = time() . mt_rand() ;
    $ssql=mysqli_query($conn,"select * from stock where product_name='$product' and value='$size'");
    $fetch=mysqli_fetch_array($ssql);
    $tstock=($fetch['stock']-$qua);
    $q=mysqli_query($conn," INSERT INTO `orders`(`order_no`, `order_date`, `customer`, `payment_method`, `order_status`,`payment_status`, `product`, `quantity`, `discount`,`address_id`,`size`,`order_id`,`payment_id`,`amount`,`payment_currency`) VALUES ('1','$date','$id','paypal','Processing','Completed','$product','$qua','20%','$addressid','$size','$unique_id','$paypal_id','$amount','$currency')");

    $usql=mysqli_query($conn,"update `stock` SET `stock`='$tstock' WHERE product_name='$product' and value='$size'");
}

}
else{
    echo "<h1>Your Payment has been failed</h1>";
}
session_destroy();
?>
<a href="index.php">Back to Home</a>