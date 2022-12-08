<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include('../../../include/config.php');
$eid=$_GET['eid'];
$editSql=mysqli_query($conn,"select *,products.name from products inner join stock on products.name=stock.product_name where products.id='$eid'");
$editArr=mysqli_fetch_array($editSql);
$pname=$editArr['products'];
if(isset($_POST['updatecurrrency'])){
    $stock=$_POST['updaterate'];
    $id=$_POST['id'];
    $sql=mysqli_query($conn,"UPDATE `stock` SET `stock`='$stock' where id='$id'");
    if($sql){
    }
    else{
        echo "<script>alert('error')</script>";
    }
}

if(isset($_POST['submit'])){
    $name=$_POST['name'] ?? null;
    $desc=mysqli_real_escape_string($conn,$_POST['desc']);
    $cont=$_POST['cont'] ?? null;
    $hightlightfile=$_FILES['hightlightfile']['name'];
    $hoverfile=$_FILES['hoverfile']['name'];
    $sizefile=$_FILES['sizefile']['name'];
    $myvideofile=$_POST['myvideofile'];
    $sku=$_POST['sku'] ?? null;
    $price=$_POST['price'] ?? null;
    $stock=$_POST['stock'] ?? null;
    $attrname1=$_POST['attrname'] ?? null;
    $attrval1=$_POST['attrnal'] ?? null;
    $rproduct=$_POST['rproduct'] ?? null;
    $csproduct=$_POST['csproduct'] ?? null;
    $set=$_POST['set'] ?? null;
    $sedes=$_POST['sedes'] ?? null;
    $published=$_POST['published'] ?? null;
    $featured=$_POST['featured'] ?? null;
    $knee=$_POST['knee'] ?? null;
    $label=$_POST['label'] ?? null;
    $tname=$_POST['tname'] ?? null;
    $hightlightfilehide=$_POST['hightlightfilehide'];
    $sizefilehide=$_POST['sizefilehide'];
    $hoverfilehide=$_POST['hoverfilehide'];
    $myfilehide=$_POST['myfilehide'];

$loc="image/product_image_check/";
move_uploaded_file($_FILES['hoverfile']['tmp_name'],$loc.$hoverfile);
move_uploaded_file($_FILES['sizefile']['tmp_name'],$loc.$sizefile);
move_uploaded_file($_FILES['hightlightfile']['tmp_name'],$loc.$hightlightfile);

$images_name='';
foreach ($_FILES["myfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
        $filename = $_FILES["myfile"]["name"][$key];
        move_uploaded_file($tmp_name, $loc.$filename);
        $images_name =$images_name.",".$filename;

        $sql=mysqli_query($conn,"UPDATE `product_image` SET `image`='[value-3]' WHERE name='$pname'");
    }
}

// if(empty($_FILES["myfile"]["tmp_name"][$key]) && empty($_FILES['hoverfile']['tmp_name']) && empty($_FILES['sizefile']['tmp_name']) && empty($_FILES['hightlightfile']['tmp_name']) && ($_POST['myfilehide']) && ($_POST['hoverfilehide']) && ($_POST['sizefilehide']) && ($_POST['hightlightfilehide'])){

//     $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$myfilehide',`hightlightfile`='$hightlightfilehide',`hoverfile`='$hoverfilehide',`sizefile`='$sizefilehide',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
// }
if(!empty($_FILES["hightlightfile"]["tmp_name"][$key]) && empty($_POST['hightlightfilehide']) || !empty($_FILES["hightlightfile"]["tmp_name"][$key]) && !empty($_POST['hightlightfilehide']) && !empty($_FILES["hoverfile"]["tmp_name"][$key]) && empty($_POST['hoverfilehide']) || !empty($_FILES["hoverfile"]["tmp_name"][$key]) && !empty($_POST['hoverfilehide']) && !empty($_FILES["sizefile"]["tmp_name"][$key]) && empty($_POST['sizefilehide']) || !empty($_FILES["sizefile"]["tmp_name"][$key]) && !empty($_POST['sizefilehide'])){
    $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$myfilehide',`hightlightfile`='$hightlightfilehide',`hoverfile`='$hoverfilehide',`sizefile`='$sizefilehide',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
}
else if(!empty($_FILES["hightlightfile"]["tmp_name"]) && empty($_POST['hightlightfilehide']) || !empty($_FILES["hightlightfile"]["tmp_name"]) && !empty($_POST['hightlightfilehide'])){
    $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$myfilehide',`hightlightfile`='$hightlightfile',`hoverfile`='$hoverfilehide',`sizefile`='$sizefilehide',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
   
}
else if(!empty($_FILES["myfile"]["tmp_name"][$key]) && empty($_POST['myfilehide']) || !empty($_FILES["myfile"]["tmp_name"][$key]) && !empty($_POST['myfilehide'])){
    $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$images_name',`hightlightfile`='$hightlightfilehide',`hoverfile`='$hoverfilehide',`sizefile`='$sizefilehide',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
}
else if(!empty($_FILES["hoverfile"]["tmp_name"]) && empty($_POST['hoverfilehide']) || !empty($_FILES["hoverfile"]["tmp_name"]) && !empty($_POST['hoverfilehide'])){
    $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$myfilehide',`hightlightfile`='$hightlightfilehide',`hoverfile`='$hoverfile',`sizefile`='$sizefilehide',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
}
else if(!empty($_FILES["sizefile"]["tmp_name"][$key]) && empty($_POST['sizefilehide']) || !empty($_FILES["sizefile"]["tmp_name"][$key]) && !empty($_POST['sizefilehide'])){
    $sql=mysqli_query($conn,"UPDATE `products` SET `name`='$name',`description`='$desc',`content`='$cont',`image`='$myfilehide',`hightlightfile`='$hightlightfilehide',`hoverfile`='$hoverfilehide',`sizefile`='$sizefile',`video`='$myvideofile',`sku`='$sku',`price`='$price',`seo_title`='$set',`seo_description`='$sedes',`status`='$published',`featured`='$published',`categories`='$knee',`label`='$label',`tags`='$tname' WHERE id='$eid'");
}

if($sql==1){
    echo '<script>alert("Update sucessfully submitted");</script>';
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
    <title>Product Edit &ndash; Z1KneeBrace</title>
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
  cursor:pointer;
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

    <?php  $sql=mysqli_query($conn,"select * from stock ");
$count=1;
while($arr=mysqli_fetch_array($sql)){
?>
<div class="modal fade" id="editUser<?php echo $arr['id'] ?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
        <div class="modal-header bg-transparent">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-5 px-sm-5 pt-50">
            <div class="text-center mb-2">
                <h1 class="mb-1">Edit Currency</h1>
            </div>
            <form id="editUserForm" method="post" class="row gy-1 pt-75">
                <div class="col-12 col-md-12">
                    <label class="form-label" for="modalEditUserFirstName">Stock</label>
                    <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                    <input type="text" id="updaterate" name="updaterate" class="form-control" placeholder="Rate" value="<?php echo $arr['stock'] ?>"/>
                </div>
                <div class="col-12 text-center mt-2 pt-50">
                    <button type="submit" name="updatecurrrency" id="updatecurrrency" class="btn btn-primary me-1">Update</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Discard
                    </button>
                </div>
               
            </form>
        </div>
    </div>
</div>
</div>
<?php $count++; } ?>
<!--/ Edit User Modal -->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">
                                Edit Product
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Ecommerce</li>
                                    <li class="breadcrumb-item active">Product</li>
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
                                        <input type="text" id="name" class="form-control" name="name"
                                            placeholder="Name" value="<?php echo $editArr['name']; ?>" required/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="desc">Description</label>
                                        <div class="mt-2">
        <textarea class="summernote form-control" name="desc"><?php echo $editArr['description']; ?></textarea>
    </div>
    
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="cont">Content</label>

                                        <div class="mt-2">
        <textarea class="summernote form-control" name="cont"><?php echo $editArr['content']; ?></textarea>
    </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="images">Images</label><br>
                                       
                                        <div class="upload-btn-wrapper">
                                        <img src="image/product_image_check/<?php echo $editArr['hightlightfile']; ?>" alt="" width="50" height="50">
                                        <input type="hidden" name="hightlightfilehide" value="<?php echo $editArr['hightlightfile']; ?>">
                                        <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i> Click me to select files</button>
                                        <input type="file" name="hightlightfile" id="hightlightfile" value="<?php echo $editArr['hightlightfile']; ?>" accept="image/webp" />
                                        </div>
                                        <p style="color:red">Please upload proper image with exact size : 1071 x 1500px</p>

                                        <div class="upload-btn-wrapper">
                                        <?php
                                        $imagequery=mysqli_query($conn,"select * from product_image where name='$pname'");
                                        while($image=mysqli_fetch_array($imagequery)){
                                            echo '<img src="image/product_image_check/'. $image['image'] .'" alt="" width="50" height="50">';
                                             }
                                        ?>
                                        
                                        <input type="hidden" name="myfilehide" value="<?php echo $editArr['image']; ?>">
                                        <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i> Click me to select multiple files</button>
                                        <input type="file" name="myfile[]" id="myfile" accept="image/webp" multiple value="<?php echo $editArr['image']; ?>"/>
                                        </div>

                                        <div class="upload-btn-wrapper">
                                        <img src="image/product_image_check/<?php echo $editArr['hoverfile']; ?>" alt="" width="50" height="50">
                                        <input type="hidden" name="hoverfilehide" value="<?php echo $editArr['hoverfile']; ?>">
                                        <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i> Click me to select Hover Files</button>
                                        <input type="file" name="hoverfile" id="hoverfile" accept="image/webp" value="<?php echo $editArr['hoverfile']; ?>"/>
                                        </div>
                                        <!-- <div class="gallery-images-wrapper list-images">
                                            <div class="images-wrapper" style="border: thin #000000">
                                                <div data-name="images[]"
                                                    class="text-center cursor-pointer js-btn-trigger-add-image default-placeholder-gallery-image ">
                                                    <img src="auth/code/sadmin/image/icon/placeholder.png"
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
                                        </div> -->
                                    </div>

                                    
                                    <div class="upload-btn-wrapper">
                                    <img src="image/product_image_check/<?php echo $editArr['sizefile']; ?>" alt="" width="50" height="50">
                                        <input type="hidden" name="sizefilehide" value="<?php echo $editArr['sizefile']; ?>">
                                        <button class="btn1 btn-outline-primary mb-1"><i data-feather="file"></i> Click me to select Size Files</button>
                                        <input type="file" accept="image/webp"  name="sizefile" id="sizefile" value="<?php echo $editArr['sizefile']; ?>"/>
                                        </div>
                                    <div class="upload-btn-wrapper" style="display:block;">
                                    <label class="form-label" for="">Video</label>
                                        <input type="text" name="myvideofile" class="form-control" placeholder="youtube video link" value="<?php echo $editArr['video']; ?>"/>
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
                                                        placeholder="" value="<?php echo $editArr['sku']; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input type="text" id="price" class="form-control" name="price"
                                                        placeholder="" value="<?php echo $editArr['price']; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Stock status</label>
                                            <!-- <input type="number" class="form-control" name="stock" id="" value="<?php echo $editArr['stock_status']; ?>"> -->
                                            <select name="stock" id="" class="form-control">
                                                <option value="In Stock" <?php if($editArr['stock_status']=='In Stock'){ echo 'selected'; }?>>In Stock</option>
                                                <option value="Out Of Stock" <?php if($editArr['stock_status']=='Out Of Stock'){ echo 'selected'; }?>>Out Of Stock</option>
                                            </select>
                                            
                                        </div>
                                       
                                        
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Attributes</h4>
                                <p id="show_attributes" class="clickadd">Add new attributes</p>
                            </div>
                            <div class="card-body">
                                <!-- <form class="form form-vertical"> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Adding new attributes helps the product to have many options, such as
                                                size or color.</p>
                                        </div>
                                        <?php
                                        $productname=$editArr['name'];
                                        $query = mysqli_query($conn,"SELECT * from stock WHERE product_name ='$productname'");
                                        while($arr=mysqli_fetch_array($query)){
                                        ?>
                                        <div class="row mt-2">
  <div class="col-3">
  <label class="form-label" for="csname">Value</label>
  <input type="text" class="form-control" name="attrnal[]" value="<?= $arr['value'] ?>" readonly>
</div>
<div class="col-3">
  <label class="form-label" for="csname">Stock</label>
  <input type="text" class="form-control" name="stock[]" value="<?= $arr['stock'] ?>" readonly>
</div>
<div class="col-3 mt-2">
<button type="button" class="btn btn-icon rounded-circle btn-flat-primary btnmod1"    data-bs-toggle="modal" data-bs-target="#editUser<?= $arr['id'] ?>">
<i  data-feather="edit"></i></button>
  <!-- <i class="fa fa-edit " style="font-size:20px;color:grey;"></i> -->
</div>
</div>
<?php } ?>
                                        <!-- <div class="col-4">
        <label class="form-label" for="sname">Attribute name</label>
        <select class="form-control" onChange="put(this.value)" name="attrname">
        <option disabled selected></option>
        <?php
        $selsql=mysqli_query($conn,"select * from product_attribute group by main_title");
        while($arr=mysqli_fetch_array($selsql)){ ?>
            <option value="<?php echo $arr['main_title']; ?>"><?php echo $arr['main_title']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="designation"></div>
</div> -->
                                            <div class="adddiv">

                                            </div>
                     
                                    </div>
                                <!-- </form> -->
                            </div>
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
                                                placeholder="seo title" value="<?php echo $editArr['seo_title']; ?>"/>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="sedes">SEO description</label>
                                            <input type="text" id="sedes" class="form-control" name="sedes"
                                                placeholder="seo description" value="<?php echo $editArr['seo_description']; ?>"/>
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
                                            <select class="form-select" id="sbasicSelect" name="published" onChange="pub(this.value)">
                                                
                                                <option value="Published" <?php if( $editArr['status'] == 'Published'){ echo 'selected'; } ?>>Published</option>
                                                <option value="Draft" <?php if( $editArr['status'] == 'Draft'){ echo 'selected'; } ?>>Draft</option>
                                                <option value="Pending" <?php if( $editArr['status'] == 'Pending'){ echo 'selected'; } ?>>Pending</option>
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
                                                    id="customSwitch4" <?php if( $editArr['featured'] == '1'){ echo 'checked'; } ?> name="featured"/>
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
                                                    <input type="checkbox" class="form-check-input" id="tv" name="knee" value="Knee Brace" <?php if( $editArr['categories'] == 'Knee Brace'){ echo 'checked'; } ?>/>
                                                    <label class="form-check-label" for="tv">Knee Brace</label>
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
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" name="label" value="New" <?php if( $editArr['label'] == 'New'){ echo 'checked'; } ?>/>
                                                    <label class="form-check-label" for="customCheck1">New</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2" name="label" value="Hot" <?php if( $editArr['label'] == 'Hot'){ echo 'checked'; } ?>/>
                                                    <label class="form-check-label" for="customCheck2">Hot</label>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4" name="label" value="Sale" <?php if( $editArr['label'] == 'Sale'){ echo 'checked'; } ?>/>
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
                                                placeholder="Write some tags" value="<?php echo $editArr['tags']; ?>"/>
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


 
$(document).on('click','.cancleicon',function(){
        $(this).closest('.atrb').remove();
    })

function get(val){
    $.ajax({
  type:'POST',
  url:'api.php',
  data:'attr='+val,
  success:function(html){
    $('.designation').html(html);
  }
});
}

$(".saveEdit").css("display","none");
function pub(val){
    if(val=='Published'){
        $(".saveEdit").css("display","block");
    }
}

$(document).ready(function() {
      $('.summernote').summernote();

    });
    </script>
     <!-- include libraries(jQuery, bootstrap) -->
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    
</body>
<!-- END: Body-->

</html>
<?php } ?>