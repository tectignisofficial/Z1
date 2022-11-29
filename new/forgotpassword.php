<?php
session_start();
include('include/config.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if(isset($_POST['submit'])){


    $customerEmail=$_POST['customerEmail'];
    $pass= rand(100000, 999999);

   $to=$customerEmail;
   $sub="Password";
 
 $mail = new PHPMailer(true);
 try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
  $mail->isSMTP();                             
  $mail->Host       = 'smtp-relay.sendinblue.com';    
  $mail->SMTPAuth   = true;                           
  $mail->Username   = 'tectignisitsolutions@gmail.com';           
  $mail->Password   = 'Om2rkzEaA7N5Mcf4';                          
  $mail->SMTPSecure = 'TLS';             
  $mail->Port       = '587';                            

  //Recipients
  $mail->setFrom('naiduvedant@gmail.com', 'Z1 Knee Braces');
  $mail->addAddress($customerEmail);    
  
  //Content
  $mail->isHTML(true);                               
  $mail->Subject = 'Password';
  $mail->Body    = 'Login New Password  '.$customerEmail.' and '.$pass;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if($mail->send()){
    $passwordhash=password_hash($pass,PASSWORD_BCRYPT);

  $sql=mysqli_query($conn,"UPDATE `customers` SET `password`='$passwordhash' where email='$customerEmail'");
    if($sql=1){
      header("location:login.php");
    }
    else{
      echo "<script>alert('Something Wrong');</script>";
    }
  
  }
  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
      ?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Account &ndash; Z1</title>
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
<body class="page-template belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->

  <?php include("include/header.php");?>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Forgot Password</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="">
                       <form method="post" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="customerEmail" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                          
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" name="submit" class="btn mb-3" value="Submit">
                                <p class="mb-4">
									<a href="login.php" id="RecoverPassword">Login</a> &nbsp; | &nbsp;
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
</div>
</body>

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
</html>