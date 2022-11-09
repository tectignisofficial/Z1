<?php include('../../../include/config.php');
if(isset($_GET['currid'])){
    $currid=$_GET['currid'];
    $sql=mysqli_query($conn,"delete from currency where id ='$currid'");
    if($sql){
        header('location:currency.php');
    }
} ?>
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
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> Edit Currency</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">                          
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <label for="colFormLabelLg" class="col-sm-4 col-form-label-lg">Currency Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="colFormLabel" placeholder="Normal Input" />
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="colFormLabelLg" class="col-sm-4 col-form-label-lg">Currency Icon</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="colFormLabel" placeholder="Normal Input" />
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="colFormLabelLg" class="col-sm-4 col-form-label-lg">Conversion Rate</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="colFormLabel" placeholder="Normal Input" />
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="colFormLabelLg" class="col-sm-4 col-form-label-lg">Default Status</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="colFormLabel" placeholder="Normal Input" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
        
      
          <div class="modal-footer">
          <button type="submit" id="update" name="update" class="btn btn-primary me-1"> Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
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
                                    <div class="col-2">
                                        <div id="botble-page-tables-page-table_filter" class="dataTables_filter">
                                            <label><input type="search" class="form-control input-sm"
                                                    placeholder="Search..."
                                                    aria-controls="botble-page-tables-page-table"></label>
                                        </div>
                                    </div>
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
                                                <th>DEFAULT STATUS</th>
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
                                                <td><?php echo $arr['default_status'] ?></td>                                               
                                                <td>
                                                <a href=""><button
                                                                type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-primary btnmod1"><i
                                                                    data-feather="edit"></i></button></a>

                                                    <a href="currency.php?currid=<?php echo $arr['id']; ?>"><button
                                                                type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                    data-feather="trash"></i></button></a>

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
   $(document).ready(function(){
         $('.btnmod1').click(function(){
           let vid = $(this).data('id');

           $.ajax({
           url: 'currency.php',
           type: 'post',
           data: {vid: vid},
           success: function(response1){ 
             $('.body1').html(response1);
             $('#myModal').modal('show'); 
           }
         });
         });

         });
 </script>
   
</body>
<!-- END: Body-->

</html>