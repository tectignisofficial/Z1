<?php
include('../../../include/config.php');
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
    <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
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
    <?php
                                    $sql=mysqli_query($conn,"select * from product_attribute");
                                    $count=1;
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
       <div class="modal fade" id="editUser<?php echo $arr['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Edit Products Attributes</h1>
                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                               
                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserFirstName"> Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Slug" value="<?php echo $arr['main_title'] ?>"/>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserFirstName"> Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="<?php echo $arr['main_slug'] ?>"/>
                                    </div>
                                    <!-- <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserFirstName"> Order</label>
                                        <input type="text" id="order" name="order" class="form-control" placeholder="Order" value=""/>
                                    </div> -->
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; } ?>

        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Products Attributes</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Products Attributes
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
                                    <h4 class="card-title">Attributes</h4>
                                    <a class="btn btn-primary" href="product_attributes_form.php"><i
                                            class="fa fa-plus"></i>
                                        Create
                                    </a>
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
                                                        aria-label="Date: activate to sort column ascending">ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 30px;"
                                                        aria-label="Name: activate to sort column ascending">TITle
                                                        </TITle>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Status: activate to sort column ascending">SLUG
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Status: activate to sort column ascending">ORDER
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Status: activate to sort column ascending">Created
                                                        AT
                                                    </th>
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Status: activate to sort column ascending">ACTION
                                                    </th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                <?php
                                                $sql=mysqli_query($conn,"select * from product_attribute group by main_title");
                                                $count='1';
                                                while($arr=mysqli_fetch_array($sql)){
                                                ?>
                                                <tr class="odd">
                                                    <td class="control sorting_1" tabindex="0" style="display: none;">
                                                    </td>
                                                    <td><?php echo $count; ?></td>
                                                    <td><?php echo $arr['main_title'] ?></td>
                                                    <td><?php echo $arr['main_slug'] ?></td>
                                                    <td>1200</td>
                                                    <td><?php $date=strtotime($arr['create_date']); echo date('d/m/y',$date); ?></td>
                                                   
                                                    <td>
                                                    <button type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                            data-bs-toggle="modal" data-bs-target="#editUser<?php echo $arr['id'] ?> "><i
                                                                data-feather="edit"></i></button>
                                                        <a href="api.php?did=<?php echo $arr['id'] ?>"><button
                                                                type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                    data-feather="trash"></i></button></a></td>

                                                </tr>
                                                <?php $count++; } ?>
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