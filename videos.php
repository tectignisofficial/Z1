<?php
session_start();
include('include/config.php');
$sql=mysqli_query($conn,"select video from products");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/about-us.html   11 Nov 2019 12:44:33 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Videos &ndash; Z1KneeBrace</title>
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
        		<div class="wrapper"><h1 class="page-width">Videos</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        
            <div class="row">
                <?php
                while($arr=mysqli_fetch_array($sql)){
                ?>
            	<div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4"><iframe width="360" height="240" src="https://www.youtube.com/embed/<?php echo $arr['video']; ?>" title="K2 & K6 Knee Brace" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
               <?php } ?>
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

<!-- belle/about-us.html   11 Nov 2019 12:44:39 GMT -->
</html>