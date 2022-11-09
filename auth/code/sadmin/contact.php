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
    <title>Form Layouts - Vuexy - Bootstrap HTML admin template</title>
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
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://ecommerce.sachinenterprise.in/admin">Home</a></li>
                        <li class="breadcrumb-item active">Contact us</li>
                    </ol>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Responsive Datatable -->
                <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header border-bottom row-12">

                                    <div class="col-1">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-outline-primary dropdown-toggle waves-effect show"
                                                data-bs-toggle="dropdown" aria-expanded="true">
                                                Bulk actions
                                            </button>
                                            <ul class="dropdown-menu "
                                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);"
                                                data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="#">bulk changes</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-primary">Filters</button></div>
                                    <div class="col-2">
                                        <div id="botble-page-tables-page-table_filter" class="dataTables_filter">
                                            <label><input type="search" class="form-control input-sm"
                                                    placeholder="Search..."
                                                    aria-controls="botble-page-tables-page-table"></label>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-1">
                                        <div class="btn-group">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="download"></i>Export
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-info" tabindex="0"
                                        aria-controls="botble-page-tables-page-table" type="button"><span><i
                                                data-feather="refresh-cw"></i> reload</span></button>
                                </div>

                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th width="10px" class="text-left no-sort sorting_disabled"
                                                    title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>"
                                                    rowspan="1" colspan="1" style="width: 10px;" aria-label=""><input
                                                        class="table-check-all" data-set=".dataTable .checkboxes"
                                                        type="checkbox"></th>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PHONE</th>
                                                <th>SUBJECT</th>
                                                <th>MESSAGE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="10px" class="text-left no-sort sorting_disabled"
                                                    title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>"
                                                    rowspan="1" colspan="1" style="width: 10px;" aria-label=""><input
                                                        class="table-check-all" data-set=".dataTable .checkboxes"
                                                        type="checkbox"></td>
                                                <td>1</td>
                                                <td>abc eee</td>
                                                <td>default@uc.in</td>
                                                <td>0123456789</td>
                                                <td>03-05-2022</td>
                                                <td>
                                                    <button type="button" class="btn btn-info">Published</button>
                                                </td>
                                                <td><button type="button" class="btn btn-primary"><i
                                                            data-feather="edit"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            data-feather="trash-2"></i></button></td>
                                            </tr>
                                            </tboday>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Datatable -->

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