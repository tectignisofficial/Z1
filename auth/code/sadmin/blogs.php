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
    <title>Blog Edit - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/katex.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/monokai-sublime.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/quill.snow.css" />
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-quill-editor.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-blog.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php include("include/header.php")?>

    <?php include("include/sidebar.php")?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Blogs Edit</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Blogs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Blog Edit -->
                <div class="blog-edit-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Form -->
                                    <form action="javascript:;" class="mt-2">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="blog-edit-title">Title</label>
                                                    <input type="text" id="blog-edit-title" class="form-control"
                                                        value="The Best Features Coming to iOS and Web design" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label class="form-label">Content</label>
                                                    <div id="blog-editor-wrapper">
                                                        <div id="blog-editor-container">
                                                            <div class="editor">
                                                                <p>
                                                                    Cupcake ipsum dolor sit. Amet dessert donut
                                                                    candy chocolate bar cotton dessert candy
                                                                    chocolate. Candy muffin danish. Macaroon
                                                                    brownie jelly beans marzipan cheesecake oat
                                                                    cake. Carrot cake macaroon chocolate cake.
                                                                    Jelly brownie jelly. Marzipan pie sweet
                                                                    roll.
                                                                </p>
                                                                <p><br /></p>
                                                                <p>
                                                                    Liquorice dragée cake chupa chups pie cotton
                                                                    candy jujubes bear claw sesame snaps.
                                                                    Fruitcake chupa chups chocolate bonbon lemon
                                                                    drops croissant caramels lemon drops. Candy
                                                                    jelly cake marshmallow jelly beans dragée
                                                                    macaroon. Gummies sugar plum fruitcake.
                                                                    Candy canes candy cupcake caramels cotton
                                                                    candy jujubes fruitcake.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Featured Image</h4>
                                                    <div class="d-flex flex-column flex-md-row">
                                                        <img src="app-assets/images/slider/03.jpg"
                                                            id="blog-feature-image" class="rounded me-2 mb-1 mb-md-0"
                                                            width="170" height="110" alt="Blog Featured Image" />
                                                        <div class="featured-info">
                                                            <small class="text-muted">Required image resolution 800x400,
                                                                image size
                                                                10mb.</small>
                                                            <p class="my-50">
                                                                <a href="#"
                                                                    id="blog-image-text">C:\fakepath\banner.jpg</a>
                                                            </p>
                                                            <div class="d-inline-block">
                                                                <input class="form-control" type="file"
                                                                    id="file" name="file" accept="image/*" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-50">
                                                <button type="submit" class="btn btn-primary me-1">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Blog Edit -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php")?>

    <button class="btn btn-primary btn-icon scroll-top" type="button">
        <i data-feather="arrow-up"></i>
    </button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-blog-edit.js"></script>
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
    </script>
</body>
<!-- END: Body-->

</html>