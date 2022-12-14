<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'] ?? null;
    $desc=mysqli_real_escape_string($conn,$_POST['desc']);
    $cont=mysqli_real_escape_string($conn,$_POST['cont']);
    $hightlightfile=$_FILES['hightlightfile']['name'];
    $hoverfile=$_FILES['hoverfile']['name'];
    $sizefile=$_FILES['sizefile']['name'];
    $myvideofile=$_POST['myvideofile'];
    $sku=$_POST['sku'] ?? null;
    $price=$_POST['price'] ?? null;
    $stock1=$_POST['stock1'] ?? null;
    $stock=$_POST['stock'] ?? null;
    $attrname1=$_POST['attrname'] ?? null;
    $attrval1=$_POST['attrnal'] ?? null;
    $measurement_video=$_POST['measurement_video'] ?? null;
    $csproduct=$_POST['csproduct'] ?? null;
    $set=$_POST['set'] ?? null;
    $sedes=$_POST['sedes'] ?? null;
    $published=$_POST['published'] ?? null;
    $featured=$_POST['featured'] ?? null;
    $knee=$_POST['knee'];
    $label=$_POST['label'] ?? null;
    $tname=$_POST['tname'] ?? null;
$loc="image/product_image_check/";
// move_uploaded_file($_FILES['myfile']['tmp_name'],$loc);
move_uploaded_file($_FILES['hoverfile']['tmp_name'],$loc.$hoverfile);
move_uploaded_file($_FILES['sizefile']['tmp_name'],$loc.$sizefile);
move_uploaded_file($_FILES['hightlightfile']['tmp_name'],$loc.$hightlightfile);

$images_name='';
foreach ($_FILES["myfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
        $filename = $_FILES["myfile"]["name"][$key];
        move_uploaded_file($tmp_name, $loc.$filename);
        $images_name =$images_name.$filename.",";

        $sql=mysqli_query($conn,"INSERT INTO `product_image`(`name`, `image`) VALUES ('$name','$filename')");
        
    }
}

    foreach($attrval1 as $inde => $naames){
        $s_attrVal = $naames;
        $s_stock=$stock[$inde];
    
        $sql=mysqli_query($conn,"INSERT INTO `stock`(`name`, `value`, `stock`, `product_name`, `product_price`, `status`) VALUES ('$attrname1','$s_attrVal','$s_stock','$name','$price','1')");
    }
   

    $sql=mysqli_query($conn,"INSERT INTO `products`(`image`, `description`, `content`, `name`,`hoverfile`,`sizefile`, `video`, `sku`, `price`, `related_product`, `cross_product`, `seo_title`, `seo_description`, `status`, `featured`, `categories`, `label`, `tags`,`hightlightfile`,`stock_status`) VALUES ('null','$desc','$cont','$name','$hoverfile','$sizefile','$myvideofile','$sku','$price','$measurement_video','$csproduct','$set','$sedes','$published','$featured','$knee','$label','$tname','$hightlightfile','$stock1')");

if($sql==1){
    echo '<script>alert("sucessfully submitted");</script>';
    header('location:products.php');
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
    <title>Product Form &ndash; Z1KneeBrace</title>
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

        .note-editable {
            font-family: 'Poppins' !important;
            font-size: 16px !important;
            text-align: left !important;

            height: 350px !important;

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
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">
                        Product Form
                    </h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Ecommerce</li>
                            <li class="breadcrumb-item active">Product Form</li>
                        </ol>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <form class="form-check" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-1 col-md-9">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-1">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name"
                                            required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="desc">Description</label>
                                        <div class="mt-2">
                                            <textarea class="summernote form-control" name="desc" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="cont">Content</label>
                                        <div class="mt-2">
                                            <textarea class="summernote form-control" name="cont"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="images">Images</label><br>

                                        <div class="upload-btn-wrapper">
                                            <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i>
                                                Click me to select files</button>
                                            <input type="file" name="hightlightfile" id="hightlightfile"
                                                accept="image/webp" required />
                                        </div>
                                        <!-- <input type="file" name="myfile[]" id="myfile" accept="image/*,.webp" multiple/> -->
                                        <p style="color:red">Please upload proper image with exact size : 1071 x 1500px
                                        </p>

                                        <div class="upload-btn-wrapper">
                                            <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i>
                                                Click me to select multiple files</button>
                                            <input type="file" name="myfile[]" id="myfile" accept="image/webp" multiple
                                                />
                                        </div>

                                        <div class="upload-btn-wrapper">
                                            <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i>
                                                Click me to select Hover Files</button>
                                            <input type="file" name="hoverfile" id="hoverfile" accept="image/webp"
                                                required />
                                        </div>
                                        <div class="gallery-images-wrapper list-images">
                                            <div class="images-wrapper" style="border: thin #000000">
                                                <div data-name="images[]"
                                                    class="text-center cursor-pointer js-btn-trigger-add-image default-placeholder-gallery-image ">
                                                    <img src="auth/code/sadmin/image/icon/placeholder.png" alt="Image"
                                                        width="100">
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
                                    <div class="upload-btn-wrapper">
                                        <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i> Click
                                            me to select Size Files</button>
                                        <input type="file" accept="image/webp" name="sizefile" id="sizefile" />
                                    </div>
                                    <div class="upload-btn-wrapper" style="display:block;">
                                        <label class="form-label" for="">Video</label>
                                        <input type="text" name="myvideofile" class="form-control"
                                            placeholder="youtube video link" />
                                    </div>

                                    <div class="upload-btn-wrapper" style="display:block;">
                                        <label class="form-label" for="">Measurement Video</label>
                                        <input type="text" name="measurement_video" class="form-control"
                                            placeholder="youtube video link" />
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Overview</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="SKU">SKU</label>
                                                    <input type="text" id="SKU" class="form-control" name="sku"
                                                        placeholder="" required />
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input type="text" id="price" class="form-control" name="price"
                                                        placeholder="" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Stock status</label>
                                            <!-- <input type="" class="form-control" name="stock" id=""> -->
                                            <select name="stock1" id="" class="form-control" required>
                                                <option value="In Stock">In Stock</option>
                                                <option value="Out Of Stock">Out Of Stock</option>
                                            </select>

                                        </div>


                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Attributes</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Adding new attributes helps the product to have many options, such as
                                                size or color.</p>
                                        </div>
                                        <div class="col-4">
                                            <label class="form-label" for="sname">Attribute name</label>
                                            <select class="form-control" onChange="put(this.value)" name="attrname" required>
                                                <option disabled selected></option>
                                                <?php
                                                $selsql=mysqli_query($conn,"select * from product_attribute group by main_title");
                                                while($arr=mysqli_fetch_array($selsql)){ ?>
                                                <option value="<?php echo $arr['main_title']; ?>">
                                                    <?php echo $arr['main_title']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="designation"></div>
                                    </div>
                                    <!-- <div class="row">
                                                <div class="col-4">
                                                    <label class="form-label" for="sname">Attribute name</label>
                                                    <select name="attrName" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label class="form-label" for="csname">Value</label>
                                                    <select name="attrVal" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div> -->

                                    <!-- <div class="row mt-2 atrb">
                                        <div class="col-4">
                                            <label class="form-label" for="sname">Attribute name</label>
                                            <select class="form-control" onChange="put(this.value);" name="attrname[]">
                                            <option disabled selected></option>
                                            <?php
                                            $selsql=mysqli_query($conn,"select * from product_attribute group by main_title");
                                            while($arr=mysqli_fetch_array($selsql)){ ?>
                                                <option value="<?php echo $arr['main_title']; ?>"><?php echo $arr['main_title']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    
                                    </div> -->
                                    <div class="adddiv">

                                    </div>

                                    <!-- <div class="mt-2">
                                                <button type="button" class="btn btn-outline-primary clickadd">
                                                    Add New Attributes
                                                </button>
                                            </div> -->
                                </div>
                                <!-- </form> -->
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Search Engine Optimize</h4>
                                    <p>Edit SEO meta</p>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <p>Setup meta title & description to make your site easy to discovered on search
                                        engines such as Google</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label" for="set">SEO Title</label>
                                            <input type="text" id="set" class="form-control" name="set"
                                                placeholder="seo title" required/>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="sedes">SEO description</label>
                                            <input type="text" id="sedes" class="form-control" name="sedes"
                                                placeholder="seo description" />
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Publish</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-info saveEdit">Save & Edit</button>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Status</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-select" id="sbasicSelect" name="published"
                                                onChange="pub(this.value)">
                                                <option value="Published">Published</option>
                                                <option value="Draft">Draft</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Is featured?</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-success form-switch">
                                                <input type="checkbox" value="1" class="form-check-input"
                                                    id="customSwitch4" name="featured" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Categories</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tv" name="knee"
                                                        value="accessories" />
                                                    <label class="form-check-label" for="tv">Accessories</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Label</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1"
                                                        name="label" value="New" />
                                                    <label class="form-check-label" for="customCheck1">New</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2"
                                                        name="label" value="Hot" />
                                                    <label class="form-check-label" for="customCheck2">Hot</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4"
                                                        name="label" value="Sale" />
                                                    <label class="form-check-label" for="customCheck4">Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tags</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" id="tname" class="form-control" name="tname"
                                                placeholder="Write some tags" />
                                        </div>
                                    </div>

                                </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        //         $(document).ready(function(){
        //     $('#myfile').change(function(){
        //         if(this.width != 1071 || this.height != 1500){
        //         alert('Please upload proper image with exact size : 1071 x 1500px');
        //        }
        //     });

        //     $(document).on('click','.cancleicon',function(){
        //         $(this).closest('.atrb').remove();
        //     })
        // });

        let a = 0;
        $(document).on('click', '#show_attributes', function () {
            a++;
            if (a <= 1) {
                $('.adddiv').append('<div class="row mt-2 atrb">\
   ');
            }
        });

        function put(val) {
            $.ajax({
                type: 'POST',
                url: 'api.php',
                data: 'attr=' + val,
                success: function (html) {
                    $('.designation').html(html);
                }
            });
        }

        $(".saveEdit").css("display", "none");

        function pub(val) {
            if (val == 'Published') {
                $(".saveEdit").css("display", "block");
            }
        }

        $(document).on('click', '.cancleicon', function () {
            $(this).closest('.atrb').remove();
        })
    </script>
    <!-- include libraries(jQuery, bootstrap) -->

    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

        });
    </script>
 
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</body>
<!-- END: Body-->

</html>
<?php } ?>