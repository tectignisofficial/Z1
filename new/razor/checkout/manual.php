<?php

include('../include/config.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout &ndash; Belle Multipurpose Bootstrap 4 Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body class="page-template belle">
    <div class="pageWrapper">

        <!--End Mobile Menu-->
<!--header-->
                <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Review Order</h1>
                        <p><a href="index.php">Home</a> / <span>Review Order</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">

                <div class="row billing-fields">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 sm-margin-30px-bottom">
                        <div class="create-ac-content bg-light-gray padding-20px-all">
                           

                            <div id="address" class="address tab-pane mb-4">


<div style="float:right">
       <button class="btn" id="rzp-button1" value="Place order" type="submit">Place order</button>
</div>

                             
                            


                           
                                <div class="row">
                                    <div class="col-6">
                                    <?php
$id1=$_SESSION['customerid'];
$sql1=mysqli_query($conn,"select * from billing_address where customer_id='$id1'");
$arr1=mysqli_fetch_array($sql1);
?>
                                        <h4 class="billing-address">Billing address</h4>

                                        <p><?= $arr1['address1'] ?? null ?></p>
                                        <p><?= $arr1['address2'] ?? null ?></p>
                                        <p><?= $arr1['city'] ?? null ?></p>
                                        <p><?= $arr1['state'] ?? null ?></p>
                                        <p><?= $arr1['country'] ?? null ?></p>
                                    </div>
                                    <div class="col-6">
<?php
$id=$_SESSION['addressid'];
$sql=mysqli_query($conn,"select * from shipping_address where id='$id'");
$arr=mysqli_fetch_array($sql);
?>
                                        <h4 class="billing-address">Shipping address</h4>
                                        <div>
                                <h2><?= $arr['name'] ?></h2>
                                </div>
                                <p><?= $arr['house_building'].','.$arr['road_area_colony'].', Near by'.$arr['landmark'].','.$arr['city'].','.$arr['state'].','.$arr['country'].','.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                    </div>
                                </div>

                            </div>

                            <h4 class="billing-address">Product details</h4>
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td class="text-left">Spike Jacket</td>
                                        <td>$99</td>
                                        <td>S</td>
                                        <td>1</td>
                                        <td><?php echo $_SESSION['total']; ?></td>
                                    </tr> -->
                                    <?php
                                         if(!empty($_SESSION['shopping_cart'])){
                                            $total=0;
                                            foreach($_SESSION['shopping_cart'] as $keys => $values){
                                        ?>
                                            <tr>
                                                <td class="text-left"><?= $values['name']; ?></td>
                                                <td><?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.number_format($values['price'] * $_SESSION['USD'],2).'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($values['price'],2);?>
                                                            <?php } ?></td>
                                                <td><?= $values['option1']; ?></td>
                                                <td><?= $values['quantity']; ?></td>
                                                <td><i class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i><?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['quantity'] * $values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($values['quantity'] * $values['price'],2 )?>
                                                            <?php } ?></td>
                                            </tr>
                                            <?php  
                                if(isset($_SESSION['USD'])){
                                    $total= $total + ($values['quantity'] * $values['price'] * $_SESSION['USD']);  
                                }
                                else{

                                    $total= $total + ($values['quantity'] * $values['price']);  }
                             
                           ?>
                                            <?php } } 
                                             else{ ?>
                                                <tr>
                                                <td class="text-left"><?= $_SESSION['productname']; ?></td>
                                                <td><?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.$_SESSION['total'] * $_SESSION['USD'].'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($_SESSION['total']);?>
                                                    <?php } ?></td>
                                                <td><?= $_SESSION['option1']; ?></td>
                                                <td><?= $_SESSION['quantity']; ?></td>
                                                <td><i
                                                        class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i><?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($_SESSION['quantity'] * $_SESSION['total']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                                    <?php echo number_format($_SESSION['quantity'] * $_SESSION['total'],2 )?>
                                                    <?php } ?></td>
                                            </tr>
                                            <?php 
                                            $total=0; 
                                if(isset($_SESSION['USD'])){
                                    $total = $_SESSION['total'] * $_SESSION['quantity'] * $_SESSION['USD'];  
                                }
                                else{

                                    $total = $_SESSION['total'] * $_SESSION['quantity'] ; }
                             
                           ?>
                                         <?php } ?>
                                            <tr>
                                                <td colspan="4">Subtotal</td>
                                                <td><?php
                                                 if(isset($_SESSION['USD'])){
                                                    echo '<i class=
                                                    "'.$_SESSION['icon'].'"></i>'.number_format($total,2);  
                                                }
                                                else{
                                                    echo number_format($total,2); }
                                                 ?></td>
                                            </tr>
                                </tbody>
                            </table>

                            <h4 class="billing-address">Payment Method</h4>
                            <div class="row p-4">

                                <h5>Razorypay</h5>
                                <div style="float:right" class="ml-3">
       <a class="btn" href="../index.php" id="rzp-button1" value="Place order" type="submit">back to shopping</a>
</div>
                               
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!--End Body Content-->

        <!--Footer-->

        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/vendor/jquery.cookie.js"></script>
        <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="../assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="..assets/js/plugins.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/lazysizes.js"></script>
        <script src="../assets/js/main.js"></script>
    </div>
</body>

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

</html>
<!-- <button id="rzp-button1">Pay with Razorpay</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>