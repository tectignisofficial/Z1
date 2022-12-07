<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
session_start();
include('include/config.php');
/* 
 * PayPal and database configuration 
 */ 
if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'])==='on')
$url='https://';
else
$url='http://';
$url1=$_SERVER['SERVER_NAME'];

  
// PayPal configuration 
define('PAYPAL_ID', 'sb-vbt0e17808320@business.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost:8000/Z1/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost:8000/Z1/index.php'); 
define('PAYPAL_CURRENCY', $_SESSION['myselect']); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payment &ndash; Z1kneebrace</title>
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
    <style>
        @media screen and (max-width:768px){
            .table-responsive {
    display: block !important;
}
        }
        .table-responsive{

    display: inline-table;

        }
    </style>
</head>

<body class="page-template belle">
    <div class="pageWrapper">

        <!--End Mobile Menu-->
<!--header-->
                <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
			<div class="page-title">
                <div class="wrapper headinghead">
                        <h1 class="page-width">Review Order</h1>
                        <p><a href="../index.php">Home</a> / <span>Review Order</span></p>
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
<form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                    <input type="hidden" name="business" id="paypal_id" value="<?php echo PAYPAL_ID; ?>">
					
                    <!-- Important For PayPal Checkout -->
                    <input type="hidden" value="<?php echo $_SESSION['total']; ?>" name="amount">
                    <input type="hidden" name="currency_code" id="currency" value="<?php echo PAYPAL_CURRENCY; ?>">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
					<br><br>
                    <!-- Display the payment button. -->
                    <input type="submit" name="submit" class="btn" style="margin-top:-34px;" value="Place order">
                </form>
</div>
                           
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                    <?php
                                    $id1=$_SESSION['customerid'];
                                    $sql1=mysqli_query($conn,"select * from billing_address where customer_id='$id1'");
                                    $arr1=mysqli_fetch_array($sql1);
                                    ?>
                                        <h2 class="billing-address">Billing address</h2>
                                        <p><?= $arr1['address1'] ?? null ?></p>
                                        <p><?= $arr1['address2'] ?? null ?></p>
                                        <p><?= $arr1['city'] ?? null ?></p>
                                        <p><?= $arr1['state'] ?? null ?></p>
                                        <p><?= $arr1['country'] ?? null ?></p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <?php
                                    $id=$_SESSION['addressid'];
                                    $sql=mysqli_query($conn,"select * from shipping_address where id='$id'");
                                    $arr=mysqli_fetch_array($sql);
                                    ?>
                                        <h2 class="billing-address">Shipping address</h2>
                                        <div>
                                <h3><?= $arr['name'] ?></h3>
                                </div>
                                <p><?= $arr['house_building'].','.$arr['road_area_colony'].', Near by'.$arr['landmark'].','.$arr['city'].','.$arr['state'].','.$arr['country'].','.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                    </div>
                                </div>

                            </div>

                            <h4 class="billing-address">Product details</h4>
                            <table class=" table-responsive bg-white table table-bordered table-hover text-center">
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

                            <h5 class="billing-address">Payment Method - Razorypay</h5>
                            <div class="row p-4">
                                <div style="float:right" class="ml-3">
                                <a class="btn" href="index.php" id="rzp-button1" value="Place order" type="submit">back to shopping</a>
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

    <script type="text/javascript">
    // $(document).ready(function(){
    //     $("#paypal_form").submit(function(){
    //         let paypal_id=$('#paypal_id').val();
    //     let amount=$('#amount').val();
    //     let currency=$('#currency').val();

    //     $.ajax({
    //         url:'insertData.php',
    //         method:'POST',
    //         data:{
    //             paypal_id:paypal_id,
    //             amount:amount,
    //             currency:currency
    //         },
    //         success: function(res){
    //             alert(res);
    //         }
    //     })
    //     })
        
    // })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script></body>

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->

</html>
<!-- <button id="rzp-button1">Pay with Razorpay</button> -->
