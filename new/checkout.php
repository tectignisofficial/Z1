<?php
session_start();
include('include/config.php');
if(isset($_POST['shipping_address'])){
    $fullName=mysqli_real_escape_string($conn,$_POST['fullName']) ?? null;
    $phone=mysqli_real_escape_string($conn,$_POST['number']);
    $home=mysqli_real_escape_string($conn,$_POST['home']);
    $road=mysqli_real_escape_string($conn,$_POST['road']);
    $pincode=$_POST['pincode'];
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $country_id=mysqli_real_escape_string($conn,$_POST['country_id']);
    $zone_id=mysqli_real_escape_string($conn,$_POST['zone_id']);
    $landmark=mysqli_real_escape_string($conn,$_POST['landmark']);
    $notes=mysqli_real_escape_string($conn,$_POST['notes']);
    $id=$_POST['id'];
    
    $sql=mysqli_query($conn,"INSERT INTO `shipping_address`(`name`, `phone`, `house_building`, `country`, `state`, `city`, `road_area_colony`, `pin_code`, `landmark`, `order_note`, `customer_id`) VALUES ('$fullName','$phone','$home','$country_id','$zone_id','$city','$road','$pincode','$landmark','$notes','$id')");

}
if(isset($_SESSION['myselect'])){
    if($_SESSION['myselect']=='INR'){
        if(isset($_POST['doneAddress'])){
            $_SESSION['addressid']=$_POST['prid'];
            header('location:razor/pay.php');
        }
    }
    else{
        if(isset($_POST['doneAddress'])){
            $_SESSION['addressid']=$_POST['prid'];
            header('location:paypal.php');
        }
    }
    
}
else{
if(isset($_POST['doneAddress'])){
    $_SESSION['addressid']=$_POST['prid'];
    header('location:razor/pay.php');
}
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/checkout.html 11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout &ndash; Z1KneeBrace</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/js/countrystatecity.js?v2"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- PHPGang top demo all pages2 -->
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</head>

<body class="page-template belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <?php include('include/header.php'); ?>

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Checkout</h1>
                        <p><a href="index.php">Home</a> / <span>Checkout</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="customer-box customer-coupon mb-2">
                            <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a
                                    href="#have-coupon" class="text-white text-decoration-underline"
                                    data-toggle="collapse">Click here to enter your code</a></h3>
                            <div id="have-coupon" class="collapse coupon-checkout-content">
                                <div class="discount-coupon">
                                    <div id="coupon" class="coupon-dec tab-pane active">
                                        <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                        <label class="required get" for="coupon-code"><span class="required-f">*</span>
                                            Coupon</label>
                                        <input id="coupon-code" required="" type="text" class="mb-3">
                                        <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="customer-box returning-customer">
                            <h3><i class="icon anm anm-user-al"></i> <a href="#customer-login" id="customer"
                                    class="text-white text-decoration-underline" data-toggle="collapse">Add Address</a>
                            </h3>
                            <div id="customer-login" class="collapse customer-content">

                                <!--form-->
                                <div class="create-ac-content bg-light-gray padding-20px-all">
                                    <form method="post">
                                        <fieldset>
                                            <h2 class="login-title mb-3">Shipping details</h2>
                                            <div class="row">
                                                <input type="hidden" name="id" value='<?= $_SESSION['customerid']; ?>'>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-firstname">Full Name <span
                                                            class="required-f">*</span></label>
                                                    <input name="fullName" value="" id="input-firstname" type="text">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-lastname">phone <span
                                                            class="required-f">*</span></label>
                                                    <input value="2" name="number" id="input-lastname" type="tel">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-email">House no./Building Name <span
                                                            class="required-f">*</span></label>
                                                    <input name="home" value="" id="input-email" type="text">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-telephone">Road name/Area/Colony <span
                                                            class="required-f">*</span></label>
                                                    <input name="road" value="" id="input-telephone" type="text">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                    <label for="input-company">Pin Code</label>
                                                    <input name="pincode" value="" id="input-company" type="number">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-country">Country <span
                                                            class="required-f">*</span></label>
                                                    <select name="country_id" class="countries form-control"
                                                        id="countryId">
                                                        <option value="">Select Country</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-zone">Region / State <span
                                                            class="required-f">*</span></label>
                                                    <select name="zone_id" class="states form-control" id="stateId">
                                                        <option value="">Select State</option>
                                                    </select> </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-address-1">City<span
                                                            class="required-f">*</span></label>
                                                    <select name="city" class="cities form-control" id="cityId">
                                                        <option value="">Select City</option>
                                                    </select>
                                                    <!-- <input name="city" value="" id="input-address-1" type="text"> -->
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                    <label for="input-postcode">Landmark <span
                                                            class="required-f">*</span></label>
                                                    <textarea class="form-control resize-both" rows="3"
                                                        name="landmark"></textarea>
                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                    <label for="input-company">Order Notes <span
                                                            class="required-f">*</span></label>
                                                    <textarea class="form-control resize-both" rows="3"
                                                        name="notes"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                    <button type="submit" name="shipping_address">Submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <?php
                    $id=$_SESSION['customerid'];
                    
                    $sql=mysqli_query($conn,"select * from shipping_address where customer_id='$id'");
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                        <div class="card mt-2" style="border:none;">
                            <form action="" method="post">

                                <div class="row d-flex">
                                    <div class="col-6">
                                        <h2><?= $arr['name'] ?></h2>
                                    </div>
                                    <div class="col-6">
                                        <!-- <input type="radio" name="prid" class="radioselect" value="<?= $arr['id'] ?>"style="float: right;"> -->
                                    </div>
                                </div>


                                <input type="hidden" name="prid" value="<?= $arr['id'] ?>">
                                <p><?= $arr['house_building'].','.$arr['road_area_colony'].', Near by'.$arr['landmark'].','.$arr['city'].','.$arr['state'].','.$arr['country'].','.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                <button type="submit" class="deliver btn btn-outline-primary" name="doneAddress">Deliver
                                    to this
                                    address</button>
                            </form>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                        <!--  -->
                        <div class="your-order-payment">
                            <div class="your-order">
                                <h2 class="order-title mb-4">Your Order</h2>

                                <div class="table-responsive-sm order-table">
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

                                            <?php

                                         if(!empty($_SESSION['shopping_cart'])){
                                            $total=0;
                                            foreach($_SESSION['shopping_cart'] as $keys => $values){
                                        ?>
                                            <tr>
                                                <td class="text-left"><?= $values['name']; ?></td>
                                                <td><?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.$values['price'] * $_SESSION['USD'].'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo $values['price'];?>
                                                    <?php } ?></td>
                                                <td><?= $values['option1']; ?></td>
                                                <td><?= $values['quantity']; ?></td>
                                                <td><i
                                                        class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i><?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['quantity'] * $values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                                    <?php echo number_format($values['quantity'] * $values['price'],2 )?>
                                                    <?php } ?></td>
                                            </tr>
                                            <?php  
                                if(isset($_SESSION['USD'])){
                                    $total= $total + ($values['quantity'] * $values['price'] * $_SESSION['USD']);  
                                }
                                else{

                                    $total= $total + ($values['quantity'] * $values['price']);  }
                             
                           ?>
                                            <?php } } else{ ?>
                                            <tr>
                                                <td class="text-left"><?= $_SESSION['productname']; ?></td>
                                                <td><?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.$_SESSION['total'] * $_SESSION['USD'].'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                                    <?php echo $_SESSION['total'];?>
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
                                        </tbody>
                                        <tfoot class="font-weight-600">
                                            <tr>
                                                <td colspan="4" class="text-right">Total</td>
                                                <td><?php if(isset($_SESSION['USD'])){ echo "<i class='".$_SESSION['icon']."'></i>"; }else{
                            echo "<i class='fa fa-inr'></i> ";
                        }  echo number_format($total,2);?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <hr />
                            <div class="your-payment">
                                <h2 class="payment-title mb-3">payment method</h2>

                                <div class="card">
                                    <div class="card-header">
                                        Razorpay
                                        <?php
if(isset($_SESSION['myselect'])){ ?>
                                        <input type="radio" name="" class="mt-1" <?php
                                                if($_SESSION['myselect']=='INR'){ echo 'checked'; }else{ echo 'disabled'; }
                                                ?> id="">
                                        <?php }else { ?>
                                        <input type="radio" name="" checked class="mt-1" id="">
                                        <?php }
?>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Paypal
                                        <?php
if(isset($_SESSION['myselect'])){ ?>
                                        <input type="radio" <?php
                                                 if($_SESSION['myselect']=='GBP' || $_SESSION['myselect']=='CAD' || $_SESSION['myselect']=='USD' || $_SESSION['myselect']=='AUD'){ echo 'checked'; }else{ echo 'disabled'; }
                                                ?> name="">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row billing-fields">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    </div>
                </div>
            </div>

        </div>
        <!--End Body Content-->

        <!--Footer-->
        <?php include("include/footer.php");?>
        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <!-- <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/jquery.cookie.js"></script> -->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/lazysizes.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
    <script>
        $(document).ready(function () {
            if ($(".radioselect").is(":checked")) {
                $(this).closest('.deliver').show();
            }
        })
    </script>
</body>

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

</html>