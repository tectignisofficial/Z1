<?php 
session_start();
$message='';
include('include/config.php');
// $order=$_GET['order'];
// $sql=mysqli_query($conn,"select * from orders inner join customers on customers.id=orders.customer where orders.id='$order'");
// $arr=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/about-us.html   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order Tracking &ndash; Z1KneeBrace</title>
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
    <style>
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }

        .group {
            position: relative;
            margin-bottom: 45px;
        }

        .inputgroup {
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            display: block;
            border: none;
            border-bottom: 1px solid #757575;
        }

        .inputgroup:focus {
            outline: none;
        }

        /* LABEL ======================================= */
        .label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        /* active state */
        .inputgroup:focus~label,
        .inputgroup:valid~label {
            top: -20px;
            font-size: 14px;
            color: #0d0e0e;
        }

        /* BOTTOM BARS ================================= */
        .bar {
            position: relative;
            display: block;
            color:black;
        }

        .bar:before,
        .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #0d0e0e;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }

        /* active state */
        .inputgroup:focus~.bar:before,
        .inputgroup:focus~.bar:after {
            width: 50%;
        }

        /* HIGHLIGHTER ================================== */
        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }

        /* active state */
        input:focus~.highlight {
            -webkit-animation: inputHighlighter 0.3s ease;
            -moz-animation: inputHighlighter 0.3s ease;
            animation: inputHighlighter 0.3s ease;
        }

        /* ANIMATIONS ================ */
        @-webkit-keyframes inputHighlighter {
            from {
                background: #0d0e0e;
            }

            to {
                width: 0;
                background: transparent;
            }
        }

        @-moz-keyframes inputHighlighter {
            from {
                background: #0d0e0e;
            }

            to {
                width: 0;
                background: transparent;
            }
        }

        @keyframes inputHighlighter {
            from {
                background: #0d0e0e;
            }

            to {
                width: 0;
                background: transparent;
            }
        }
        .orderpara{
            padding-bottom: 30px;
            font-size: initial;
        }
    </style>
</head>

<body class="page-template belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <?php include("include/header.php");?>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Order Tracking</h1>
                        <p><a href="index">Home</a> / <span>Order Tracking</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">
                <?php if($message){?>
                <div class="alert alert-danger">
                    <p class="orderpara"><?php echo $message; ?></p>
                </div>
                <?php } ?>
                <p class="orderpara">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col ">
                        <div class="mb-4">
                            <form method="post"  id="CustomerLoginForm" accept-charset="UTF-8"
                                class="contact-form">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="group">
                                            <input type="text" class="inputgroup" name="oderid" required>
                                            <span class="highlight" ></span>
                                            <span class="bar"></span>
                                            <label class="label">Order Id</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="group">
                                            <input type="email" name="email" class="inputgroup" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="label">Billing Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" name="track" class="btn mb-3" value="Track">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            
            if(isset($_POST['track'])){ 
                $oderid=$_POST['oderid'];
                $emailid=$_POST['email'];
                $sql=mysqli_query($conn,"select * from orders inner join customers on orders.customer=customers.id where orders.order_no='$oderid' and customers.email='$emailid'");
                $arr=mysqli_fetch_array($sql);
                $order=$arr['order_no'] ?? null;
                $email=$arr['email'] ?? null;
                if(($oderid==$order) && ($emailid==$email)){
                ?>
            <div class="container mt-5">
                <article class="card">
                    <header class="card-header"> My Orders / Tracking </header>
                    <div class="card-body">
                        <h6>Order ID: <?= $arr['order_no'] ?></h6>
                        <article class="card">
                            <div class="card-body row">
                                <!-- <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div> -->
                                <div class="col"> <strong>Order Date:</strong> <br> <?= $arr['order_date']; ?> </div>
                                <div class="col"> <strong>Courier Name:</strong> <br> <?= $arr['enter']; ?> </div>
                                <div class="col"> <strong>Tracking Id :</strong> <br> <?= $arr['tracking_id']?> </div>
                            </div>
                        </article>


                            <a href="https://www.fedex.com/fedextrack/system-error?trknbr=<?= $arr['tracking_id']?>" class="btn btn-warning" > <i class="fa fa-chevron-right"></i>
                            Track Now</a>
                    </div>
                </article>
            </div>
<?php }else{
    $message='Sorry, the order could not be found. Please contact us if you are having difficulty finding your order details.';
    echo '<div class="container"><div class="alert alert-danger">
    <span class="">Sorry, the order could not be found. Please contact us if you are having difficulty finding your order details.</span>
</div></div>';
} } ?>
        </div>
        <!--End Body Content-->

        <!--Footer-->
        <?php include("include/footer.php");?>
        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <!-- <script src="assets/js/vendor/jquery-3.3.1.min.js"></script> -->
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

<!-- belle/about-us.html   11 Nov 2019 12:44:39 GMT -->

</html>