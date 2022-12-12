<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:auth-admin-login.php');
}else{
include("../../../include/config.php");


if(isset($_POST['update'])){
    $protocol=$_POST['protocol'];
    $encryption=$_POST['encryption'];
    $host=$_POST['host'];
    $port=$_POST['port'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $passwordhash=password_hash($password,PASSWORD_BCRYPT);
    $sql=mysqli_query($conn,"UPDATE `email_configuration` SET `protocol`='$protocol',`encryption`='$encryption',`host`='$host',`port`='$port',`email`='$email',`username`='$username',`password`='$passwordhash'");
  
    if($sql==1){
     header("location:emailconfiguration.php");
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
  <title>Email Configuration &ndash; Z1KneeBrace</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png" />
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
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
  </div>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">
                Email Config
              </h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                   Setting
                  </li>
                  <li class="breadcrumb-item active">Email Config</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Configuration Form</h4>
                </div>
                <?php 
                $sql=mysqli_query($conn,"SELECT * FROM `email_configuration`");
                $row=mysqli_fetch_array($sql);
                ?>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Protocol</label>
                          <input type="text" value="<?php echo $row['protocol']?>" id="protocol" class="form-control" placeholder="Protocol"
                            name="protocol" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Encryption</label>
                          <input type="text" value="<?php echo $row['encryption']?>" id="encryption	" class="form-control" name="encryption	"
                            placeholder="Encryption" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="host">Host</label>
                          <input type="text" id="host" value="<?php echo $row['host']?>" class="form-control" placeholder="Host" name="host" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Port</label>
                          <input type="text" id="port" value="<?php echo $row['port']?>" class="form-control" name="port"
                            placeholder="Port" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">User Name</label>
                          <input type="text"  value="<?php echo $row['username']?>" id="username" class="form-control"
                            placeholder="User Name" name="username" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Password</label>
                          <input type="password"  id="password" value="<?php echo $row['password']?>" class="form-control"
                            placeholder="Password" name="password" />
                        </div>
                      </div>
                      <div class="col-md-12 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="email-id-column">Email</label>
                          <input type="email" id="email"  value="<?php echo $row['email']?>" class="form-control" name="email" placeholder="Email" />
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" name="update" class="btn btn-primary me-1">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Basic Floating Label Form section end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php include("include/footer.php")?>
  <button class="btn btn-primary btn-icon scroll-top" type="button">
    <i data-feather="arrow-up"></i>
  </button>
  <!-- END: Footer-->

  <!-- BEGIN: Vendor JS-->
  <script src="app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
  <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="app-assets/js/core/app-menu.js"></script>
  <script src="app-assets/js/core/app.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
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
<?php } ?>