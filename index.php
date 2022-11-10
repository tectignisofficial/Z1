<?php
session_start();
include('include/config.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Belle Multipurpose Bootstrap 4 Html Template</title>
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
    <link rel="stylesheet" type="text/css" href="css/z1style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <style>
        @media screen and (max-width:990px) {
            .img1 {
                display: none;
            }

            .img2 {
                display: none;
            }


        }
    </style>
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">




        <?php include("include/header.php");?>





        <!--Body Content-->
        <div id="page-content">

            <div class="slideshow slideshow-wrapper pb-section sliderFull">
                <section class="home hero">
                    <div class="home-img">
                        <img src="img/product1.png" class="one" />
                    </div>

                    <div class="home-text">
                        <h1 style="color:white; font-weight: bold;">
                            Don't Suffer, get a best friend! <br />
                        </h1>
                        <h5 style="color:white">The A-Z Comfort with Z1 Braces</h5>
                        <!-- <h3 style="color:white">$199.00</h3> -->
                        <a href="shop.php" class="shop">Shop Now</a>
                    </div>
                </section>

                <div class="main">
                    <div class="masterRow">
                        <li>
                            <img src="img/main1.png" onclick="slider('img/product1.png')" />
                        </li>
                    </div>

                    <div class="masterRow row2">
                        <li>
                            <img src="img/main2.png" onclick="slider('img/product2.png')" />
                        </li>
                    </div>

                    <div class="masterRow row3">
                        <li>
                            <img src="img/main3.png" onclick="slider('img/product3.png')" />
                        </li>
                    </div>
                </div>
            </div>
            <!--End Home slider-->




            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2"><b style="font-size:35px">Our Products</b></h2>
                                <p>The Treatment your Knee needs!</p>
                            </div>
                            <div class="tabs-listing">

                                <div class="tab_container">
                                    <div id="tab1" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <?php
                                            $sql=mysqli_query($conn,"select * from products group by name");
                                            while($arr=mysqli_fetch_array($sql)){
                                            ?>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="productdetail.php?name=<?php echo $arr['name']; ?>">
                                                        <!-- image -->
                                                        <?php
                                                // $image = $arr['image'];
                                                // $image = explode(',',$image);
                                                // foreach($image AS $imagess){
                                                // }

                                                ?>
                                                        <img class="primary blur-up lazyload"
                                                            data-src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>"
                                                            src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>"
                                                            alt="image" title="product"  width="300" height="300">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hoverfile'];?>"
                                                            src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hoverfile'];?>"
                                                            alt="image" title="product"  width="300" height="300">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <?php $label=$arr['label'];
                                            if($label!=''){ ?>
                                            <div class="product-labels rectangular"><span class="lbl pr-label2"><?php echo $arr['label'];?></span></div>
                                            <?php } ?>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add"  method="post">
                                                        <a href="productdetail.php?name=<?php echo $arr['name']; ?>" class="btn btn-addto-cart" type="button"
                                                            tabindex="0">Add To Cart</a>
                                                    </form>

                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="productdetail.php?name=<?php echo $arr['name']; ?>"><?php echo $arr['name'];?></a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">
                                                            <?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.$arr['price'] * $_SESSION['USD'].'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo $arr['price'];?>
                                                            <?php } ?></span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                    <!-- Variant -->

                                                    <!-- End Variant -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>



                                        </div>
                                    </div>
                                    <div id="tab2" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="short-description.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload"
                                                            data-src="assets/images/product-images/product-image3.jpg"
                                                            src="assets/images/product-images/product-image3.jpg"
                                                            alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="assets/images/product-images/product-image3-1.jpg"
                                                            src="assets/images/product-images/product-image3-1.jpg"
                                                            alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span
                                                                class="lbl pr-label2">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#"
                                                        onclick="window.location.href='cart.html'" method="post">
                                                        <button class="btn btn-addto-cart" type="button"
                                                            tabindex="0">Add To Cart</button>
                                                    </form>

                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="short-description.html">K4 Comfortline Knee
                                                            Orthosis</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$550.00</span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                    <!-- Variant -->

                                                    <!-- End Variant -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="short-description.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload"
                                                            data-src="assets/images/product-images/product-image4.jpg"
                                                            src="assets/images/product-images/product-image4.jpg"
                                                            alt="image" title="product" />
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="assets/images/product-images/product-image4-1.jpg"
                                                            src="assets/images/product-images/product-image4-1.jpg"
                                                            alt="image" title="product" />
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels"><span
                                                                class="lbl on-sale">Sale</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#"
                                                        onclick="window.location.href='cart.html'" method="post">
                                                        <button class="btn btn-addto-cart" type="button"
                                                            tabindex="0">Add To Cart</button>
                                                    </form>

                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="short-description.html">K2 Comfortline Knee
                                                            Orthosis</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="old-price">$900.00</span>
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                    <!-- Variant -->

                                                    <!-- End Variant -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Collection Tab slider-->

            <!--Collection Box slider-->
            <div class="collection-box section">
                <div class="container-fluid">
                    <div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/images/collection/fashion.jpg"
                                    src="assets/images/collection/fashion.jpg" alt="Fashion" class="blur-up lazyload" />

                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="assets/images/collection/cosmetic.jpg"
                                    src="assets/images/collection/cosmetic.jpg" alt="Cosmetic" />

                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/images/collection/bag.jpg" src="assets/images/collection/bag.jpg"
                                    alt="Bag" class="blur-up lazyload" />

                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/images/collection/accessories.jpg"
                                    src="assets/images/collection/accessories.jpg" alt="Accessories"
                                    class="blur-up lazyload" />

                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/images/collection/shoes.jpg"
                                    src="assets/images/collection/shoes.jpg" alt="Shoes" class="blur-up lazyload" />

                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/images/collection/jewellry.jpg"
                                    src="assets/images/collection/jewellry.jpg" alt="Jewellry"
                                    class="blur-up lazyload" />

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Collection Box slider-->

            <!--Logo Slider-->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="prFeatures">
                                <h1 class="mb-5" style="text-align:center">Benefits of Custom Knee Braces</h1>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 feature">
                                        <img src="assets/images/z1 knee.png" alt="Safe Payment" title="Safe Payment">
                                        <div class="details">
                                            <h3>Structural support to the knee.</h3>They provide stability, additional
                                            support and a protection card for the knee in case of any injuries
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 feature">
                                        <img src="assets/images/shield.png" alt="Confidence" title="Confidence">
                                        <div class="details">
                                            <h3>Pain reliever in most of the OA cases.</h3>These restrict the movement
                                            of knee joints in all directions
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 feature">
                                        <img src="assets/images/z1 knee.png" alt="Worldwide Delivery"
                                            title="Worldwide Delivery">
                                        <div class="details">
                                            <h3>Easy recovery from injury.</h3>These braces are used for preventing any
                                            injury in case of contact to ligament during sports.
                                        </div>
                                    </div>


                                </div>
                                <h3 class="h3">In the case of structural support for the knee, there are several kinds
                                    of knee braces available which include:</h3><br>
                                <div class="rte-setting featured-row__subtext" style="font-size:15px">
                                    <li><b>Functional Braces:</b>
                                        They provide stability, additional support and a protection card for the knee in
                                        case of any injuries.<br><br></li>
                                    <li><b>Rehabilitative Braces:</b>
                                        These restrict the movement of knee joints in all directions, making them heal
                                        quickly in case of any injuries.<br><br></li>
                                    <li> <b>Prophylactic Braces:</b>
                                        These braces are used for preventing any injury in case of contact to ligament
                                        during sports.<br><br></li>
                                    <p>Braces using for pain relief, during osteoarthritis (cartilage in the body starts
                                        to deteriorate causing severe joint pain), or chronic pain due to swelling at
                                        joints, people find it using for comfort and immense pleasure.</p>
                                    <p>At ZOPL (Zodiacal Overseas Pvt. Ltd.,) one can find a variety of custom knee
                                        braces to buy online according to the need and size of the knee for having a
                                        suitable fitting. As everyone is not having a knee of identical size, Z1
                                        provides customized knee braces at affordable prices.</p>
                                    <p>It has the best online delivery options to many countries, including the USA,
                                        Canada, Europe and India.</p>
                                    <p>Z1 provides customized knee braces having lightweight, providing comfort and
                                        relieves pain at low prices.</p>
                                    <p>At Z1, you can find braces with more durable designs with quality protection
                                        layers supporting the knee from injury accompanying speed recovery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Logo Slider-->


                <!--Parallax Section-->
                <div class="section" style="padding-bottom: 0px;">
                    <div class="hero hero--large hero__overlay bg-size">
                        <img class="bg-img" src="assets/images/parallax-banners/parallax-banner.jpg"
                            alt="K2 Comfortline Knee Orthosis" />
                        <div class="hero__inner">
                            <div class="container" style="display: flex;">
                                <div class="wrap-text left text-small font-bold">
                                    <h2 class="h2 mega-title" style="color:#ffffff">CUSTOMIZED KNEE BRACES</h2>
                                    <div class="rte-setting mega-subtitle" style="color:#ffffff">Customization is the
                                        key. In order to meet
                                        customer needs and satisfaction, customizing our healthcare products is
                                        necessary.
                                        One Size doesn’t fit all. Neither you nor us. Each and every customised Knee
                                        Braces
                                        are designed in such a unique way to fit you perfectly. Our custom Knee Braces
                                        are
                                        built to keep up with every move you make. We custom make your braces with
                                        durable
                                        materials and quality craftsmanship with extra protection and that proper
                                        support
                                        and comfort to ensure a speedy recovery.
                                        Now, Rehab, Train or Play but with confidence.</div>
                                    <a href="shop.php" class="btn"
                                        style="background-color:#ffffff; color:#000000"><b>Shop Now</b></a>
                                </div>
                                <div class="wrap-text text-small font-bold img1" style="margin-left: 200px;">
                                    <img src="assets/images/product-images/K2 Comfortline Knee Orthosis.png"
                                        alt="K2 Comfortline Knee Orthosis" />


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Parallax Section-->

                <!--Featured Product-->

                <!--End Featured Product-->






                <!--Feature Content-->
                <div class="section feature-content">
                    <div class="container">
                        <div class="row">
                            <div class="feature-row">
                                <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                    <img src="assets/images/K2 Comfortline Knee Orthosis.jpg"
                                        alt="K2 Comfortline Knee Orthosis" title="K2 Comfortline Knee Orthosis" />
                                </div>
                                <div
                                    class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                                    <div class="row-text">
                                        <h2 class="h1"><b>K2 Comfortline Knee Orthosis</b></h2>
                                        <div class="rte-setting featured-row__subtext" style="font-size:15px">
                                            <b>The Effective Solution for the Sportsperson in you!</b>
                                            <p>The Z1 K2 Comfortline is an utterly comforting, light in weight and an
                                                easy to use knee brace. It renders rigid and durable support to your
                                                knee ensuring quick healing. The Z1 K2 Knee Orthosis fits ideally onto
                                                the leg and takes the shape of the leg instantly. It is an everyday wear
                                                knee orthosis that provides complete stability and support for efficient
                                                aid and relief from sports injuries, ligament injuries and mild
                                                osteoarthritis.
                                            </p>
                                        </div>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section feature-content">
                    <div class="container">
                        <div class="row">
                            <div class="feature-row">
                                <div
                                    class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--right text-left">
                                    <div class="row-text" style="margin-left:0px">
                                        <h2 class="h1"><b>K4 OsteoAlign Knee Orthosis</b></h2>
                                        <div class="rte-setting featured-row__subtext" style="font-size:15px">
                                            <b>The Treatment your Knee needs!</b>
                                            <p>The Z1 K4 OsteoAlign Knee Brace is a custom made OA Brace best suited for
                                                active patients as it offers a convenient and appropriate fit. It is an
                                                effective and non-invasive remedy for patients with mild to moderate
                                                osteoarthritis. What sets this offloading orthosis apart from others is
                                                that it effectively transfers body weight from thigh to calf without
                                                exerting much pressure on the knee joint and thus helps stabilize the
                                                knee and prevents further deterioration.
                                            </p>
                                        </div>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                    <img src="assets/images/K4 OsteoAlign Knee Orthosis.jpg"
                                        alt="K4 OsteoAlign Knee Orthosis" title="K4 OsteoAlign Knee Orthosis" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section feature-content">
                    <div class="container">
                        <div class="row">
                            <div class="feature-row">
                                <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                    <img src="assets/images/K6 Dezire Knee Orthosis.jpg" alt="K6 Dezire Knee Orthosis"
                                        title="K6 Dezire Knee Orthosis" />
                                </div>
                                <div
                                    class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                                    <div class="row-text">
                                        <h2 class="h1"><b>K6 Dezire Knee Orthosis</b></h2>
                                        <div class="rte-setting featured-row__subtext" style="font-size:15px">
                                            <b>For that Never Give Up Attitude in you!</b>
                                            <p>The Z1 K6 Dezire Knee Orthosis is extremely handy in making you feel
                                                complacent because of it’s lightweight and highly durable aluminum
                                                frame. It is very likely a wonderful product for all those who have pain
                                                in the knee as it is phenomenal in providing the coveted support and
                                                aid.
                                            </p>
                                        </div>
                                        <a href="shop.php" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Feature Content-->



                <!--Testimonial Slider-->
                <div class="section testimonial-slider">
                    <div class="container-fluid">
                        <div class="quote-wraper">
                            <!--Testimonial Slider Title-->
                            <div class="section-header text-center">
                                <h2 class="h2"><b style="font-size:35px">Testimonials</b></h2>
                            </div>
                            <!--End Testimonial Slider Title-->
                            <!--Testimonial Slider Items-->
                           
                            <div class="quotes-slider">
                           
                                <?php
                         $sql=mysqli_query($conn,"SELECT * FROM testimonial");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                <div class="quotes-slide">
                                    <blockquote class="quotes-slider__text text-center">
                                    <p class="authour"><?php echo $row['name'];?></span></p>

                                    <p><?php echo $row['company_name'];?></p>

                                        <div class="rte-setting">
                                            <p><?php echo $row['message'];?></p>
                                        </div>
                                      
                                    
                                    </blockquote>
                                </div>
                                <?php $count++;  } ?>
                            </div>
                           
                            <!--Testimonial Slider Items-->
                        </div>
                    </div>
                </div>
                <!--End Testimonial Slider-->

             
            </div>
            <!--End Body Content-->
            <?php include("include/footer.php");?>
            <!--Quick View popup-->
            <div class="modal fade quick-view-popup" id="content_quickview">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="ProductSection-product-template" class="product-template__container prstyle1">
                                <div class="product-single">
                                    <!-- Start model close -->
                                    <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                                        title="close"><span class="icon icon anm anm-times-l"></span></a>
                                    <!-- End model close -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-details-img">
                                                <div class="pl-20">
                                                    <img src="assets/images/product-images/product-image1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-single__meta">
                                                <h2 class="product-single__title">Product Quick View Popup</h2>
                                                <div class="prInfoRow">
                                                    <div class="product-stock"> <span class="instock ">In Stock</span>
                                                        <span class="outstock hide">Unavailable</span> </div>
                                                    <div class="product-sku">SKU: <span
                                                            class="variant-sku">19115-rdxs</span></div>
                                                </div>
                                                <p class="product-single__price product-single__price-product-template">
                                                    <span class="visually-hidden">Regular price</span>
                                                    <s id="ComparePrice-product-template"><span
                                                            class="money">$600.00</span></s>
                                                    <span
                                                        class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                        <span id="ProductPrice-product-template"><span
                                                                class="money">$500.00</span></span>
                                                    </span>
                                                </p>
                                                <div class="product-single__description rte">
                                                    Belle Multipurpose Bootstrap 4 Html Template that will give you and
                                                    your
                                                    customers a smooth shopping experience which can be used for various
                                                    kinds of stores such as fashion,...
                                                </div>

                                                <form method="post" action="http://annimexweb.com/cart/add"
                                                    id="product_form_10508262282" accept-charset="UTF-8"
                                                    class="product-form product-form-product-template hidedropdown"
                                                    enctype="multipart/form-data">

                                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                        <div class="product-form__item">
                                                            <label class="header">Size: <span
                                                                    class="slVariant">XS</span></label>
                                                            <div data-value="XS" class="swatch-element xs available">
                                                                <input class="swatchInput" id="swatch-1-xs" type="radio"
                                                                    name="option-1" value="XS">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-xs" title="XS">XS</label>
                                                            </div>
                                                            <div data-value="S" class="swatch-element s available">
                                                                <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                    name="option-1" value="S">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-s" title="S">S</label>
                                                            </div>
                                                            <div data-value="M" class="swatch-element m available">
                                                                <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                    name="option-1" value="M">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-m" title="M">M</label>
                                                            </div>
                                                            <div data-value="L" class="swatch-element l available">
                                                                <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                    name="option-1" value="L">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-l" title="L">L</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action -->
                                                    <div class="product-action clearfix">
                                                        <div class="product-form__item--quantity">
                                                            <div class="wrapQtyBtn">
                                                                <div class="qtyField">
                                                                    <a class="qtyBtn minus"
                                                                        href="javascript:void(0);"><i
                                                                            class="fa anm anm-minus-r"
                                                                            aria-hidden="true"></i></a>
                                                                    <input type="text" id="Quantity" name="quantity"
                                                                        value="1" class="product-form__input qty">
                                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                            class="fa anm anm-plus-r"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-form__item--submit">
                                                            <button type="button" name="add"
                                                                class="btn product-form__cart-submit">
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Action -->
                                                </form>
                                                <div class="display-table shareRow">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-product-single-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Quick View popup-->

            <!-- Newsletter Popup -->
            <div class="newsletter-wrap" id="popup-container">
                <div id="popup-window">
                    <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                    <!-- Modal content-->
                    <div class="display-table splash-bg">
                        <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg"
                                alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                        <div class="display-table-cell width60 text-center">
                            <div class="newsletter-left">
                                <h2>Join Our Mailing List</h2>
                                <p>Sign Up for our exclusive email list and be the first to know about new products and
                                    special offers</p>
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input" name="EMAIL"
                                            value="" placeholder="Email address" required="">
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit"
                                                id="subscribeBtn"> <span
                                                    class="newsletter__submit-text--large">Subscribe</span> </button>
                                        </span>
                                    </div>
                                </form>
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" title="Facebook"><i
                                                class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Pinterest"><i
                                                class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Instagram"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube"
                                                aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Newsletter Popup -->

            <!-- Including Jquery -->
            <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
            <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
            <script src="assets/js/vendor/jquery.cookie.js"></script>
            <script src="assets/js/vendor/wow.min.js"></script>
            <!-- Including Javascript -->
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/lazysizes.js"></script>
            <script src="assets/js/main.js"></script>
            <!--For Newsletter Popup-->
            <script>
                jQuery(document).ready(function () {
                    jQuery('.closepopup').on('click', function () {
                        jQuery('#popup-container').fadeOut();
                        jQuery('#modalOverly').fadeOut();
                    });

                    var visits = jQuery.cookie('visits') || 0;
                    visits++;
                    jQuery.cookie('visits', visits, {
                        expires: 1,
                        path: '/'
                    });
                    console.debug(jQuery.cookie('visits'));
                    if (jQuery.cookie('visits') > 1) {
                        jQuery('#modalOverly').hide();
                        jQuery('#popup-container').hide();
                    } else {
                        var pageHeight = jQuery(document).height();
                        jQuery('<div id="modalOverly"></div>').insertBefore('body');
                        jQuery('#modalOverly').css("height", pageHeight);
                        jQuery('#popup-container').show();
                    }
                    if (jQuery.cookie('noShowWelcome')) {
                        jQuery('#popup-container').hide();
                        jQuery('#active-popup').hide();
                    }
                });

                jQuery(document).mouseup(function (e) {
                    var container = jQuery('#popup-container');
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.fadeOut();
                        jQuery('#modalOverly').fadeIn(200);
                        jQuery('#modalOverly').hide();
                    }
                });
            </script>
            <script type="text/javascript">
                function slider(anything) {
                    document.querySelector(".one").src = anything;
                }

                let menu = document.querySelector("#menu-icon");
                let navbar = document.querySelector(".navbar");

                menu.onclick = () => {
                    menu.classList.toggle("bx-x");
                    navbar.classList.toggle("open");
                };
            </script>
            <script type="text/javascript">
                function slider(anything) {
                    document.querySelector(".one").src = anything;
                }

                let menu = document.querySelector("#menu-icon");
                let navbar = document.querySelector(".navbar");

                menu.onclick = () => {
                    menu.classList.toggle("bx-x");
                    navbar.classList.toggle("open");
                };
            </script>
            <!--End For Newsletter Popup-->
        </div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>