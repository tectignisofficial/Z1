<?php
session_start();
include("include/config.php");
$id=$_GET['eid'];

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/blog-grid-view.html   11 Nov 2019 12:46:09 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Detail &ndash; Z1KneeBrace</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .rte{
            font-family: "Roboto Slab", Helvetica, Tahoma, Arial, serif;
        }
        @media screen and (max-width: 600px) {
            .lazyloaded{
                height: 314px !important;
            }
        }
    </style>
</head>

<body class="template-blog belle">
    <div class="pageWrapper">

        <!--End Mobile Menu-->
        <?php include("include/header.php");?>
        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Blog Details</h1>
                        <p><a href="index.php">Home</a> / <span>Blog Details</span></p>
                    </div>
                </div>
            </div>
            <!--Main Content-->
            <div class="container mt-4">
                <div class="row "  style="justify-content:center">
                    <?php 
                                    
                        $sql=mysqli_query($conn,"select * from blog where id='$id'");
                        $count=1;
                        while($arr=mysqli_fetch_array($sql)){
                    ?>
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 main-col">
                        <div class="blog--list-view">
                            <div class="article">
                                <!-- Article Image -->
                                <p class="article_featured-image"><img style="height:600px"class="blur-up ls-is-cached lazyloaded"
                                        src="auth\code\sadmin\dist\img\<?php echo $arr['file'];?>" alt="It's all about how you wear"></p>
                                <h1><?php echo $arr['title'];?></h1>

                                <div class="rte">
                                <?php echo $arr['content'];?>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                    <!--Sidebar-->

                    <!--End Sidebar-->
                </div>
                <?php $count++;  } ?>
            </div>
            <!--End Main Content-->
        </div>
    </div>

    </div>
    <!--End Body Content-->

    <!--Footer-->
    <?php include("include/footer.php");?>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/jquery.cookie.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
    </div>
</body>

<!-- belle/blog-grid-view.html   11 Nov 2019 12:47:01 GMT -->

</html>