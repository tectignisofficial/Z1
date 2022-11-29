<?php
session_start();
include('include/config.php');

if(isset($_POST['doneAddress'])){
    $_SESSION['addressid']=$_POST['id'];
}
?>
<?php
include('razor/razconf.php');
include('razor/razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$api = new Api($keyId, $keySecret);

// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders

$id=$_SESSION['customerid'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$amount=$_SESSION['total'];

// $_SESSION['id']=$id;
// $_SESSION['name']=$name;
// $_SESSION['email']=$email;
// $_SESSION['phone']=$phone;
// $_SESSION['price']=$amount;


$orderData = [
    'receipt'         => 3456,
    'amount'          => $amount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout='manual';

if(isset($_GET['checkout']) and in_array($_GET['checkout'],['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Z1",
    "description"       => "Live Transaction",
    "image"             => "https://realestate.tectignis.in/admin/dist/img/avatar1.jpeg",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("razor/checkout/{$checkout}.php");

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

        <!--End Mobile Menu-->
<?php include('include/config.php'); ?>
        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Review Order</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">

                <div class="row billing-fields">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 sm-margin-30px-bottom">
                        <div class="create-ac-content bg-light-gray padding-20px-all">
                           

                            <div id="address" class="address tab-pane mb-4">


<div style="float:right">
       <button class="btn" value="Place order" type="submit">Place order</button>
</div>

                             
                            


                           
                                <div class="row">
                                    <div class="col-6">

                                        <h4 class="billing-address">Billing address</h4>

                                        <p>address1</p>
                                        <p>'address2'</p>
                                        <p>'city'</p>
                                        <p>'state'</p>
                                        <p>'country'</p>
                                    </div>
                                    <div class="col-6">

                                        <h4 class="billing-address">Shipping address</h4>
                                        <p>'address1'</p>
                                        <p>'address2'</p>
                                        <p>'city'</p>
                                        <p>'state'</p>
                                        <p>'country'</p>
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

                            <h4 class="billing-address">Payment Method</h4>
                            <div class="row p-4">

                                <h5>Razorypay</h5>

                               
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