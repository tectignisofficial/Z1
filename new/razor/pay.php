<?php
session_start();
include('../include/config.php');
?>
<?php
$address_id=$_SESSION['addressid'];
$sql=mysqli_query($conn,"select * from shipping_address where id='$address_id'");
$arr=mysqli_fetch_array($sql);
$country=$arr['country'];


include('razconf.php');
include('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$api = new Api($keyId, $keySecret);

// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders

$id=$_SESSION['customerid'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
if(($country != 'Canada') && ($country != 'India') && ($country != 'United Kingdom') && ($country != 'United States')){
    $amount1=$_SESSION['total'];
    $amount=($amount1+200);
    $_SESSION['shippingFee']=$amount;
}
else{
    $amount=$_SESSION['total'];
}

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
    "name"              => "Zodiacal Overseas Pvt. Ltd.",
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

require("checkout/{$checkout}.php");

?>