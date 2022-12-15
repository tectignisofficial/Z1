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
      echo '<script>alert("Thanks for contacting us! We will be in touch with you shortly.");window.location.href="contact-us.php"</script>';
      // header("location:contact-us.php");
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
  <title>Contact Us &ndash; Z1KneeBrace</title>
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
  <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.5.css">
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
          <div class="wrapper">
            <h1 class="page-width" style="padding:25px 0">Contact Us</h1>
            <p style="margin-top:-25px;"><a href="index.php">Home</a> / <span>Contact Us</span></p>
          </div>
        </div>
      </div>
      <!--End Page Title-->
      <div class="map-section map" id="map">

      </div>
      <div class="bredcrumbWrap">
        <div class="container breadcrumbs">
          <a href="index.html" title="Back to the home page">Home</a>
          <span aria-hidden="true">›</span><span>Contact
            Us</span>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
            <h2>Contact Form</h2>

            <div class="formFeilds contact-form form-vertical mt-4">
              <form action="" method="post" id="contact_form" class="contact-form">
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
                      <input required="" type="tel" id="phone" name="phone" pattern="[0-9\-]*"
                        placeholder="Phone Number" value="">
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
              Mon - Sat : 10am - 5pm<br>
            </div>
            <hr />
            <ul class="addressFooter">
            <h4 class="h4"><strong>Corporate Office Address</strong></h4>
                             <li><i class="icon anm anm-map-marker-al"></i>
                                 <p>D-114, 5th road Shakti Nagar,<br> Paota&nbsp;c road Jodhpur, Rajasthan, India - 342010</p>
                             </li>
                             <h4 class="h4"><strong>Branch Office Address</strong></h4>
                            <li><i class="icon anm anm-map-marker-al"></i>
                                 <p>Plot No. 23, Park Residency Society,<br> Near Indana Hotel Jodhpur, Rajasthan, India - 342001</p>
                             </li>
              <li class="phone"><i class="icon anm anm-phone-s"></i>
                <p>+91 7300044197</p>
              </li>
              <li class="email"><i class="icon anm anm-envelope-l"></i>
                <p>info@z1kneebrace.com</p>
              </li>
            </ul>
            <hr />
            <!-- <ul class="list--inline site-footer__social-icons social-icons">
              <?php                         
              $sql=mysqli_query($conn,"select * from social_media");
              $facebook=mysqli_fetch_array($sql);

              ?>
                            <li><a class="social-icons__link" href="<?php echo $facebook['facebook']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a>
              </li>
              <li><a class="social-icons__link" href="<?php echo $facebook['twitter']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span
                    class="icon__fallback-text">Twitter</span></a></li>
              <li><a class="social-icons__link" href="<?php echo $facebook['pinterest']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span
                    class="icon__fallback-text">Pinterest</span></a></li>
              <li><a class="social-icons__link" href="<?php echo $facebook['instagram']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span
                    class="icon__fallback-text">Instagram</span></a></li>
              <li><a class="social-icons__link" href="<?php echo $facebook['tumblr']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span
                    class="icon__fallback-text">Tumblr</span></a></li>
              <li><a class="social-icons__link" href="<?php echo $facebook['youtube']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span
                    class="icon__fallback-text">YouTube</span></a></li>
              <li><a class="social-icons__link" href="<?php echo $facebook['vimeo']?>" target="_blank"
                  title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span
                    class="icon__fallback-text">Vimeo</span></a></li>
            </ul> -->
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
    <script src="assets/js/vendor/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-merc.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      $(function () {
        $('#map').vectorMap({
          map: 'world_merc',
          scaleColors: ['#C8EEFF', '#0071A4'],
          normalizeFunction: 'polynomial',
          hoverOpacity: 0.7,
          hoverColor: false,
          markerStyle: {
            initial: {
              fill: '#F8E23B',
              stroke: '#383f47'
            }
          },
          backgroundColor: '#383f47',
          markers: [

            {
              latLng: [20.59, 78.96],
              name: 'India'
            },
            {
              latLng: [37.09, -95.71],
              name: 'USA'
            },
            {
              latLng: [56.13, -106.34],
              name: 'Canada'
            },
            {
              latLng: [-25.27, 133.77],
              name: 'Australia'
            },
            {
              latLng: [54.52, 15.25],
              name: 'Europe'
            },

          ]



        });
      });
    </script>


  </div>
</body>

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->

</html>