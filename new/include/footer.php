 <?php
include('include/config.php');

if(isset($_POST['submit'])){

  $email_id=$_POST['email_id'];
 
  $sql=mysqli_query($conn,"INSERT INTO `new_products_info`(`email_id`) VALUES ('$email_id')");
  if($sql==1){
    echo '<script>alert("Thank You...!");</script>';
    // header("location:index.php");
    }
}
?>


 <!--Footer-->
 <footer id="footer">
    
     <div class="site-footer">
         <div class="container">
             <!--Footer Links-->
             <div class="footer-top">
                 <div class="row">
                     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                         <div class="logo" style="padding-top: 0;">
                             <a href="index.html">
                                 <img src="assets/images/logo.png" alt="Z1" title="Z1" />
                             </a>
                         </div>
                         <h4 class="h4">About us</h4>
                         <p>Zodiacal Overseas Pvt. Ltd. is an India based professional manufacturing and marketing
                             company dealing in health products. Established in 2012, ZOPL has already created a strong
                             presence in the global online sales market as well the domestic Indian market.</p>
                             <div class="footer-social">
                         <ul class="list--inline site-footer__social-icons social-icons">
                         <?php                         
$sql=mysqli_query($conn,"select * from social_media");
$facebook=mysqli_fetch_array($sql);

?>
                             <li><a class="social-icons__link" href="<?php echo $facebook['facebook']?>" target="_blank"
                                     title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i
                                         class="icon icon-facebook"></i></a></li>
                             <li><a class="social-icons__link" href="<?php echo $facebook['twitter']?>" target="_blank"
                                     title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i
                                         class="icon icon-twitter"></i> <span
                                         class="icon__fallback-text">Twitter</span></a></li>
                             <li><a class="social-icons__link" href="<?php echo $facebook['instagram']?>" target="_blank"
                                     title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i
                                         class="icon icon-instagram"></i> <span
                                         class="icon__fallback-text">Instagram</span></a></li>
                             <li><a class="social-icons__link" href="<?php echo $facebook['youtube']?>" target="_blank"
                                     title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i
                                         class="icon icon-youtube"></i> <span
                                         class="icon__fallback-text">YouTube</span></a></li>
                         </ul>
                     </div>
                     </div>
                     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                         <h4 class="h4">Quick Links</h4>
                         <ul>
                             <li><a href="index">Home</a></li>
                             <li><a href="about-us">About Us</a></li>
                             <li><a href="contact-us">Contact Us</a></li>
                             <li><a href="blog">Blogs</a></li>
                             <li><a href="videos">Video</a></li>
                             <li><a href="bulkorder">Bulk Orders</a></li>
                         </ul>
                     </div>
                     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                         <h4 class="h4">Disclaimer</h4>
                         <ul>
                             <li><a href="privacy-policy" target="-blank">Privacy Policy</a></li>
                             <li><a href="term-conditions" target="-blank">Terms & Conditions</a></li>
                             <li><a href="returns-refund" target="-blank">Returns & Refunds</a></li>
                             <li><a href="shipping-delivery" target="-blank">Shipping & Delivery</a></li>
                             <li><a href="myaccount">My Account</a></li>
                         </ul>
                     </div>
                     <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                    
                         <ul class="addressFooter">
                            <h4 class="h4">Corporate Office Address</h4>
                             <li><i class="icon anm anm-map-marker-al"></i>
                                 <p>D-114, 5th road Shakti Nagar,<br> Paota c road Jodhpur, Rajasthan, India - 342010</p>
                             </li>
                             <h4 class="h4">Branch Office Address</h4>
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
                     </div>
                 </div>
             </div>
             <!--End Footer Links-->
             <hr>
             <div class="footer-bottom">
             <p style="color: white;">Neither Z1 nor any of its subsidiaries dispense medical advice. Information related to various health, medical, and fitness conditions and their treatment is not meant to be a substitute for the advice provided by a physician or other medical professional. The contents of this website do not constitute medical, legal, or any other type of professional advice. You should not use the information contained herein for diagnosing a health or fitness problem or disease. Rather, please consult your healthcare professional for information on the courses of treatment, if any, which may be appropriate for you.</p>
                 <div class="row">
                    
                     <!--Footer Copyright-->
                     <div
                         class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                         <span></span> <a href="templateshub.net">Copyright © 2022 Z1 Kneebrace</a></div>
                     <!--End Footer Copyright-->
                     <!--Footer Payment Icon-->
                     <div
                         class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                         <ul class="payment-icons list--inline">
                             <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                             <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                             <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                             <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                             <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                             <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                         </ul>
                         <p>Developed By: <a href="tectignis.in" target="_blank">Tectignis IT Solutions</a></p>
                     </div>
                     <!--End Footer Payment Icon-->
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--End Footer-->
 <!--Scoll Top-->
 <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
 <!--End Scoll Top-->