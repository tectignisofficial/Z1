<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
session_start();
include('../../../include/config.php');


$d=$_SESSION['id'];
if(isset($_POST["submit"])){
	$Old_password=$_POST["oldpassword"];
	$New_password=$_POST["newpassword"];
    $Confirm_password=$_POST["confirmpassword"];

	$sql = mysqli_query($conn,"SELECT * FROM adminlogin WHERE id='$d'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($Old_password,$row['password']);
	
	$hashpassword=password_hash($New_password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `adminlogin` SET `password`='$hashpassword' WHERE id='$d'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='auth-admin-login.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
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

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn1 {
            border: 2px solid gray;
            color: #7367f0;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
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
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h2 class="content-header-title float-start mb-0">Update Password</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item ">Update Password</li>
                    </ol>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <form class="form-check" method="post" enctype="multipart/form-data">
                <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Password</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="fname-icon">Old Password</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i data-feather="lock"></i></span>
                                                            <input type="password" id="oldpassword" class="form-control" name="oldpassword" placeholder="Old Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="contact-icon">New Password</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i data-feather="lock"></i></span>
                                                            <input type="password" id="newpassword" class="form-control" name="newpassword" placeholder="New Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="pass-icon">Confirm Password</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i data-feather="lock"></i></span>
                                                            <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" placeholder="Confirm Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <div class="mb-1">
                                                 
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" name="submit" id="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </form>
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
<?php } ?>