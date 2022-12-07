
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order View &ndash; Z1KneeBrace</title>
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

        <!--End Top Header-->
        <!--Header-->

        <!--End Header-->
        <!--Mobile Menu-->

        <?php include("include/header.php");?>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Your Order</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                        <form action="#" method="post" class="cart style2">
                            <table>
                                <thead class="cart__row cart__header">
                                    <tr>
                                        <th colspan="2" class="text-center">Product</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Total</th>
                                        <th class="action">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image"
                                                    src="assets/images/product-images/product-image1.jpg"
                                                    alt="Elastic Waist Dress - Navy / Small"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">Elastic Waist Dress </a>
                                            </div>

                                            <div class="cart__meta-text">
                                                Color: Navy<br>Size: Small<br>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">$735.00</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    45
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">$735.00</span></div>
                                        </td>

                                    </tr>
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image"
                                                    src="assets/images/product-images/product-image3.jpg"
                                                    alt="3/4 Sleeve Kimono Dress"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">3/4 Sleeve Kimono Dress</a>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">$735.00</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    aw
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">$735.00</span></div>
                                        </td>

                                    </tr>
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image"
                                                    src="assets/images/product-images/product-image6.jpg"
                                                    alt="Minerva Dress black"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">Minerva Dress black</a>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">$526.00</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    eer
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">$735.00</span></div>
                                        </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-left"><a href="shop.php"
                                                class="btn--link cart-continue"><i
                                                    class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>

                                    </tr>
                                </tfoot>
                            </table>



                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">

                        <div class="solid-border">
                            <div class="row">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                                        class="money">$735.00</span></span>
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

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->

</html>