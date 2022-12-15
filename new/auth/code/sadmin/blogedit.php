<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include("../../../include/config.php");
$id=$_GET['eid'];

if(isset($_POST['update'])){

$title=$_POST['title'];
$content=$_POST['content'];
$file=$_FILES['file']['name'];
$metatitle=$_POST['metatitle'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="dist/img/".$file;
move_uploaded_file($tmp_name, $loc);

  
if(empty($_FILES['file']['tmp_name']) && ($_POST['img']) && ($_GET['eid'])){
    $id=$_GET['eid'];
    $img = $_POST['img'];
    
    $sql=mysqli_query($conn,"UPDATE `blog` SET `title`='$title', `content`='$content', `file`='$img',`blog`='$metatitle' WHERE id='$id'");
    // echo "<script>alert('hyg');</script>";
   
    }
   
  else if(!empty($_FILES['file']['tmp_name']) && ($_POST['img']) || !empty($_FILES['file']['tmp_name']) && (empty($_POST['img']) && ($_GET['eid']))){
    $id=$_GET['eid'];
move_uploaded_file($tmp_name, $loc);

$sql=mysqli_query($conn,"UPDATE `blog` SET `title`='$title', `content`='$content', `file`='$file',`blog`='$metatitle' WHERE id='$id'");
// echo "<script>alert('hyg4');</script>";
     

  }

  if($sql==1){
    header("location:blogtable.php");
 }else{
     mysqli_error($conn);
 }
}

?>

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
    <title>Blog Edit &ndash; Z1KneeBrace</title>
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
    
    <style>
        .note-editable { 
    font-family: 'Poppins' !important; 
    font-size: 15px !important; 
    text-align: left !important; 
    
    height: 350px !important;
    
}
    </style>
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
                                <?php 
                                    $sql=mysqli_query($conn,"SELECT * FROM `blog` WHERE id='$id'");
                                    $row=mysqli_fetch_array($sql);
                                ?>
                                <div class="card-body">
                                    <!-- Form -->
                                    <form action="" class="mt-2" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="blog-edit-title">Title</label>
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        value="<?php echo $row['title']?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="blog-edit-title">Meta Title</label>
                                                    <input type="text" id="title" name="metatitle" class="form-control"
                                                        value="<?= $row['blog']?>" required/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label class="form-label">Content</label>
                                                    <div id="">
                                                        <div id="blog-editor-container">
                                                            <textarea class="summernote form-control" name="content"
                                                                id="content"><?php echo $row['content']?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Featured Image</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <?php
                                                            if(isset($_GET['eid'])){
                                                        ?>
                                                    <img class="rounded me-2 mb-1 mb-md-0"
                                                        src="dist/img/<?php echo $row['file']?>" width="180"
                                                        height="140">
                                                    <input type="hidden" value="<?php echo $row['file']?>" name="img">
                                                    <?php }  ?>
                                                    <div class="featured-info">
                                                        <large class="text-muted">Required image resolution 800x400,
                                                            image size
                                                            10mb.</large>
                                                        <p class="my-80">

                                                        </p>
                                                        <div class="d-inline-block">
                                                            <input type="file" class="form-control" name="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-50">
                                            <button type="submit" id="update" name="update"
                                                class="btn btn-primary me-1">
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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- include summernote css/js -->
    
</body>
<!-- END: Body-->

</html>
<?php } ?>