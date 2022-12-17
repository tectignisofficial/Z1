<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');
if(isset($_GET['currid'])){
    $currid=$_GET['currid'];
    $sql=mysqli_query($conn,"delete from currency where id ='$currid'");
    if($sql){
        header('location:currency.php');
    }
}

if(isset($_POST['updatecurrrency'])){
    $currency_rate=$_POST['updaterate'];
    $id=$_POST['id'];
    $sql=mysqli_query($conn,"UPDATE `currency` SET `currency_rate`='$currency_rate' where id='$id'");

    if($sql){
        echo "<script>alert('Successfully Submitted')</script>";
        // header("location:currency.php");
    }
    else{
        echo "<script>alert('error')</script>";
    }
}

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
    <title>Currency &ndash; Z1KneeBrace</title>
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

        <!-- Edit Modal -->
        <?php
                                    $sql=mysqli_query($conn,"select * from currency ");
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
                                    <h1 class="mb-1">Edit Currency</h1>
                                </div>
                                <form id="editUserForm" method="post" class="row gy-1 pt-75">

                               

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserFirstName">CONVERSION RATE</label>
                                        <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                                        <input type="text" id="updaterate" name="updaterate" class="form-control" placeholder="Rate" value="<?php echo $arr['currency_rate'] ?>"/>
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" name="updatecurrrency" id="updatecurrrency" class="btn btn-primary me-1">Update</button>
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
                <!--/ Edit User Modal -->

        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                <h2 class="content-header-title float-start mb-0">Currency</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Currency</li>
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
                                <h4 class="card-title">Currency</h4>
                                   
                                    <div class="col-4"></div>
                                </div>
                                <div class="card-datatable">

                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th>SR NO.</th>
                                                <th>CURRENCY NAME</th>
                                                <th>CURRENCY ICON</th>
                                                <th>CONVERSION RATE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql=mysqli_query($conn,"select * from currency");
                                    $count=1;
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $arr['currency_name'] ?></td>
                                                <td><i class="<?php echo $arr['currency_icon'] ?>"></i></td>
                                                <td><?php echo $arr['currency_rate'] ?></td>
                                                <td>
                                                   <button type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                            data-bs-toggle="modal" data-bs-target="#editUser<?php echo $arr['id'] ?>    "><i
                                                                data-feather="edit"></i></button>

                                                    <button
                                                            type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-danger delbtn"
                                                        data-id="=<?php echo $arr['id']; ?>"><i class="fa fa-trash"></i></button>

                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

<script>
        $(document).ready(function () {
            $(document).on("click",".delbtn",function(e){
                e.preventDefault();
                let delid = $(this).data('id');
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "currency.php?currid" + delid;
                        } else {
                            swal("Your file is safe!");
                        }
                    });
            })
        });
    </script>
    <!-- <script>
        $(document).ready(function () {
            $('.modal').click(function () {
                let vid = $(this).data('id');

                $.ajax({
                    url: 'currency.php',
                    type: 'post',
                    data: {
                        vid: vid
                    },
                    success: function (response1) {
                        $('.body1').html(response1);
                        $('#editUser').modal('show');
                    }
                });
            });

        });
    </script> -->

</body>
<!-- END: Body-->

</html>
<?php } ?>