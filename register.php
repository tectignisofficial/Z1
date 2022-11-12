<?php
include('include/config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';





if(isset($_POST['register'])){


    $FullName=$_POST['customerName'];
    $customerPhone=$_POST['customerPhone'];
    $customerEmail=$_POST['customerEmail'];
    $customerPassword=$_POST['customerPassword'];

     $to=$customerEmail;
   $sub="Password";

    $password=password_hash($customerPassword,PASSWORD_BCRYPT);

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
  $mail->addAddress($customerEmail, $FullName);    
  
  //Content
  $mail->isHTML(true);                               
  $mail->Subject = 'Verify Email';
  $mail->Body    = '
  <!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <!--[if mso]>
    <xml><o:officedocumentsettings><o:pixelsperinch>96</o:pixelsperinch></o:officedocumentsettings></xml>
  <![endif]-->
    <title>Verify Email Address</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700" rel="stylesheet" media="screen">
    <style>
.hover-underline:hover {
  text-decoration: underline !important;
}
@media (max-width: 600px) {
  .sm-w-full {
    width: 100% !important;
  }
  .sm-px-24 {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .sm-py-32 {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .sm-leading-32 {
    line-height: 32px !important;
  }
}
</style>
</head>
<body style="margin: 0; width: 100%; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #eceff1;">
    <div style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; display: none;">Please verify your email address</div>
  <div role="article" aria-roledescription="email" aria-label="Verify Email Address" lang="en" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly;">
    <table style="width: 100%; font-family: Montserrat, -apple-system, Segoe UI, sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center" style="mso-line-height-rule: exactly; background-color: #eceff1; font-family: Montserrat, -apple-system, Segoe UI, sans-serif;">
          <table class="sm-w-full" style="width: 600px;" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
  <td class="sm-py-32 sm-px-24" style="mso-line-height-rule: exactly; padding: 48px; text-align: center; font-family: Montserrat, -apple-system, Segoe UI, sans-serif;">
    <a href="https://1.envato.market/vuexy_admin" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly;">
      <img src="images/logo.png" width="155" alt="Vuexy Admin" style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0;">
    </a>
  </td>
</tr>
              <tr>
                <td align="center" class="sm-px-24" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly;">
                  <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="mso-line-height-rule: exactly; border-radius: 4px; background-color: #ffffff; padding: 48px; text-align: left; font-family: Montserrat, -apple-system, Segoe UI, sans-serif; font-size: 16px; line-height: 24px; color: #626262;">
                        <p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin-bottom: 0; font-size: 20px; font-weight: 600;">Hey</p>
                        <p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin-top: 0; font-size: 24px; font-weight: 700; color: #ff5850;">John Doe!</p>
                        <p class="sm-leading-32" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 16px; font-size: 24px; font-weight: 600; color: #263238;">
                          Thanks for signing up! 👋
                        </p>
                        <p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 24px;">
                          Please verify your email address by clicking the below button and join our creative community,
                          start exploring the resources or showcasing your work.
                        </p>
                        <p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 24px;">
                          If you did not sign up to PixInvent, please ignore this email or contact us at
                          <a href="mailto:support@example.com" class="hover-underline" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">support@example.com</a>
                        </p>
                        <a href="https://pixinvent.com?verification_url" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin-bottom: 24px; display: block; font-size: 16px; line-height: 100%; color: #7367f0; text-decoration: none;">https://pixinvent.com?verification_url</a>
                        <table cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="mso-line-height-rule: exactly; mso-padding-alt: 16px 24px; border-radius: 4px; background-color: #7367f0; font-family: Montserrat, -apple-system, Segoe UI, sans-serif;">
                              <a href="https://pixinvent.com?verification_url" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; display: block; padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; font-size: 16px; font-weight: 600; line-height: 100%; color: #ffffff; text-decoration: none;">Verify Email Now &rarr;</a>
                            </td>
                          </tr>
                        </table>
                        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <td style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; padding-top: 32px; padding-bottom: 32px;">
      <div style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; height: 1px; background-color: #eceff1; line-height: 1px;">&zwnj;</div>
    </td>
  </tr>
</table>
<p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 16px;">
  Not sure why you received this email? Please
  <a href="mailto:support@example.com" class="hover-underline" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">let us know</a>.
</p>
<p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 16px;">Thanks, <br>The PixInvent Team</p>
                      </td>
                    </tr>
                    <tr>
  <td style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; height: 20px;"></td>
</tr>
<tr>
  <td style="mso-line-height-rule: exactly; padding-left: 48px; padding-right: 48px; font-family: Montserrat, -apple-system, Segoe UI, sans-serif; font-size: 14px; color: #eceff1;">
    <p align="center" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; margin-bottom: 16px; cursor: default;">
      <a href="https://www.facebook.com/pixinvents" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #263238; text-decoration: none;"><img src="images/facebook.png" width="17" alt="Facebook" style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0; margin-right: 12px;"></a>
      &bull;
      <a href="https://twitter.com/pixinvents" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #263238; text-decoration: none;"><img src="images/twitter.png" width="17" alt="Twitter" style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0; margin-right: 12px;"></a>
      &bull;
      <a href="https://www.instagram.com/pixinvents" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #263238; text-decoration: none;"><img src="images/instagram.png" width="17" alt="Instagram" style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0; margin-right: 12px;"></a>
    </p>
    <p style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #263238;">
      Use of our service and website is subject to our
      <a href="https://pixinvent.com/" class="hover-underline" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">Terms of Use</a> and
      <a href="https://pixinvent.com/" class="hover-underline" style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">Privacy Policy</a>.
    </p>
  </td>
</tr>
<tr>
  <td style="font-family: Montserrat, sans-serif; mso-line-height-rule: exactly; height: 16px;"></td>
</tr>
                  </table>
                </td>
              </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>


  
  Click on this Link to Verify Your Email ID http://'.$_SERVER['SERVER_NAME'].'/Z1/verify.php?email='.$customerEmail.'';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if($mail->send()){
  $sql=mysqli_query($conn, "INSERT INTO `customers`(`name`, `phone`, `email`, `password`) VALUES ('$FullName','$customerPhone','$customerEmail','$password')");

    if($sql==1){
        echo "<script>alert('sucessfully submitted');window.location = 'login.php'</script>";
       
    }else{
        echo '<script>alert("something went wrong");</script>';
    }
  
  }
  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




   

}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/register.html   11 Nov 2019 12:22:27 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Create an Account &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->



    <?php include("include/header.php");?>
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="post" action="#" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">Full Name</label>
                                    <input type="text" name="customerName" placeholder="" id="FirstName" autofocus="">
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Phone No</label>
                                    <input type="text" name="customerPhone" placeholder="" id="LastName">
                                </div>
                               </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="customerEmail" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password" value="" name="customerPassword" placeholder="" id="CustomerPassword" class="">                        	
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Create" name="register">
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
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

<!-- belle/register.html   11 Nov 2019 12:22:27 GMT -->
</html>