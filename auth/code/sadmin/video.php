<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');

if(isset($_POST['submit'])){

    $mainTitle=$_POST['mainTitle'];
    $mainUrl=$_POST['mainUrl'];
  
        $sql=mysqli_query($conn,"INSERT INTO `video`(`name`, `url`) VALUES ('$mainTitle','$mainUrl')");
     
    
    if($sql==1){
        echo '<script>alert("sucessfully submitted");</script>';
         header('location:video.php');
    }else{
        echo '<script>alert("something went wrong");</script>';
    }
}



if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from video where id='$id'");
    if($sql=1){
        header("location:video.php");
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
                            <h2 class="content-header-title float-start mb-0">Videos</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                
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

                            <div class="col-md-12 col-12">

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
                                                            name="mainTitle" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <label class="control-label required"
                                                            for="email-id">URL</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="mainUrl" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dt-action-buttons">
        <button id="addattr" type="submit" class="btn btn-primary" name="submit">+ Add New Video</button>
                                                    </div>
                                                            
                        </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                <h4 class="card-title"> Request A Quote</h4>

                              
                            </div>
                            <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    
                    <th>URl</th>
                            
                    <th>Action</th>
          
                </tr>
            </thead>
            <tbody>
                                    <?php 
                        
                        $sql=mysqli_query($conn,"select * from video");
                        $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <tr>
                                        <td><?php echo $count;?> </td>
                                        <td><?php echo $arr['name'];?> </td>
                                       
                                        <td><?php echo $arr['url'];?> </td>
                                        
                                         <td>


                                    <a href="video.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-icon rounded-circle btn-flat-danger"><i data-feather="trash"></i></button></a>


                                 
                                   
                                    

                  </td>
                                        </tr>
                                        <?php $count++;  } ?>
                                    </tbody>
        </table>
                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>

                            </div>
                 
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

        $(document).on('click', '#addattr', function () {
            $('.tabletr').append('<tr class="one">\
    <td class="sno"></td>\
    <td><input type="radio" name="defaultselect" value="1" selected></td>\
    <td><input type="text" class="form-control" name="title[]"></td>\
    <td><input type="text" class="form-control" name="slug[]"></td>\
    <td>\
    <button type="button" class="btn btn-icon rounded-circle btn-flat-danger cancleicon"><i  class="fa fa-trash"></i></button></td>\
</tr>');
        });

        $(document).on('click', '.cancleicon', function () {
            $(this).closest('.one').remove();
        })
    </script>

</body>
<!-- END: Body-->

</html>
<?php } ?>