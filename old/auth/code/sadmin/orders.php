<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include("../../../include/config.php");

if(isset($_POST['updateorder'])){
    $paymentstatus=$_POST['paymentstatus'] ?? null;
    $orderstatus=$_POST['orderstatus'] ?? null;
    $dlh=$_POST['dlh'] ?? null;
    $trans=$_POST['trans'] ?? null;
    $orderid=$_POST['orderid'];

    $sql=mysqli_query($conn,"UPDATE `orders` SET `order_status`='$orderstatus',`payment_status`='$paymentstatus',`enter`='$dlh',`tracking_id`='$trans' WHERE id='$orderid'");
}
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
            margin: 1%;
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
        .hidecourier{
            display:none;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php include("include/header.php")?>
    <?php include("include/sidebar.php")?>
    </div>
    <!-- END: Main Menu-->

                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body body1 pb-5 px-sm-5 pt-50">
                                
                            </div>
                        </div>
                    </div>
                </div>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">
                                Order Table
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Order Table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body ">
                <div class="row" id="basic-table">
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Order Table</h4>


                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Order No.</th>
                                            <th>Order Date</th>
                                            <th>Customer Name</th>
                                            <th>Country</th>
                                            <th>SKU</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Amount</th>
                                            <th>Order Status</th>
                                            <th>Payment Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                         $sql=mysqli_query($conn,"SELECT *,stock.value as size,products.name as pname,shipping_address.name as oname,orders.order_status as orstatus FROM orders inner join shipping_address on shipping_address.id=orders.address_id inner join products on orders.product=products.name inner join stock on stock.value=orders.size");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                        <tr>
                                            <td><?php echo $row['order_no'];?></td>
                                            <td><?php echo $row['order_date'];?></td>
                                            <td><?php echo $row['oname'];?></td>
                                            <td><?php echo $row['country'];?></td>
                                            <td><?php echo $row['sku'];?></td>
                                            <td><?php echo $row['pname'];?></td>
                                            <td><?php echo $row['size'];?></td>
                                            <td><?php echo $row['price'];?></td>

                                            <td>
                                                <span
                                                    class="badge rounded-pill  badge-light-success"><?= $row['orstatus']; ?></span>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge rounded-pill  badge-light-success"><?= $row['payment_status']; ?></span>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-success eye"
                                                    href="offerletter.php?eid=<?php echo $row['id']; ?>">
                                                    <i data-feather="eye"></i>
                                                </a>
                                                <!-- <a class="btn btn-outline-primary edit"
                                                    href="addform.php?eid=<?php echo $arr['id'] ?>">
                                                    <i data-feather="edit"></i>
                                                </a> -->
                                                <button type="button" class="btn btn-icon rounded-circle btn-flat-primary btnmod1" data-id="<?php echo $row['id'] ?>"><i data-feather="edit"></i></button>
                                            </td>
                                        </tr>
                                        <?php $count++;   } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END: Content-->

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

                "lengthChange": true,
                "autoWidth": false,
                "scrollX": true,
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
        $(document).ready(function(){
            $('.btnmod1').click(function(){
                let val=$(this).data('id');
                $.ajax({
                    url:'api.php',
                    method:'post',
                    data:{val:val},
                   
                    success: function (response) {
                        $(".body1").html(response);
                    }
                });
                $('#editUser').modal('show');
            });

            
        });
        
    </script>
    <script>
function get(val){
if(val=='Courier'){
    $(".hidecourier").css('display','block');
}
}
</script>
</body>
<!-- END: Body-->

</html>
<?php } ?>