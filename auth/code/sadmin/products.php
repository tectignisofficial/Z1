<?php 
include('../../../include/config.php');
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
    <title>Form Layouts - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

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
                <!-- <div class="content-header-left col-md-9 col-12 mb-2">
                    <h2 class="content-header-title float-start mb-0">Products Attributes</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Products Attributes</li>
                    </ol>
                </div> -->
                <!-- <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div> -->
                <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Responsive Datatable</h4>
                                </div>
                                <div class="card-datatable">
                                    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5"><div class="d-flex justify-content-between align-items-center mx-0 row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><table class="dt-responsive table dataTable dtr-column" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                        <thead>
                                            <tr role="row"><th class="control sorting_disabled sorting_asc" rowspan="1" colspan="1" style="width: 6.29688px; display: none;" aria-label=""></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 53.8594px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 55.9219px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 48.4062px;" aria-label="Post: activate to sort column ascending">Post</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 41.6406px;" aria-label="City: activate to sort column ascending">City</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 48.5938px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 67.7656px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 39.4375px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 105.031px;" aria-label="Experience: activate to sort column ascending">Experience</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 65.0469px;" aria-label="Status: activate to sort column ascending">Status</th></tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th class="control" rowspan="1" colspan="1" style="display: none;"></th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Post</th><th rowspan="1" colspan="1">City</th><th rowspan="1" colspan="1">Date</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Experience</th><th rowspan="1" colspan="1">Status</th></tr>
                                        </tfoot>
                                    <tbody><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">Loading...</td></tr></tbody></table><div class="d-flex justify-content-between mx-0 row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a></li></ul></div></div></div></div>
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
                                    <h4 class="card-title">Products Attributes</h4>
                                    <a class="btn btn-primary" href="product_attributes_form.php"><i
                                            class="fa fa-plus"></i>
                                        Create
                                    </a>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table" id="example1">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>SKU</th>
                                                <th>THUMBNAIL</th>
                                                <th>Product NAME</th>
                                                <th>PRICE</th>
                                                <th>STOCK</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                $sql=mysqli_query($conn,"select * from products ");
                                                $count=1;
                                                while($arr=mysqli_fetch_array($sql)){
                                                ?>
                                                <tr class="odd">
                                                    <td class="control sorting_1" tabindex="0" style="display: none;">
                                                    </td>
                                                    <td><?php echo  $count; ?></td>
                                                    <td><?php echo $arr['sku']; ?></td>
                                                    <td><img src="image/product_image_check/<?php echo $arr['hightlightfile']; ?>" width="50" height="50"></td>
                                                    <td><?php echo $arr['name']; ?></td>
                                                    <td><?php echo $arr['price']; ?></td>
                                                    <td><?php echo $arr['stock_status']; ?></td>
                                                    <td>
                                                    <a href="editProducts.php?eid=<?php echo $arr['id']; ?>" class="btn btn-icon rounded-circle btn-flat-primary btnmod1"><i
                                                                    data-feather="edit"></i></a>    
                                                    <a href="products.php?did=<?php echo $arr['id']; ?>" class="btn btn-icon rounded-circle btn-flat-danger" ><i data-feather="trash"></i></a></td>
                                                </tr>
                                                <?php $count++; } ?>
                                            </tbody>
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



    <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                          
                        </div>
                    </div>
                </section>
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: Theme JS-->

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
    <script>
        $(document).ready(function () {
            $('.delbtn').click(function (e) {
                e.preventDefault();
                let delid = $(this).data('id');
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "productattributes.php?delid" + delid;
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            })
        });
    </script>
</body>
<!-- END: Body-->

</html>