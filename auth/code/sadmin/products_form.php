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
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://ecommerce.sachinenterprise.in/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item ">Ecommerce</li>
                        <li class="breadcrumb-item active">New product</li>
                    </ol>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="mb-1 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-check">
                                    <div class="mb-1">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" class="form-control" name="name"
                                            placeholder="Name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="desc">Description</label><br>
                                        <div>
                                            <button type="button" class="btn btn-primary">Show/hide Editor</button>
                                            <button type="button" class="btn btn-info">Add Media</button>
                                        </div>
                                        <br>
                                        <input type="text" id="desc" class="form-control" name="desc"
                                            placeholder="Description" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="cont">Content</label><br>
                                        <div>
                                            <button type="button" class="btn btn-primary">Show/hide Editor</button>
                                            <button type="button" class="btn btn-info">Add Media</button>
                                            <div class="btn-group">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Info
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                    <a class="dropdown-item" href="#">Payment info</a>
                                                    <a class="dropdown-item" href="#">Blog Posts</a>
                                                    <a class="dropdown-item" href="#">Contact form</a>
                                                    <a class="dropdown-item" href="#">Simple Slider</a>
                                                    <a class="dropdown-item" href="#">Feature Product Categories</a>
                                                    <a class="dropdown-item" href="#">Featured Brands</a>
                                                    <a class="dropdown-item" href="#">Product Collections</a>
                                                    <a class="dropdown-item" href="#">Trending Products</a>
                                                    <a class="dropdown-item" href="#">Product blocks</a>
                                                    <a class="dropdown-item" href="#">All products</a>
                                                    <a class="dropdown-item" href="#">All brands</a>
                                                    <a class="dropdown-item" href="#">Flash sale</a>
                                                    <a class="dropdown-item" href="#">Banners</a>
                                                    <a class="dropdown-item" href="#">Our features</a>
                                                    <a class="dropdown-item" href="#">Testimonials</a>
                                                    <a class="dropdown-item" href="#">Newsletter form</a>
                                                    <a class="dropdown-item" href="#">Featured News</a>
                                                    <a class="dropdown-item" href="#">Google maps</a>
                                                    <a class="dropdown-item" href="#">Youtube video</a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="text" id="cont" class="form-control" name="cont" placeholder="" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="images">Images</label><br>
                                        <button id="select-files" class="btn btn-outline-primary mb-1">
                                            <i data-feather="file"></i> Click me to select files
                                        </button>
                                        <div class="gallery-images-wrapper list-images">
                                            <div class="images-wrapper" style="border: thin #000000">
                                                <div data-name="images[]"
                                                    class="text-center cursor-pointer js-btn-trigger-add-image default-placeholder-gallery-image ">
                                                    <img src="http://ecommerce.sachinenterprise.in/vendor/core/core/base/images/placeholder.png"
                                                        alt="Image" width="100">
                                                    <br>
                                                    <p style="color:#c3cfd8">Using button
                                                        <strong>Select image</strong> to add more images.</p>
                                                </div>
                                                <input type="hidden" name="images[]">
                                                <ul class="list-unstyled list-gallery-media-images hidden ui-sortable"
                                                    style="">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="mb-1">
                                        <label class="form-label" for="upld">Upload video</label><br>
                                        <button id="selectv" class="btn btn-outline-primary mb-1">
                                            <i data-feather="file"></i> Click me to select video
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Overview</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="SKU">SKU</label>
                                                    <input type="text" id="SKU" class="form-control" name="fname"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input type="text" id="price" class="form-control" name="fname"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                          
                                        </div>
                                       

                                        <div class="col-12">
                                            <label class="form-label">Stock status</label>
                                            <select class="form-select" id="basicSelect">
                                                <option>In stock</option>
                                                <option>Out of stock</option>
                                               
                                            </select>
                                        </div>
                                       
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Attributes</h4>
                                <p>Add new attributes</p>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Adding new attributes helps the product to have many options, such as
                                                size or color.</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Related products</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label" for="sname">Related products</label>
                                            <input type="text" id="sname" class="form-control" name="sname"
                                                placeholder="search products" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="csname">Cross-selling products</label>
                                            <input type="text" id="csname" class="form-control" name="csname"
                                                placeholder="search products" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Search Engine Optimize</h4>
                                <p>Edit SEO meta</p>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <p>Setup meta title & description to make your site easy to discovered on search
                                        engines such as Google</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label" for="set">SEO Title</label>
                                            <input type="text" id="set" class="form-control" name="set"
                                                placeholder="seo title" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="sedes">SEO description</label>
                                            <input type="text" id="sedes" class="form-control" name="sedes"
                                                placeholder="seo description" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mb-1 col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Publish</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-info">Save & Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tags</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-select" id="sbasicSelect">
                                                <option>Published</option>
                                                <option>Draft</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Is featured?</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-success form-switch">
                                                <input type="checkbox" checked class="form-check-input"
                                                    id="customSwitch4" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Categories</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tv" />
                                                    <label class="form-check-label" for="tv">Knee Brace</label>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Label</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                    <label class="form-check-label" for="customCheck1">New</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2" />
                                                    <label class="form-check-label" for="customCheck2">Hot</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4" />
                                                    <label class="form-check-label" for="customCheck4">Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tags</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" id="tname" class="form-control" name="tname"
                                                placeholder="Write some tags" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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