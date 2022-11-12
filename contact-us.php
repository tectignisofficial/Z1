<?php 
session_start();
include('include/config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
   
    $sql=mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name','$email','$phone','$subject','$message')");
    if($sql==1){
      echo '<script>alert("Successfully submitted");</script>';
      header("location:contact-us.php");
  }else {
      echo '<script>alert("oops...somthing went wrong");</script>';
  }
          
  }
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Contact Us &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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
    #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>

</head>
<body class="contact-template page-template belle">
<div class="pageWrapper">
<?php include("include/header.php");?>
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Contact Us</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <div class="map-section map" id="map">
        
        </div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	<h2>Drop Us A Line</h2>
                    
                	<div class="formFeilds contact-form form-vertical">
                      <form action="" method="post"  id="contact_form" class="contact-form">	
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                          	<input type="text" id="name" name="name" placeholder="Name" value="" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
							<input type="email" id="email" name="email" placeholder="Email" value="" required="">                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="phone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="subject" name="subject" placeholder="Subject" value="">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea required="" rows="10" id="message" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" name="submit" id="submit" class="btn" value="Send Message">
                        </div>
                     </div>
                     </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="open-hours">
                    	<strong>Opening Hours</strong><br>
						Mon - Sat : 9am - 11pm<br>
						Sunday: 11am - 5pm
                    </div>
                	<hr />
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i><p>D-114, 5th road Shakti Nagar, Paota c road
Jodhpur, Rajasthan 342010</p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i><p>+91 7300044197</p></li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i><p>info@z1kneebrace.com</p></li>
                    </ul>
                    <hr />
                    <ul class="list--inline site-footer__social-icons social-icons">
                    <?php                         
$sql=mysqli_query($conn,"select * from social_media");
$facebook=mysqli_fetch_array($sql);

?>
                        <li><a class="social-icons__link" href="<?php echo $facebook['facebook']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['twitter']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['pinterest']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['instagram']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['tumblr']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['youtube']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                        <li><a class="social-icons__link" href="<?php echo $facebook['vimeo']?>" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                    </ul>
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
     <script>
        function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
        </script>

     <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyk3flh2DVLF63Ug9kPICZi72a8RfJvmk&callback=initMap&v=weekly"
      defer
    ></script>
</div>
</body>

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
</html>