<?php 
include('../../../include/config.php');

if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from reviews where id='$id'");
    if($sql=1){
      header("location:reviews.php");
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
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
                <h2 class="content-header-title float-start mb-0">Reviews</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Reviews</li>
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
                                    <a class="btn btn-primary" href="reviews_form.php"><i class="fa fa-plus"></i>
                                        Create
                                    </a>
                                    <button class="btn btn-info" tabindex="0"
                                        aria-controls="botble-page-tables-page-table" type="button"><span><i
                                                data-feather="refresh-cw"></i> reload</span></button>
                                </div>

                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                            <th>SR NO.</th>
                                                    <th>NAME</th>
                                                    <th>PRODUCT NAME</th>
                                                    <th>STAR</th>
                                                    <th>DESCRIPTION</th>
                                                    <th>LOCATION</th>
                                                    <th>LINKS</th>
                                                    <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                         $sql=mysqli_query($conn,"SELECT * FROM reviews");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                            <tr>
                                            <td><?php echo $count;?></td>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['product_name'];?></td>
                                                    <td><?php echo $row['stars'];?></td>
                                                    <td><?php echo $row['description'];?></td>
                                                    <td><?php echo $row['location'];?></td>
                                                    <td><?php echo $row['link'];?></td>
                                                    <td>
                                                        <a href="reviews.php?delid=<?php echo $row['id']; ?>"><button
                                                                type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-danger delbtn"
                                                                data-id="=<?php echo $row['id']; ?>"><i
                                                                    data-feather="trash"></i></button></a>
                                                    </td>
                                                </tr>
                                                <?php $count++;  } ?>
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
                            window.location.href = "reviews.php?delid" + delid;
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