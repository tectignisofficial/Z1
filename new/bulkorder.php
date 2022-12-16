<?php
session_start();
if(!isset($_SESSION['customerid'])) 
{
 header("Location:login.php"); 
}

include('include/config.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/about-us.html   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bulk Orders &ndash; Z1KneeBrace</title>
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
                        <h1 class="page-width">Bulk Order</h1>
                        <p><a href="index">Home</a> / <span>Bulk Order</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">

                <div class="row">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                            <div class="mb-4">
                                <form method="post" action="api.php" id="CustomerLoginForm" accept-charset="UTF-8"
                                    class="contact-form">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="FirstName">Name</label>
                                                <input type="text" name="first_name" placeholder="Your Name"
                                                    id="FirstName" autofocus="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="LastName">Company Name</label>
                                                <input type="text" name="company_name" placeholder="Your Company Name"
                                                    id="LastName" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerEmail">Email</label>
                                                <input type="email" name="email" placeholder="Your Email"
                                                    id="CustomerEmail" class="" autocorrect="off" autocapitalize="none"
                                                    autofocus="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Phone</label>
                                                <input type="text" value="" name="phone" placeholder="Phone" class=""
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Address</label>
                                                <input type="text" value="" name="Address" placeholder="Address"
                                                    class="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Street Address</label>
                                                <input type="text" name="street_address" value=""
                                                    placeholder="Street Address" class="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Country</label>
                                                    <select name="country" class="countries form-control"
                                                        id="countryId" required>
                                                        <option value="">Select Country</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">State</label>
                                                    <select name="state" class="states form-control" id="stateId" required>
                                                        <option value="">Select State</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">City</label>
                                                    <select name="city" class="cities form-control" id="cityId" required>
                                                        <option value="">Select City</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">ZIP/Postal ode</label>
                                                <input type="text" name="zip" value="" placeholder="ZIP/Postal ode"
                                                    class="" required>
                                            </div>
                                        </div>


                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Enquiry For Product</label>
                                                <input type="text" value="" name="enquiry"
                                                    placeholder="Enquiry For Product" class="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" name="bulk_order" class="btn mb-3" value="Create">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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