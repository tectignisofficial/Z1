<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/blog-grid-view.html   11 Nov 2019 12:46:09 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Gridview &ndash; Z1 KNEE BRACES</title>
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
                    <div class="wrapper">
                        <h1 class="page-width">Blogs</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span
                        aria-hidden="true">›</span><span>Blogs</span>
                </div>
            </div>

            <!--End Sidebar-->
            <!--Main Content-->
            <div class="container">
                <div class="row">
                <?php 
                                    
                                    $sql=mysqli_query($conn,"select * from blog");
                                    $count=1;
                                    while($arr=mysqli_fetch_array($sql)){
                                ?>

                    <!--Main Content-->
                    <div class="container">
                        <div class="row">
                            <!--Main Content-->
                            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                                <div class="custom-search">
                                    <form action="/search" method="get" class="input-group search-header search"
                                        role="search" style="position: relative;">
                                        <input class="search-header__input search__input input-group__field"
                                            type="search" name="q" placeholder="Search" aria-label="Search"
                                            autocomplete="off">
                                        <span class="input-group__btn"><button class="btnSearch" type="submit"> <i
                                                    class="icon anm anm-search-l"></i> </button></span>
                                    </form>
                                </div>
                                <div class="blog--list-view blog--grid-load-more">
                                    <div class="article" style="display: block;">
                                        <!-- Article Image -->
                                        <a class="article_featured-image" href="#"><img
                                                class="blur-up ls-is-cached lazyloaded"
                                                data-src="assets/images/blog/blog-post-1.jpg"
                                                src="auth\code\sadmin\dist\img\<?php echo $arr['file'];?>"
                                                alt="It's all about how you wear"></a>
                                        <h2 class="h3"><a href="blog-left-sidebar.html"><?php echo $arr['title'];?></a>
                                        </h2>
                                     
                                        <div class="rte">
                                            <p><?php echo $arr['content'];?></p>
                                        </div>
                                        <p><a href="blogs.php?eid=<?php echo $arr['id'];?>" class="btn btn-secondary btn--small">Read more <i
                                                    class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                    </div>

                                    <div class="loadmore-post">
                                        <a href="blogs.php?eid=<?php echo $arr['id'];?>;" class="btn loadMorepost">Load More</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Main Content-->
                            <!--Sidebar-->
                            <!--End Sidebar-->
                        </div>
                    </div>
                    <?php $count++;  } ?>

                    <!--End Main Content-->
                    <!--Sidebar-->

                    <!--End Sidebar-->
                </div>
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