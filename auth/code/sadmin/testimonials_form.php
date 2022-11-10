<?php
include('../../../include/config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $company_name=$_POST['company'];
    $message=$_POST['message'];
   
    $sql=mysqli_query($conn,"INSERT INTO `testimonial`(`name`, `company_name`, `message`) VALUES ('$name','$company_name','$message')");
    if($sql==1){
      echo '<script>alert("Successfully submitted");</script>';
      header("location:testimonials.php");
  }else {
      echo '<script>alert("oops...somthing went wrong");</script>';
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



    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item ">Testimonial</li>
                        <li class="breadcrumb-item active">New Testimonial</li>
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
                    <div class="mb-1 col-md-9">
                        <div class="card">
                            <div class="card-body">
                               
                                    <div class="mb-1">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" class="form-control" name="name"
                                            placeholder="Name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="company">Company Name</label>
                                        <!-- <div>
                                            <button type="button" class="btn btn-primary">Show/hide Editor</button>
                                            <button type="button" class="btn btn-info">Add Media</button>
                                        </div> -->
                                       
                                        <input type="text" id="myeditor" class="form-control" name="company"
                                            placeholder="Company Name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="content">Message</label>                                                                         
                                        <textarea type="text" id="content" style="height:10%;" class="form-control" name="message" placeholder="Message"></textarea>
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
                                            <button type="button" class="btn btn-info">Save & Edit</button>
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
                                            <select class="form-select" id="sbasicSelect" name="published">
                                                <option>Published</option>
                                                <option>Draft</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- </form> -->
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
        $(document).ready(function(){
    $('#myfile').change(function(){
        if(this.width != 1071 || this.height != 1500){
        alert('Please upload proper image with exact size : 1071 x 1500px');
       }
    });

    $(document).on('click','.cancleicon',function(){
        $(this).closest('.atrb').remove();
    })
});

// let a=0;
$(document).on('click','#show_attributes',function(){
    // a++;
    // if(a<=3){
    $('.adddiv').append('<div class="row mt-2 atrb">\
    <div class="col-4">\
        <label class="form-label" for="sname">Attribute name</label>\
        <select class="form-control" onChange="get(this.value)" name="attrname[]">\
        <?php
        $selsql=mysqli_query($conn,"select * from product_attribute group by main_title");
        while($arr=mysqli_fetch_array($selsql)){ ?>
            <option value="<?php echo $arr['main_title']; ?>"><?php echo $arr['main_title']; ?></option>\
            <?php } ?>
        </select>\
    </div>\
    <div class="col-4">\
        <label class="form-label" for="csname">Value</label>\
        <select class="form-control designation" name="attrnal[]">\
        </select>\
    </div>\
    <div class="col-4 mt-2">\
        <i class="fa fa-trash cancleicon" style="font-size:20px;color:red;"></i>\
    </div>\
</div>');
    // }
});
 
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

    </script>
   
</body>
<!-- END: Body-->

</html>