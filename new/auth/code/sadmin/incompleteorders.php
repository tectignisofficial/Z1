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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>Incomplete Order &ndash; Z1KneeBrace</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- END: Page CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css"
        href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css" />

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- END: Custom CSS-->

    <style>
        .dt-button {
            border: 1px solid !important;
            background-color: transparent;
            display: inline-block;
            font-weight: 400;
            line-height: 1;
            color: #6e6b7b;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.786rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.358rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border 0s;


        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php include("include/header.php")?>
    <?php include("include/sidebar.php")?>
    </div>
    <!-- END: Main Menu-->


    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Incomplete Orders</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Incomplete Orders
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Ajax Sourced Server-side -->


                <!--/ Ajax Sourced Server-side -->

                <!-- Responsive Datatable -->
                <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Orders</h4>
                                </div>
                                <div class="card-datatable">
                                    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                        <div class="d-flex justify-content-between align-items-center mx-0 row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_3_length">
                                                    <label>Show <select name="DataTables_Table_3_length"
                                                            aria-controls="DataTables_Table_3" class="form-select">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="DataTables_Table_3_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control"
                                                            placeholder="" aria-controls="DataTables_Table_3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="dt-responsive table dataTable dtr-column" id="DataTables_Table_3"
                                            role="grid" aria-describedby="DataTables_Table_3_info"
                                            style="width: 1443px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="control sorting_disabled sorting_asc" rowspan="1"
                                                        colspan="1" style="width: 0px; display: none;" aria-label="">
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 20px;"
                                                        aria-label="Date: activate to sort column ascending">Customer No.
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 30px;"
                                                        aria-label="Name: activate to sort column ascending">Email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 130px;"
                                                        aria-label="Email: activate to sort column ascending">Phone No.
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 50px;"
                                                        aria-label="Post: activate to sort column ascending">Product
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 62px;"
                                                        aria-label="Salary: activate to sort column ascending">Amount
                                                        Method</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Status: activate to sort column ascending">Created
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th class="control" rowspan="1" colspan="1" style="display: none;">
                                                    </th>
                                                    <th rowspan="1" colspan="1">Customer No.</th>
                                                    <th rowspan="1" colspan="1">Email</th>
                                                    <th rowspan="1" colspan="1">Phone No.</th>
                                                    <th rowspan="1" colspan="1">Product</th>
                                                    <th rowspan="1" colspan="1">Amount</th>
                                                    <th rowspan="1" colspan="1">Created</th>
                                                </tr>

                                            </tfoot>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="control sorting_1" tabindex="0" style="display: none;">
                                                    </td>
                                                    <td>111</td>
                                                    <td>abc@gmail.com</td>
                                                    <td>1234567899</td>
                                                    <td>bvgfghg</td>
                                                    <td>1000</td>
                                                    <td>12/10/22</td>                                                   
                                                                                        
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="d-flex justify-content-between mx-0 row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_info" id="DataTables_Table_3_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 100 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_3_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="DataTables_Table_3_previous"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="0"
                                                                tabindex="0" class="page-link">&nbsp;</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="5"
                                                                tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item disabled"
                                                            id="DataTables_Table_3_ellipsis"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="6"
                                                                tabindex="0" class="page-link">…</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="7"
                                                                tabindex="0" class="page-link">10</a></li>
                                                        <li class="paginate_button page-item next"
                                                            id="DataTables_Table_3_next"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="8"
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
                </section>
                <!--/ Responsive Datatable -->

            </div>
        </div>
    </div>



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include("include/footer.php")?>
    <button class="btn btn-primary btn-icon scroll-top" type="button">
        <i data-feather="arrow-up"></i>
    </button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>







    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on("load", function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14,
                });
            }
        });
    </script>
</body>
<!-- END: Body-->

</html>
<?php } ?>