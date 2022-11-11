<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$qss=mysqli_query($conn,"SELECT * FROM `client` WHERE `Client_Code`='$id'");
$ress=mysqli_fetch_array($qss);
?>
<h1>Summary</h1>
<table>
   
    <tr>
        <td>Firm Name</td>
        <td><?php echo $_SESSION['name']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_SESSION['email']; ?></td>
    </tr>
    <tr>
        <td>Mobile Number</td>
        <td><?php echo $_SESSION['phone']; ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><?php echo $_SESSION['price']; ?></td>
    </tr>
<div>Your Balance payment is : <?php echo $_SESSION['price'] ?></div>
<button id="rzp-button1">Continue</button>
</body>
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