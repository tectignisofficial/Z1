<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
?>
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
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include("include/header.php");?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include("include/sidebar.php");?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Congratulations 🎉 John!</h5>
                                    <p class="card-text font-small-3">You have won gold medal</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="#">$48.9k</a>
                                    </h3>
                                    <button type="button" class="btn btn-primary">View Sales</button>
                                    <img src="app-assets/images/illustration/badge.svg" class="congratulation-medal"
                                        alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                                    <p class="card-text font-small-3 mb-0">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">$945</h4>
                                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="row match-height">
                                <!-- Bar Chart - Orders -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card">
                                        <div class="card-body pb-50">
                                            <h6>Orders</h6>
                                            <h2 class="fw-bolder mb-1">2,76k</h2>
                                            <div id="statistics-order-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Bar Chart - Orders -->

                                <!-- Line Chart - Profit -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card card-tiny-line-stats">
                                        <div class="card-body pb-50">
                                            <h6>Profit</h6>
                                            <h2 class="fw-bolder mb-1">6,24k</h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Line Chart - Profit -->

                                <!-- Earnings Card -->
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="card earnings-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4 class="card-title mb-1">Earnings</h4>
                                                    <div class="font-small-2">This Month</div>
                                                    <h5 class="mb-1">$4055.56</h5>
                                                    <p class="card-text text-muted font-small-2">
                                                        <span class="fw-bolder">68.2%</span><span> more earnings than
                                                            last month.</span>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <div id="earnings-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <!-- Revenue Report Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-revenue-budget">
                                <div class="row mx-0">
                                    <div class="col-md-8 col-12 revenue-report-wrapper">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center me-2">
                                                    <span
                                                        class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Earning</span>
                                                </div>
                                                <div class="d-flex align-items-center ms-75">
                                                    <span
                                                        class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Expense</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="revenue-report-chart"></div>
                                    </div>
                                    <div class="col-md-4 col-12 budget-wrapper">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                2020
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">2020</a>
                                                <a class="dropdown-item" href="#">2019</a>
                                                <a class="dropdown-item" href="#">2018</a>
                                            </div>
                                        </div>
                                        <h2 class="mb-25">$25,852</h2>
                                        <div class="d-flex justify-content-center">
                                            <span class="fw-bolder me-25">Budget:</span>
                                            <span>56,800</span>
                                        </div>
                                        <div id="budget-chart"></div>
                                        <button type="button" class="btn btn-primary">Increase Budget</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->
                    </div>

                    <div class="row match-height">
                        <!-- Company Table Card -->

                        <!--/ Company Table Card -->

                        <!-- Developer Meetup Card -->
                        <!-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">THU</h6>
                                            <h3 class="mb-0">24</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">Developer Meetup</h4>
                                            <p class="card-text mb-0">Meet world popular developers</p>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Central Park</h6>
                                            <small>Manhattan, New york City</small>
                                        </div>
                                    </div>
                                    <div class="avatar-group">
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                            <img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                            <img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                            <img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                            <img src="app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                            <img src="app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--/ Developer Meetup Card -->

                        <!-- Browser States Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-browser-states">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Product Status</h4>
                                        <p class="card-text font-small-2">Counter August 2020</p>
                                    </div>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                            data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="app-assets/images/icons/google-chrome.png" class="rounded me-1"
                                                height="30" alt="Google Chrome" />
                                            <h6 class="align-self-center mb-0">Z1 K2 Comfortline Knee Orthosis</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold text-body-heading me-1">54.4%</div>
                                            <div id="browser-state-chart-primary"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="app-assets/images/icons/mozila-firefox.png" class="rounded me-1"
                                                height="30" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Z1 K4 OsteoAlign Knee Orthosis</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold text-body-heading me-1">6.1%</div>
                                            <div id="browser-state-chart-warning"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="app-assets/images/icons/apple-safari.png" class="rounded me-1"
                                                height="30" alt="Apple Safari" />
                                            <h6 class="align-self-center mb-0">Z1 K6 Dezire Knee Orthosis</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold text-body-heading me-1">14.6%</div>
                                            <div id="browser-state-chart-secondary"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="app-assets/images/icons/internet-explorer.png"
                                                class="rounded me-1" height="30" alt="Internet Explorer" />
                                            <h6 class="align-self-center mb-0">Z1 K8- The OA Unloader</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold text-body-heading me-1">4.2%</div>
                                            <div id="browser-state-chart-info"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="app-assets/images/icons/opera.png" class="rounded me-1"
                                                height="30" alt="Opera Mini" />
                                            <h6 class="align-self-center mb-0">Z1 K2 and K6 Knee Brace Padding Set</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold text-body-heading me-1">8.4%</div>
                                            <div id="browser-state-chart-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Browser States Card -->

                        <!-- Goal Overview Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Goal Overview</h4>
                                    <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                                </div>
                                <div class="card-body p-0">
                                    <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                                    <div class="row border-top text-center mx-0">
                                        <div class="col-6 border-end py-1">
                                            <p class="card-text text-muted mb-0">Completed</p>
                                            <h3 class="fw-bolder mb-0">786,617</h3>
                                        </div>
                                        <div class="col-6 py-1">
                                            <p class="card-text text-muted mb-0">In Progress</p>
                                            <h3 class="fw-bolder mb-0">13,561</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Goal Overview Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">Transactions</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                            data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Wallet</h6>
                                                <small>Starbucks</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $74</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Bank Transfer</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $480</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-danger rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Paypal</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $590</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-warning rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Mastercard</h6>
                                                <small>Ordered Food</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $23</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-info rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Transfer</h6>
                                                <small>Refund</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $98</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card invoice-list-wrapper">
                                    <div class="card-datatable table-responsive">
                                        <div id="DataTables_Table_0_wrapper"
                                            class="dataTables_wrapper dt-bootstrap5 no-footer">
                                            <div class="row d-flex justify-content-between align-items-center m-1">
                                                <div class="col-lg-6 d-flex align-items-center">
                                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                                        <label>Show <select name="DataTables_Table_0_length"
                                                                aria-controls="DataTables_Table_0" class="form-select">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select></label></div>
                                                    <div
                                                        class="dt-action-buttons text-xl-end text-lg-start text-lg-end text-start ">
                                                        <div class="dt-buttons"><button
                                                                class="dt-button btn btn-primary btn-add-record ms-2"
                                                                tabindex="0" aria-controls="DataTables_Table_0"
                                                                type="button"><span>Add Record</span></button> </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                        <label>Search<input type="search" class="form-control"
                                                                placeholder="Search Invoice"
                                                                aria-controls="DataTables_Table_0"></label></div>
                                                    <div class="invoice_status ms-sm-2"><select id="UserRole"
                                                            class="form-select ms-50 text-capitalize">
                                                            <option value=""> Select Status </option>
                                                            <option value="Downloaded" class="text-capitalize">
                                                                Downloaded</option>
                                                            <option value="Draft" class="text-capitalize">Draft</option>
                                                            <option value="Paid" class="text-capitalize">Paid</option>
                                                            <option value="Partial Payment" class="text-capitalize">
                                                                Partial Payment</option>
                                                            <option value="Past Due" class="text-capitalize">Past Due
                                                            </option>
                                                            <option value="Sent" class="text-capitalize">Sent</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <table class="invoice-list-table table dataTable no-footer dtr-column"
                                                id="DataTables_Table_0" role="grid"
                                                aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="control sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="display: none;"
                                                            aria-label=": activate to sort column ascending"></th>
                                                        <th class="sorting sorting_desc" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 46px;"
                                                            aria-label="#: activate to sort column ascending"
                                                            aria-sort="descending">#</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 42px;"
                                                            aria-label=": activate to sort column ascending"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trending-up">
                                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18">
                                                                </polyline>
                                                                <polyline points="17 6 23 6 23 12"></polyline>
                                                            </svg></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 270px;"
                                                            aria-label="Client: activate to sort column ascending">
                                                            Client</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 73px;"
                                                            aria-label="Total: activate to sort column ascending">Total
                                                        </th>
                                                        <th class="text-truncate sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 130px;"
                                                            aria-label="Issued Date: activate to sort column ascending">
                                                            Issued Date</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 98px;"
                                                            aria-label="Balance: activate to sort column ascending">
                                                            Balance</th>
                                                        <th class="cell-fit sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 80px;" aria-label="Actions">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #5089</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Sent<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 05/09/2019</span>"
                                                                aria-label="<span>Sent<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 05/09/2019</span>">
                                                                <div class="avatar avatar-status bg-light-secondary">
                                                                    <span class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-send avatar-icon">
                                                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                            <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                            </polygon>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar bg-light-primary me-50">
                                                                        <div class="avatar-content">JK</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Jamal
                                                                        Kerrod</h6><small
                                                                        class="text-truncate text-muted">jamalkerrod@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">3077</span>$3077</td>
                                                        <td><span class="d-none">20190509</span>09 May 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #5041</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Sent<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 11/19/2019</span>"
                                                                aria-label="<span>Sent<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 11/19/2019</span>">
                                                                <div class="avatar avatar-status bg-light-secondary">
                                                                    <span class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-send avatar-icon">
                                                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                            <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                            </polygon>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/1-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Shamus
                                                                        Tuttle</h6><small
                                                                        class="text-truncate text-muted">shamustuttle@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">2230</span>$2230</td>
                                                        <td><span class="d-none">20191119</span>19 Nov 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #5027</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 09/25/2019</span>"
                                                                aria-label="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 09/25/2019</span>">
                                                                <div class="avatar avatar-status bg-light-warning"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-pie-chart avatar-icon">
                                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                                                                            </path>
                                                                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/1-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Devonne
                                                                        Wallbridge</h6><small
                                                                        class="text-truncate text-muted">devonnewallbridge@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">2787</span>$2787</td>
                                                        <td><span class="d-none">20190925</span>25 Sep 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #5024</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> -$202<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 08/02/2019</span>"
                                                                aria-label="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> -$202<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 08/02/2019</span>">
                                                                <div class="avatar avatar-status bg-light-warning"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-pie-chart avatar-icon">
                                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                                                                            </path>
                                                                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/2-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Ariella
                                                                        Filippyev</h6><small
                                                                        class="text-truncate text-muted">ariellafilippyev@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">5285</span>$5285</td>
                                                        <td><span class="d-none">20190802</span>02 Aug 2019</td>
                                                        <td><span class="d-none">-$202</span>-$202</td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #5020</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Downloaded<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 12/15/2019</span>"
                                                                aria-label="<span>Downloaded<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 12/15/2019</span>">
                                                                <div class="avatar avatar-status bg-light-info"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-arrow-down-circle avatar-icon">
                                                                            <circle cx="12" cy="12" r="10"></circle>
                                                                            <polyline points="8 12 12 16 16 12">
                                                                            </polyline>
                                                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/10-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Roy
                                                                        Southerell</h6><small
                                                                        class="text-truncate text-muted">roysoutherell@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">5219</span>$5219</td>
                                                        <td><span class="d-none">20191215</span>15 Dec 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #4995</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 06/09/2019</span>"
                                                                aria-label="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 06/09/2019</span>">
                                                                <div class="avatar avatar-status bg-light-warning"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-pie-chart avatar-icon">
                                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                                                                            </path>
                                                                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/3-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Raynell
                                                                        Clendennen</h6><small
                                                                        class="text-truncate text-muted">raynellclendennen@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">3313</span>$3313</td>
                                                        <td><span class="d-none">20190609</span>09 Jun 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #4993</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 10/22/2019</span>"
                                                                aria-label="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 10/22/2019</span>">
                                                                <div class="avatar avatar-status bg-light-warning"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-pie-chart avatar-icon">
                                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                                                                            </path>
                                                                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar bg-light-warning me-50">
                                                                        <div class="avatar-content">LA</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Lutero
                                                                        Aloshechkin</h6><small
                                                                        class="text-truncate text-muted">luteroaloshechkin@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">4836</span>$4836</td>
                                                        <td><span class="d-none">20191022</span>22 Oct 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #4989</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Past Due<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 08/01/2019</span>"
                                                                aria-label="<span>Past Due<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 08/01/2019</span>">
                                                                <div class="avatar avatar-status bg-light-danger"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-info avatar-icon">
                                                                            <circle cx="12" cy="12" r="10"></circle>
                                                                            <line x1="12" y1="16" x2="12" y2="12">
                                                                            </line>
                                                                            <line x1="12" y1="8" x2="12.01" y2="8">
                                                                            </line>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar bg-light-secondary me-50">
                                                                        <div class="avatar-content">OG</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Orson
                                                                        Grafton</h6><small
                                                                        class="text-truncate text-muted">orsongrafton@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">5293</span>$5293</td>
                                                        <td><span class="d-none">20190801</span>01 Aug 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #4989</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Downloaded<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 09/23/2019</span>"
                                                                aria-label="<span>Downloaded<br> <span class=&quot;fw-bold&quot;>Balance:</span> 0<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 09/23/2019</span>">
                                                                <div class="avatar avatar-status bg-light-info"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-arrow-down-circle avatar-icon">
                                                                            <circle cx="12" cy="12" r="10"></circle>
                                                                            <polyline points="8 12 12 16 16 12">
                                                                            </polyline>
                                                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar bg-light-info me-50">
                                                                        <div class="avatar-content">LH</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Lorine
                                                                        Hischke</h6><small
                                                                        class="text-truncate text-muted">lorinehischke@email.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">3623</span>$3623</td>
                                                        <td><span class="d-none">20190923</span>23 Sep 2019</td>
                                                        <td><span class="badge rounded-pill badge-light-success"
                                                                text-capitalized=""> Paid </span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                                        <td class="sorting_1"><a class="fw-bold"
                                                                href="app-invoice-preview.html"> #4965</a></td>
                                                        <td><span data-bs-toggle="tooltip" data-bs-html="true" title=""
                                                                data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> $666<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 03/18/2020</span>"
                                                                aria-label="<span>Partial Payment<br> <span class=&quot;fw-bold&quot;>Balance:</span> $666<br> <span class=&quot;fw-bold&quot;>Due Date:</span> 03/18/2020</span>">
                                                                <div class="avatar avatar-status bg-light-warning"><span
                                                                        class="avatar-content"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-pie-chart avatar-icon">
                                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                                                                            </path>
                                                                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </span></td>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar me-50"><img
                                                                            src="../../../app-assets/images/avatars/4-small.png"
                                                                            alt="Avatar" width="32" height="32"></div>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">Yelena
                                                                        O'Hear</h6><small
                                                                        class="text-truncate text-muted">yelenao@email.com'Hear</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="d-none">3789</span>$3789</td>
                                                        <td><span class="d-none">20200318</span>18 Mar 2020</td>
                                                        <td><span class="d-none">$666</span>$666</td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions"><a
                                                                    class="me-1" href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""
                                                                    data-bs-original-title="Send Mail"
                                                                    aria-label="Send Mail"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-send font-medium-2 text-body">
                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2">
                                                                        </polygon>
                                                                    </svg></a><a class="me-25"
                                                                    href="app-invoice-preview.html"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Preview Invoice"
                                                                    aria-label="Preview Invoice"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye font-medium-2 text-body">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></a>
                                                                <div class="dropdown"><a
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-vertical font-medium-2 text-body">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown-menu dropdown-menu-end"><a
                                                                            href="#" class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-download font-small-4 me-50">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="7 10 12 15 17 10">
                                                                                </polyline>
                                                                                <line x1="12" y1="15" x2="12" y2="3">
                                                                                </line>
                                                                            </svg>Download</a><a
                                                                            href="app-invoice-edit.html"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit font-small-4 me-50">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                </path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                </path>
                                                                            </svg>Edit</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash font-small-4 me-50">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg>Delete</a><a href="#"
                                                                            class="dropdown-item"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-copy font-small-4 me-50">
                                                                                <rect x="9" y="9" width="13" height="13"
                                                                                    rx="2" ry="2"></rect>
                                                                                <path
                                                                                    d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                                </path>
                                                                            </svg>Duplicate</a></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-between mx-2 row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_info" id="DataTables_Table_0_info"
                                                        role="status" aria-live="polite">Showing 1 to 10 of 50 entries
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="DataTables_Table_0_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="DataTables_Table_0_previous"><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                                    tabindex="0" class="page-link">&nbsp;</a></li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                                    tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="3"
                                                                    tabindex="0" class="page-link">3</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="4"
                                                                    tabindex="0" class="page-link">4</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="5"
                                                                    tabindex="0" class="page-link">5</a></li>
                                                            <li class="paginate_button page-item next"
                                                                id="DataTables_Table_0_next"><a href="#"
                                                                    aria-controls="DataTables_Table_0" data-dt-idx="6"
                                                                    tabindex="0" class="page-link">&nbsp;</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php");?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
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
<?php } ?>