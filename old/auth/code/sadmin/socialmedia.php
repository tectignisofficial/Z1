<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');
?>

<!-- facebook -->
<?php
if(isset($_POST['update'])){

    $facebook=$_POST['facebook_link'];
    
      $sql="UPDATE `social_media` SET `facebook`='$facebook' ";
    
      if (mysqli_query($conn, $sql)){
        header("location:socialmedia.php");
     } else {
        echo "connection failed !";
    }

}
?>

    <!-- twitter -->
<?php
        if(isset($_POST['twitterupdate'])){

            $twitter=$_POST['twitter'];
            
              $sql="UPDATE `social_media` SET `twitter`='$twitter' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
            }
             
        }

?>

 <!-- pinterest -->
<?php
        if(isset($_POST['pinterestupdate'])){

            $pinterest=$_POST['pinterest'];
            
              $sql="UPDATE `social_media` SET `pinterest`='$pinterest' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
            }
             
        }

?>

<!-- instagram -->
<?php
        if(isset($_POST['instagramupdate'])){

            $instagram=$_POST['instagram'];
            
              $sql="UPDATE `social_media` SET `instagram`='$instagram' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
            }
             
        }

?>

<!-- tumblr -->
<?php
        if(isset($_POST['tumblrupdate'])){

            $tumblr=$_POST['tumblr'];
            
              $sql="UPDATE `social_media` SET `tumblr`='$tumblr' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
            }
             
        }

?>

<!-- youtube -->
<?php
        if(isset($_POST['youtubeupdate'])){

            $youtube=$_POST['youtube'];
            
              $sql="UPDATE `social_media` SET `youtube`='$youtube' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
            }
             
        }

?>

<!-- vimeo -->
<?php
        if(isset($_POST['vimeoupdate'])){

            $vimeo=$_POST['vimeo'];
            
              $sql="UPDATE `social_media` SET `vimeo`='$vimeo' ";
            
              if (mysqli_query($conn, $sql)){
                header("location:socialmedia.php");
             } else {
                echo "connection failed !";
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
                <h2 class="content-header-title float-start mb-0">Social Media</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item ">Social Media</li>
                    </ol>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <form class="form-check" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Social Media</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form -->
                  <!-- facebook -->
                  <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select facebook from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/facebook.png" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-sm-10 position-relative">
                                                
                                                <input type="url" class="form-control" name="facebook_link" id="facebook_link" placeholder="enter link" value="<?php echo $arr['facebook'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>

                                        <!-- twitter -->
                                        <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select twitter  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/twitter.png" alt="twitter" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="twitter" id="twitter" placeholder="enter link " value="<?php echo $arr['twitter'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="twitterupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 

                                         <!-- pinterest -->
                                         <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select pinterest  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/pinterest.png" alt="pinterest" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="pinterest" id="pinterest" placeholder="enter link " value="<?php echo $arr['pinterest'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="pinterestupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 
                                        
                                        <!-- instagram -->
                                        <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select instagram  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/Instagram.png" alt="instagram" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="instagram" id="instagram" placeholder="enter link " value="<?php echo $arr['instagram'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="instagramupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 

                                        <!-- tumblr -->
                                        <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select tumblr  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/tumblr.png" alt="tumblr" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="tumblr" id="tumblr" placeholder="enter link " value="<?php echo $arr['tumblr'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="tumblrupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 

                                        <!-- youtube -->
                                        <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select youtube  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/youtube.png" alt="youtube" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="youtube" id="youtube" placeholder="enter link " value="<?php echo $arr['youtube'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="youtubeupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 

                                        <!-- vimeo -->
                                        <form method="post">
                                        <?php                         
                        $sql=mysqli_query($conn,"select vimeo  from social_media");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="image/icon/vimeo.png" alt="vimeo" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="col-md-10 col-10  position-relative">
                                                
                                                <input type="url" class="form-control" name="vimeo" id="vimeo" placeholder="enter link " value="<?php echo $arr['vimeo'];?>"  required />
                                                
                                            </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="vimeoupdate" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form> 
                </div>
                <!-- /.card-body -->
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