<?php
session_start();
include('include/config.php');
if(isset($_SESSION['customerid'])){
    header('location:index.php');
}else{
if(isset($_POST['login'])){


    $customerEmail=mysqli_real_escape_string($conn,$_POST['customerEmail']);
    $customerPassword=mysqli_real_escape_string($conn,$_POST['customerPassword']);

    $sql=mysqli_query($conn, "SELECT * FROM `customers` WHERE email='$customerEmail' and email_verify='1'");

  if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($customerPassword,$row['password']);

	 if($verify==1){
	  $_SESSION['customerid']=$row['id'];
      $_SESSION['customername']=$row['name'];
       header('location:myaccount.php');

     }else{
         header('location:login.php');
        
     }
    }
}
      ?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Login &ndash; Z1KneeBrace</title>
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
    .eye{
        float: right;
    position: absolute;
    right: 25px;
    font-size: 18px;
    top: 37px
    }
</style>
</head>
<body class="page-template belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->

  <?php include("include/header.php");?>
	<!--End Mobile Menu--> 
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
        <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Login</h1>
                        <p><a href="index.php">Home</a> / <span>Login</span></p>
                    </div>
                </div>
            </div>
        <!--End Page Title-->
        
        <div class="container mt-5">
        	<div class="row"> 
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="">
                       <form method="post" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">OTP</label>
                                    <input type="text" name="otp" placeholder="" id="otp" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                    <input type="email" name="customerEmail" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                             
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" name="login" class="btn mb-3" value="Sign In" >
                                
                                <p class="mb-4">
									<a href="forgotpassword.php" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
								    <a href="register.php" id="customer_register_link">Create account</a>
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
 
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
     <script>
        $(document).on('click', '.toggle-password', function() {

$(this).toggleClass("fa-eye fa-eye-slash");

let input = $("#CustomerPassword");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
     </script>
</div>
</body>

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
</html>
<?php } ?>