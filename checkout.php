<?php
session_start();
include('include/config.php');
if(isset($_POST['shipping_address'])){
    $fullName=mysqli_real_escape_string($conn,$_POST['fullName']);
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
if(isset($_POST['doneAddress'])){
    $_SESSION['addressid']=$_POST['prid'];
    header('location:razor/pay.php');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/checkout.html 11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Checkout</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">
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
                                                    <label for="input-address-1">City<span
                                                            class="required-f">*</span></label>
                                                    <input name="city" value="" id="input-address-1" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-country">Country <span
                                                            class="required-f">*</span></label>
                                                    <select name="country_id" id="input-country">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="244">Aaland Islands</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-zone">Region / State <span
                                                            class="required-f">*</span></label>
                                                    <select name="zone_id" id="input-zone">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="3513">Aberdeen</option>
                                                        <option value="3514">Aberdeenshire</option>
                                                        <option value="3515">Anglesey</option>
                                                        <option value="3516">Angus</option>
                                                    </select>
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
                                <div class="d-flex">
                                <h2><?= $arr['name'] ?></h2>
                                <input type="radio" name="prid" class="radioselect" value="<?= $arr['id'] ?>">
                                </div>
                                <input type="hidden" name="id" value="<?= $arr['id'] ?>">
                                <p><?= $arr['house_building'].','.$arr['road_area_colony'].', Near by'.$arr['landmark'].','.$arr['city'].','.$arr['state'].','.$arr['country'].','.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                <button type="submit" class="deliver" name="doneAddress">Deliver to this address</button>
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
                                            <?php } } ?>
                                            <!-- <tr>
                                            <td class="text-left">Argon Sweater</td>
                                            <td>$199</td>
                                            <td>M</td>
                                            <td>2</td>
                                            <td>$298</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Babydoll Bow Dress</td>
                                            <td>$299</td>
                                            <td>XL</td>
                                            <td>3</td>
                                            <td>$398</td>
                                        </tr> -->
                                        </tbody>
                                        <tfoot class="font-weight-600">
                                            <tr>
                                                <td colspan="4" class="text-right">Shipping </td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right">Total</td>
                                                <td><?php if(isset($_SESSION['USD'])){ echo "<i class='".$_SESSION['icon']."'></i>"; }else{
                            echo "<i class='fa fa-inr'></i> ";
                        } if($_SESSION['shopping_cart']){ echo number_format($total,2);
                        $_SESSION['total']=$total;
                        }else{ echo '0.00'; } ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <hr />

                            <div class="your-payment">
                                <h2 class="payment-title mb-3">payment method</h2>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion" class="payment-section">
                                            <div class="card mb-2">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse"
                                                        href="#collapseOne">Direct Bank Transfer </a>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p class="no-margin font-15">Make your payment directly into our
                                                            bank account. Please use your Order ID as the payment
                                                            reference. Your order won't be shipped until the funds have
                                                            cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse"
                                                        href="#collapseTwo">Cheque Payment</a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p class="no-margin font-15">Please send your cheque to Store
                                                            Name, Store Street, Store Town, Store State / County, Store
                                                            Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card margin-15px-bottom border-radius-none">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse"
                                                        href="#collapseThree"> PayPal </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p class="no-margin font-15">Pay via PayPal; you can pay with
                                                            your credit card if you don't have a PayPal account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse"
                                                        href="#collapseFour"> Payment Information </a>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <fieldset>
                                                            <div class="row">
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="input-cardname">Name on Card <span
                                                                            class="required-f">*</span></label>
                                                                    <input name="cardname" value=""
                                                                        placeholder="Card Name" id="input-cardname"
                                                                        class="form-control" type="text">
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="input-country">Credit Card Type <span
                                                                            class="required-f">*</span></label>
                                                                    <select name="country_id" class="form-control">
                                                                        <option value=""> --- Please Select ---
                                                                        </option>
                                                                        <option value="1">American Express</option>
                                                                        <option value="2">Visa Card</option>
                                                                        <option value="3">Master Card</option>
                                                                        <option value="4">Discover Card</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="input-cardno">Credit Card Number <span
                                                                            class="required-f">*</span></label>
                                                                    <input name="cardno" value=""
                                                                        placeholder="Credit Card Number"
                                                                        id="input-cardno" class="form-control"
                                                                        type="text">
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="input-cvv">CVV Code <span
                                                                            class="required-f">*</span></label>
                                                                    <input name="cvv" value=""
                                                                        placeholder="Card Verification Number"
                                                                        id="input-cvv" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label>Expiration Date <span
                                                                            class="required-f">*</span></label>
                                                                    <input type="date" name="exdate"
                                                                        class="form-control">
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <img class="padding-25px-top xs-padding-5px-top"
                                                                        src="assets/images/payment-img.jpg" alt="card"
                                                                        title="card" />
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="order-button-payment">
                                        <a href="order_details.php">
                                            <button class="btn" value="Place order" type="submit">Place order</button>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row billing-fields">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                        <!-- <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form>
                            <fieldset>
                                <h2 class="login-title mb-3">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                        <input name="firstname" value="" id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                        <input name="lastname" value="" id="input-lastname" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="email" value="" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                        <input name="telephone" value="" id="input-telephone" type="tel">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-company">Company</label>
                                        <input name="company" value="" id="input-company" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address <span class="required-f">*</span></label>
                                        <input name="address_1" value="" id="input-address-1" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                        <input name="address_2" value="" id="input-address-2" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city">City <span class="required-f">*</span></label>
                                        <input name="city" value="" id="input-city" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-postcode">Post Code <span class="required-f">*</span></label>
                                        <input name="postcode" value="" id="input-postcode" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-country">Country <span class="required-f">*</span></label>
                                        <select name="country_id" id="input-country">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Aaland Islands</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa</option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-zone">Region / State <span class="required-f">*</span></label>
                                        <select name="zone_id" id="input-zone">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="3513">Aberdeen</option>
                                            <option value="3514">Aberdeenshire</option>
                                            <option value="3515">Anglesey</option>
                                            <option value="3516">Angus</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                        <label class="form-check-label padding-15px-left">
                                            <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" rows="3"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div> -->

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <!-- <div class="your-order-payment">
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
                                        <tr>
                                            <td class="text-left">Spike Jacket</td>
                                            <td>$99</td>
                                            <td>S</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Argon Sweater</td>
                                            <td>$199</td>
                                            <td>M</td>
                                            <td>2</td>
                                            <td>$298</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Babydoll Bow Dress</td>
                                            <td>$299</td>
                                            <td>XL</td>
                                            <td>3</td>
                                            <td>$398</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <tr>
                                            <td colspan="4" class="text-right">Shipping </td>
                                            <td>$50.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total</td>
                                            <td>$845.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <hr />

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Direct Bank Transfer </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Cheque Payment</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card margin-15px-bottom border-radius-none">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> PayPal </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"> Payment Information </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                                <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                                <select name="country_id" class="form-control">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="1">American Express</option>
                                                                    <option value="2">Visa Card</option>
                                                                    <option value="3">Master Card</option>
                                                                    <option value="4">Discover Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                                                                <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label>Expiration Date <span class="required-f">*</span></label>
                                                                <input type="date" name="exdate" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <img class="padding-25px-top xs-padding-5px-top" src="assets/images/payment-img.jpg" alt="card" title="card" />
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-button-payment">
                                    <a href="order_details.php">
                                    <button class="btn" value="Place order" type="submit">Place order</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/jquery.cookie.js"></script>
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
        // $('.deliver').hide();
        $(document).on('click','.radioselect',function(){
    $(this).closest('.deliver').show();
});
    </script>
</body>

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

</html>