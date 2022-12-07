<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Order Form &ndash; Z1KneeBrace</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        .border-top-color {
            border-top: 1px solid #e6e6e6;
        }

        .pd-all-10-20 {
            padding: 10px 20px;
        }
    </style>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->

    <!-- END: Header-->
    <?php 
    include("include/header.php");
    ?>

    <!-- BEGIN: Main Menu-->
    <?php 
    include("include/sidebar.php");
    ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Orders</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ecommerce</li>
                                    <li class="breadcrumb-item active">Orders</li>
                                    <li class="breadcrumb-item active">Create an order</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Order information</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="fname" placeholder="Search or Create a new Product" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label" for="email-id">Note</label>
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email-id" placeholder="Note for order" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="table-wrap">
                                                            <table
                                                                class="table-normal table-none-border table-color-gray-text text-right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="color-subtext">Amount</td>
                                                                        <td class="pl10">0.00 ₹</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#" class="hover-underline"
                                                                                role="button"><span><i
                                                                                        class="fa fa-plus-circle"></i>
                                                                                    Add discount</span>
                                                                                <!----></a>
                                                                            <!---->
                                                                        </td>
                                                                        <td class="pl10">0.00 ₹</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#" class="hover-underline"
                                                                                role="button"><span><i
                                                                                        class="fa fa-plus-circle"></i>
                                                                                    Add shipping fee</span>
                                                                                <!----></a>
                                                                            <p class="mb0 font-size-8px">Default</p>
                                                                        </td>
                                                                        <td class="pl10">0.00 ₹</td>
                                                                    </tr>
                                                                    <tr class="text-no-bold">
                                                                        <td>Extra Charge</td>
                                                                        <td class="pl10"><input
                                                                                type="text" id="extra_charge"
                                                                                name="extra_charge" class="form-control"
                                                                                style="height: 30px; text-align: right; width: 70px;">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-no-bold">
                                                                        <td>Total amount</td>
                                                                        <td class="pl10">0.00 ₹</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pd-all-10-20 border-top-color">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                        <div class="flexbox-grid-default mt5 mb5">
                                                            <div class="flexbox-auto-left p-r10"><i
                                                                    class="fa fa-credit-card fa-1-5 color-blue"></i>
                                                            </div>
                                                            <div class="flexbox-auto-content">
                                                                <div class="text-upper ws-nm">Confirm payment and create
                                                                    order</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6 text-right"><button
                                                            type="reset" class="btn btn-primary me-1">Paid</button>
                                                        <button type="reset" class="btn btn-outline-secondary">Pay
                                                            Later</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Customer information</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <div class="input-group input-group-merge">

                                                            <input type="text" id="fname-icon" class="form-control"
                                                                name="fname-icon"
                                                                placeholder="Search or Create a Customer" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-9 offset-sm-3">
                                                <button type="reset" class="btn btn-primary me-1">Submit</button>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php")?>

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>