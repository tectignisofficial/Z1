<?php
session_start();
include('include/config.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/about-us.html   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Customer Feedbacks &ndash; Z1 Knee Braces</title>
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
        .ratingCheck {
            display: flex;
            transform: rotateY(180deg);
            justify-content: center;
        }

        .ratingCheck label {
            display: block;
            cursor: pointer;
            width: 20px;
            background: #f8f9fa;
        }

        .ratingCheck label:before {
            content: '\f005';
            font-family: FontAwesome;
            position: relative;
            display: block;
            font-size: 15px;
        }

        .ratingCheck label:after {
            content: '\f005';
            font-family: FontAwesome;
            position: absolute;
            display: block;
            font-size: 15px;
            color: #ff344f;
            top: 0;
            opacity: 0;
            transition: .5s;
            text-shadow: 0 2px 5px rgba(0, 0, 0, .5);
        }

        .ratingCheck input {
            display: none;
        }

        .ratingCheck>.fff {
            color: #f7ab38f2;
        }

        .pagination .active .fa-circle {
            color: #ff344f !important;
        }

        /* show star */
        :root {
            --star-size: 60px;
            --star-color: #fff;
            --star-colors: #676767;
            --star-background: #ff344f;
        }

        .Stars1 {
            --percent: calc(var(--rating) / 5 * 100%);

            display: inline-block;
            font-size: 22px;
            font-family: Times; // make sure ★ appears correctly
            line-height: 1;
        }

        .Stars1:before {
            content: '★★★★★';
            letter-spacing: 1px;
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-colors) var(--percent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Customer Feedbacks</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <!--Client Review-->
            <div class="section" style="padding-top: -0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="prFeatures">
                                <h1 class="mb-5" style="text-align:center">K2 Comfortline Knee Orthosis</h1>
                                <div class="quote-wraper">
                              <!--Testimonial Slider Title-->
                              <div class="section-header text-center">
                                 
                                    </div>
                                    <!--End Testimonial Slider Title-->
                                    <!--Testimonial Slider Items-->
                                    <div class="quotes-slider">
                                        <?php
                         $sql=mysqli_query($conn,"SELECT * FROM reviews where product_name='K2'");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                        <div class="quotes-slide">
                                            <blockquote class="quotes-slider__text text-center">
                                                <div class="rte-setting">
                                                    <p class="authour"><?php echo $row['name'];?></p>
                                                    <p><?php echo $row['location'];?></p>
                                                    <ul class="ratings ratings-three">
                                                        <li class="ratingCheck">
                                                            <input type="radio" id="stars5" name="rate" value="5">
                                                            <label for="stars5"
                                                                <?php if( ($row['stars'] >=5)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars4" name="rate" value="4">
                                                            <label for="stars4"
                                                                <?php if( ($row['stars'] >= 4)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars3" name="rate" value="3">
                                                            <label for="stars3"
                                                                <?php if( ($row['stars'] >= 3)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars2" name="rate" value="2">
                                                            <label for="stars2"
                                                                <?php if( ($row['stars'] >= 2)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars1" name="rate" value="1">
                                                            <label for="stars1"
                                                                <?php if( ($row['stars'] >= 1)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                        </li>
                                                    </ul>
                                                    <p><?php echo $row['description'];?></p>
                                                </div>
                                                <p><?php echo $row['link'];?></span></p>
                                       
                                            </blockquote>
                                          
                                </div>
                                <?php $count++;  } ?>
                            </div>
                            <!--Testimonial Slider Items-->
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Logo Slider-->

            <div class="section" style="padding-top: -0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="prFeatures">
                                <h1 class="mb-5" style="text-align:center">K4 Osteo Align Knee Orthosis</h1>
                                <div class="quote-wraper">
                                                  <!--Testimonial Slider Title-->
                                                  <div class="section-header text-center">
                                      
                                    </div>
                                    <!--End Testimonial Slider Title-->
                                    <!--Testimonial Slider Items-->
                                    <div class="quotes-slider">
                                        <?php
                         $sql=mysqli_query($conn,"SELECT * FROM reviews where product_name='K4'");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                        <div class="quotes-slide">
                                            <blockquote class="quotes-slider__text text-center">
                                                <div class="rte-setting">
                                                    <p class="authour"><?php echo $row['name'];?></p>
                                                    <p><?php echo $row['location'];?></p>
                                                    <ul class="ratings ratings-three">
                                                        <li class="ratingCheck">
                                                            <input type="radio" id="stars5" name="rate" value="5">
                                                            <label for="stars5"
                                                                <?php if( ($row['stars'] >=5)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars4" name="rate" value="4">
                                                            <label for="stars4"
                                                                <?php if( ($row['stars'] >= 4)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars3" name="rate" value="3">
                                                            <label for="stars3"
                                                                <?php if( ($row['stars'] >= 3)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars2" name="rate" value="2">
                                                            <label for="stars2"
                                                                <?php if( ($row['stars'] >= 2)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars1" name="rate" value="1">
                                                            <label for="stars1"
                                                                <?php if( ($row['stars'] >= 1)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                        </li>
                                                    </ul>
                                                    <p><?php echo $row['description'];?></p>
                                                </div>
                                                <p><?php echo $row['link'];?></span></p>
                                          
                                            </blockquote>
                                </div>
                                <?php $count++;  } ?>
                            </div>
                            <!--Testimonial Slider Items-->
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section" style="padding-top: -0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="prFeatures">
                                <h1 class="mb-5" style="text-align:center">K6 Dezire Knee Orthosis</h1>
                                <div class="quote-wraper">
                              <!--Testimonial Slider Title-->
                              <div class="section-header text-center">
                                      
                                    </div>
                                    <!--End Testimonial Slider Title-->
                                    <!--Testimonial Slider Items-->
                                    <div class="quotes-slider">
                                        <?php
                         $sql=mysqli_query($conn,"SELECT * FROM reviews where product_name='K6'");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                        <div class="quotes-slide">
                                            <blockquote class="quotes-slider__text text-center">
                                                <div class="rte-setting">
                                                    <p class="authour"><?php echo $row['name'];?></p>
                                                    <p><?php echo $row['location'];?></p>
                                                    <ul class="ratings ratings-three">
                                                        <li class="ratingCheck">
                                                            <input type="radio" id="stars5" name="rate" value="5">
                                                            <label for="stars5"
                                                                <?php if( ($row['stars'] >=5)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars4" name="rate" value="4">
                                                            <label for="stars4"
                                                                <?php if( ($row['stars'] >= 4)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars3" name="rate" value="3">
                                                            <label for="stars3"
                                                                <?php if( ($row['stars'] >= 3)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars2" name="rate" value="2">
                                                            <label for="stars2"
                                                                <?php if( ($row['stars'] >= 2)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars1" name="rate" value="1">
                                                            <label for="stars1"
                                                                <?php if( ($row['stars'] >= 1)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                        </li>
                                                    </ul>
                                                    <p><?php echo $row['description'];?></p>
                                                </div>
                                                <p><?php echo $row['link'];?></span></p>
                                         
                                            </blockquote>
                                </div>
                                <?php $count++;  } ?>
                            </div>
                            <!--Testimonial Slider Items-->
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!--End Body Content-->
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