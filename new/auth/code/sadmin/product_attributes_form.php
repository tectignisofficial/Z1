<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');
if(isset($_POST['submit'])){
    $maintitle=$_POST['maintitle'];
    $mainslug=$_POST['mainslug'];
    $title=$_POST['title'];
    $slug=$_POST['slug'];
   
    foreach($title as $index => $titles){
        // $s_maintitle = $titles;
        // $s_mainslug = $mainslug[$index];
        $s_title = $titles;
        $s_slug = $slug[$index];

        $sql=mysqli_query($conn,"INSERT INTO `product_attribute`(`main_title`, `main_slug`, `title`, `slug`) VALUES ('$maintitle','$mainslug','$s_title','$s_slug')");
       
    }
    if($sql==1){
        echo '<script>alert("sucessfully submitted");</script>';
    }else{
        echo '<script>alert("something went wrong");</script>';
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
    <title>Product Attribute Form &ndash; Z1KneeBrace</title>
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
        .widget-title {
            border-bottom: 1px solid #eeeeee;
        }

        .pd-all-10-20 {
            padding: 10px 20px;
        }

        .widget-body {
            padding: 15px 15px;
            border-radius: 0 0 3px 3px;
        }

        .required:after {
            content: " *";
            color: red;
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
                                    <li class="breadcrumb-item active">New Products</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                <form class="form form-horizontal" method="post">
                    <div class="row">
                   
                        <div class="col-md-9 col-12">
                       
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <label class="control-label required"
                                                            for="email-id">TITLE</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="maintitle" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <label class="control-label required"
                                                            for="email-id">SLUG</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="mainslug" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                               
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div id="DataTables_Table_0_wrapper"
                                                class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <div class="card-header border-bottom p-1">
                                                    <div class="head-label">
                                                        <h6 class="mb-0">Attributes list</h6>
                                                    </div>
                                                    <!-- <div class="dt-action-buttons text-end">
                                                        <div class="dt-buttons d-inline-flex"> <button
                                                                class="dt-button create-new btn btn-primary"
                                                                tabindex="0" aria-controls="DataTables_Table_0"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#modals-slide-in"><span><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-plus me-50 font-small-4">
                                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>Add New Attributes</span></button> </div>
                                                    </div> -->
                                                </div>
                                                <table
                                                    class="datatables-basic table dataTable no-footer dtr-column collapsed"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info" style="width: 942px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="control sorting_disabled" rowspan="1" colspan="1"
                                                                style="width: 1px;" aria-label="">#</th>
                                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                                rowspan="1" colspan="1" style="width: 25px;"
                                                                data-col="1" aria-label="">
                                                                <div class="form-check"> <label
                                                                        class="form-check-label"
                                                                        for="checkboxSelectAll">Is default?</label> 
                                                                </div>
                                                            </th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1" style="width: 252px;"
                                                                aria-label="Name: activate to sort column ascending">
                                                                TITLE</TItle></th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1" style="width: 242px;"
                                                                aria-label="Email: activate to sort column ascending">
                                                                SLUG</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1" style="width: 69px;"
                                                                aria-label="Date: activate to sort column ascending">
                                                                REMOVE</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="tabletr">
                                                        <!-- <tr>
                                                            <td>1</td>
                                                            <td><input type="radio" name="defaultselect" value="1" selected></td>
                                                            <td><input type="text" class="form-control" ></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td> <a href=""><button
                                                                type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                    data-feather="trash"></i></button></a></td>
                                                        </tr> -->
                                                    </tbody>
                                                    
                                                </table>
                                                <div class="dt-action-buttons mt-2" style="margin-left:20px">
                                                      <button id="addattr" type="button"
                                                                class="btn btn-primary">+ Add New Attributes</button> 
                                                    </div>
                                                <!-- <div class="d-flex justify-content-between mx-0 row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_info" id="DataTables_Table_0_info"
                                                            role="status" aria-live="polite">Showing 1 to 7 of 100
                                                            entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_paginate paging_simple_numbers"
                                                            id="DataTables_Table_0_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled"
                                                                    id="DataTables_Table_0_previous"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="0" tabindex="0"
                                                                        class="page-link">&nbsp;</a></li>
                                                                <li class="paginate_button page-item active"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="1" tabindex="0"
                                                                        class="page-link">1</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="2" tabindex="0"
                                                                        class="page-link">2</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="3" tabindex="0"
                                                                        class="page-link">3</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="4" tabindex="0"
                                                                        class="page-link">4</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="5" tabindex="0"
                                                                        class="page-link">5</a></li>
                                                                <li class="paginate_button page-item disabled"
                                                                    id="DataTables_Table_0_ellipsis"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="6" tabindex="0"
                                                                        class="page-link">…</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="7" tabindex="0"
                                                                        class="page-link">15</a></li>
                                                                <li class="paginate_button page-item next"
                                                                    id="DataTables_Table_0_next"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="8" tabindex="0"
                                                                        class="page-link">&nbsp;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal modal-slide-in fade" id="modals-slide-in">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">New Attributes</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basic-icon-default-fullname">TITLE</TITle></TItle></label>
                                                    <input type="text" class="form-control dt-full-name"
                                                        id="basic-icon-default-fullname" 
                                                        aria-label="John Doe">
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="basic-icon-default-post">SLUG</label>
                                                    <input type="text" id="basic-icon-default-post"
                                                        class="form-control dt-post"
                                                        aria-label="Web Developer">
                                                </div>
                                                <button type="button"
                                                    class="btn btn-primary data-submit me-1 waves-effect waves-float waves-light">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary waves-effect"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                           
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="card">
                                <div class="pd-all-10-20 border-top-color">
                                    <div class="widget-title">
                                        <h4 class="card-title">Publish</h4>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="btn-set">
                                        <button type="submit" name="submit" value="save" class="btn btn-info">
                                            <i class="fa fa-save"></i> Save
                                        </button>
                                        &nbsp;
                                        <!-- <button type="submit" name="submit" value="apply" class="btn btn-success">
                                            <i class="fa fa-check-circle"></i> Save &amp; Edit
                                        </button> -->
                                    </div>
                                </div>
                              
                            </div>
                            <!-- <div class="card">
                                <div class="pd-all-10-20 border-top-color">
                                    <div class="widget-title">
                                        <h4 class="card-title"><label for="status" class="control-label required"
                                                aria-required="true">Status</label></h4>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="ui-select-wrapper form-group">
                                        <select class="form-control ui-select ui-select" id="status" name="status">
                                            <option value="published">Published</option>
                                            <option value="draft">Draft</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                           
                        </div>
                        </form>
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
        });

        $(document).on('click','#addattr',function(){
    $('.tabletr').append('<tr class="one">\
    <td class="sno"></td>\
    <td><input type="radio" name="defaultselect" value="1" selected></td>\
    <td><input type="text" class="form-control" name="title[]"></td>\
    <td><input type="text" class="form-control" name="slug[]"></td>\
    <td>\
    <button type="button" class="btn btn-icon rounded-circle btn-flat-danger cancleicon"><i  class="fa fa-trash"></i></button></td>\
</tr>');
});

$(document).on('click','.cancleicon',function(){
        $(this).closest('.one').remove();
    })
    </script>
    
</body>
<!-- END: Body-->

</html>
<?php } ?>