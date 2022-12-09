<?php $baseurl= "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<?php
session_start();
include('include/config.php');
$productName=$_GET['name'];
$sql=mysqli_query($conn,"select *,products.name from products inner join stock on products.name=stock.product_name where products.name='$productName'");
$arr=mysqli_fetch_array($sql);
$id=$arr['id'];

if(isset($_POST['addtocart'])){
$quantity=$_POST['quantity'];
$productname=$_POST['productname'];
$price=$_POST['price'];
if(!isset($_POST['option1'])){
    echo "<script>alert('please select size');</script>";
}
else{
    $size=$_POST['option1'];
    $qua=$_POST['quantity'];
    $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
    $arr=mysqli_fetch_array($sql);
    $stock=$arr['stock'] ?? NULL;

    if($qua > $stock){
        echo "<script>alert('Only ".$stock." or less quantities allowed');</script>";
    }else{
if(isset($_SESSION['shopping_cart'])){
   
$item_array_id=array_column($_SESSION['shopping_cart'], "name");
if(!in_array($_POST['option1'],$item_array_id)){
    $count=count($_SESSION['shopping_cart']);
    $item_arr=array(
        'itemid'   => $_POST['productid'],
        'name'     => $_GET['name'],
        'quantity' => $_POST['quantity'],
        'price'    => $_POST['price'],
        'option1'  => $_POST['option1'],
        'image'    => $_POST['image']
    );
    $_SESSION['shopping_cart'][$count] = $item_arr;
    header('location:productdetail.php?name='.$productName);
}
else{
    echo "<script>alert('already Added');</script>";
    header('location:productdetail.php?name='.$productName);
}
}else{
    $item_arr=array(
        'itemid'   => $_POST['productid'],
        'name'     => $_GET['name'],
        'quantity' => $_POST['quantity'],
        'price'    => $_POST['price'],
        'option1'  => $_POST['option1'],
        'image'    => $_POST['image']
    );
    $_SESSION['shopping_cart'][0] = $item_arr;
}
    }
}
}

if(isset($_POST['checkout'])){
    if(!isset($_SESSION['customerid'])){
        header('location:login.php');
    }
    else{
        if(!isset($_POST['option1'])){
            echo "<script>alert('please select size');</script>";
        }
        else{
            
            $size=$_POST['option1'];
            $qua=$_POST['quantity'];
            $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
            $arr=mysqli_fetch_array($sql);
            $stock=$arr['stock'] ?? NULL;
            if($qua > $stock){
                echo "<script>alert('Only ".$stock." or less quantities allowed');</script>";
            }else{
        
        $id=$_SESSION['customerid'];
        $sql=mysqli_query($conn,"select * from customers where id='$id'");
        $fetchsql=mysqli_fetch_array($sql);
        $_SESSION['name']=$fetchsql['name'];
        $_SESSION['email']=$fetchsql['email'];
        $_SESSION['phone']=$fetchsql['phone'];
        $_SESSION['total']=$_POST['price1'];
        $_SESSION['quantity']=$_POST['quantity'];
        $_SESSION['option1']=$_POST['option1'];
        $_SESSION['productname']=$_POST['productname'];
        $_SESSION['image']=$_POST['image'];
        header('location:checkout.php');
        // header('location:razor/pay.php');
            }
}
    }
}

if(isset($_POST['review'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $rating=$_POST['rating'];
    $title=$_POST['title'];
    $review=$_POST['review'];
    $body=$_POST['body'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d-m-y h:i:s');

    $sql=mysqli_query($conn,"INSERT INTO `product_reviews`(`name`, `email`, `rating`, `review_title`, `body_review`, `status`, `cur_date`) VALUES ('$name','$email','$rating','$title','$body','1','$date')");
}

$sql=mysqli_query($conn,"select * from products where name='$productName'");
$arr=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/product-layout-1.html   11 Nov 2019 12:41:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $arr['name'] ?></title>
    <meta name="<?php echo $arr['seo_title'] ?>" content="title">
    <meta name="<?php echo $arr['seo_description'] ?> " content="description">
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <style>

    @media (max-width: 600px){
	.img_logo{
		width: 50% !important;
	}
}
        .slick-list {
            height: 489.141px !important;
        }

        .slick-track {
            height: 2642px !important;
        }

        .rate {
            display: flex;
            transform: rotateY(180deg);
        }

        .rate label {
            display: block;
            cursor: pointer;
            width: 20px;
            background: #fff;
        }

        .rate label:before {
            content: '\f005';
            font-family: FontAwesome;
            position: relative;
            display: block;
            font-size: 15px;
        }

        .rate label:after {
            content: '\f005';
            font-family: FontAwesome;
            position: absolute;
            display: block;
            font-size: 15px;
            color: #f4760d;
            top: 0;
            opacity: 0;
            transition: .5s;
            text-shadow: 0 2px 5px rgba(0, 0, 0, .5);
        }

        .rate label:hover:after,
        .rate label:hover~label:after,
        .rate input:checked~label:after {
            opacity: 1;
        }

        .rate input {
            display: none;
        }

        .ratingCheck {
            display: flex;
            transform: rotateY(180deg);
            justify-content: center;
        }

        .ratingCheck label {
            display: block;
            cursor: pointer;
            width: 20px;
            background: #fff;
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
            font-family: Times;
            line-height: 1;
        }

        .Stars1:before {
            content: '★★★★★';
            letter-spacing: 1px;
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-colors) var(--percent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    /* .imagelight1{
            display:none !important;
        } */

        .pswp__item>.pswp__zoom-wrap>.pswp__error-msg{
            display:none !important;
        }
        
    </style>
</head>

<body class="template-product belle">
    <div class="pageWrapper">

        <?php include("include/header.php");?>


        <div id="page-content" style="margin-top: 64px;">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="index.php" title="Back to the home page">Home</a><span
                            aria-hidden="true">›</span><span><?php echo $arr['name']; ?></span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                <?php

?>
                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                            <?php
                                            $count=-10;
                                            $countno=1;
                                            echo '<a data-image="auth/code/sadmin/image/product_image_check/'.$arr['hightlightfile'].'"
                                            data-zoom-image="auth/code/sadmin/image/product_image_check/'.$arr['hightlightfile'].'"
                                            class="slick-slide slick-cloned " data-slick-index="'.$count.'"
                                            aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload"
                                                data-src="auth/code/sadmin/image/product_image_check/'.$arr['hightlightfile'].'"
                                                src="auth/code/sadmin/image/product_image_check/'.$arr['hightlightfile'].'"
                                                alt="" />
                                            </a>';
                                            $imagequery=mysqli_query($conn,"select * from product_image where name='$productName'");
                                            while($image=mysqli_fetch_array($imagequery)){
                                                echo '<a data-image="auth/code/sadmin/image/product_image_check/'.$image['image'].'"
                                                data-zoom-image="auth/code/sadmin/image/product_image_check/'.$image['image'].'"
                                                class="slick-slide slick-cloned imagelight'.$countno.'" data-slick-index="'.$count.' "
                                                aria-hidden="true" tabindex="-1" id="">
                                                <img class="blur-up lazyload"
                                                    data-src="auth/code/sadmin/image/product_image_check/'.$image['image'].'"
                                                    src="auth/code/sadmin/image/product_image_check/'.$image['image'].'"
                                                    alt="" />
                                            </a>';
                                            $count++;
                                            $countno++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro"
                                                data-zoom-image="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>"
                                                alt=""
                                                src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>" />
                                        </div>
                                        <div class="product-labels"><span
                                                class="lbl on-sale"><?php echo $arr['label']; ?></span></div>
                                        <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=<?php echo $arr['video']; ?>"
                                                class="btn popup-video" title="View Video"><i
                                                    class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i
                                                    class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <?php
                                         $imagequery=mysqli_query($conn,"select * from product_image where name='$productName'");
                                        $countno1=1;
                                        echo ' <a href="auth/code/sadmin/image/product_image_check/'. $arr['hightlightfile'].'" class="imagelight'.$countno1.'"
                                        data-size="1462x2048" ></a>';
                                        while($image=mysqli_fetch_array($imagequery)){
                                            echo ' <a href="auth/code/sadmin/image/product_image_check/'. $image['image'].'" class="imagelight'.$countno1.'"
                                            data-size="1462x2048" ></a>';
                                            $countno1++;   }
                                           ?> 
                                       <?php  
                                        ?>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title"><?php echo $arr['name'] ?></h1>

                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span
                                                class="instock "><?php $status=$arr['stock_status'];if($status=='Out Of Stock'){ echo 'Out Of Stock'; }else{ echo 'In Stock'; } ?></span>
                                            <span class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">SKU: <span
                                                class="variant-sku"><?php echo $arr['sku'] ?></span></div>
                                        <div class="product-review">
                                            <!-- <a class="reviewLink" href="#tab2"><i
                                                    class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                                                    class="font-13 fa fa-star"></i><i
                                                    class="font-13 fa fa-star-o"></i><i
                                                    class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6
                                                    reviews</span></a> -->
                                                </div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">

                                        <span
                                            class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money"> <?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.number_format($arr['price'] * $_SESSION['USD'],2).'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($arr['price'],2);?>
                                                    <?php } ?></span>
                                            </span>

                                    </p>

                                </div>
                                <div class="product-single__description rte">
                                    <ul>
                                        <?php echo $arr['content'] ?>
                                    </ul>
                                </div>

                                <form method="post" action="" id="product_form_10508262282" accept-charset="UTF-8"
                                    class="product-form product-form-product-template hidedropdown"
                                    enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">

                                            <label class="header">Size: <span class="slVariant sizese">select</span></label>
                                            <?php
                                            $sizesql=mysqli_query($conn,"select * from stock where product_name='$productName' and stock > 0");
                                            while($sizearr=mysqli_fetch_array($sizesql)){
                                            ?>
                                            <div data-value="<?php echo $sizearr['value']; ?>"
                                                class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-<?php echo $sizearr['value']; ?>" type="radio"
                                                    name="option1" value="<?php echo $sizearr['value']; ?>"
                                                    <?php $status=$arr['stock_status'];if($status=='Out Of Stock'){ echo 'disabled'; } ?>>
                                                <label class="swatchLbl medium rectangle"
                                                    for="swatch-1-<?php echo $sizearr['value']; ?>"
                                                    title="<?php echo $sizearr['value']; ?>"><?php echo $sizearr['value']; ?></label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div id="sizequa"></div>
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">

                                        <input type="hidden" name="productid" value="<?php echo $arr['id'] ?>">
                                        <input type="hidden" name="productname" value="<?php echo $arr['name'] ?>">
                                        <input type="hidden" name="price" value="<?php echo $arr['price']; ?>">
                                        <input type="hidden" name="image" value="<?php echo $arr['hightlightfile']; ?>">

                                        <input type="hidden" name="price1" value="<?php  echo $arr['price'] ?> ">
                                       

                                        <input type="hidden" name="producticon" value="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>">

                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" max="3"
                                                        class="product-form__input qty" readonly>
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="product-form__item--submit col-6">
                                                <button type="submit" id="addtocart" name="addtocart"
                                                    class="shopify-payment-button__button shopify-payment-button__button--unbranded stockcheck"
                                                    <?php $status=$arr['stock_status'];if($status=='Out Of Stock'){ echo 'disabled'; } ?>>
                                                    <span>Add to cart</span>
                                                </button>

                                            </div>
                                            <div class="product-form__item--submit col-6" data-shopify="payment-button">
                                                <button type="submit" name="checkout"
                                                    class="shopify-payment-button__button shopify-payment-button__button--unbranded stockcheck"
                                                    <?php $status=$arr['stock_status'];if($status=='Out Of Stock'){ echo 'disabled'; }  ?> >Buy
                                                    it now</button>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                    <!-- <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank"
                                                href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $baseurl; ?>"
                                                class="btn btn--small btn--secondary btn--share share-facebook"
                                                title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Share</span>
                                            </a>

                                            <a target="_blank"
                                                href="https://twitter.com/share?url=<?php echo $baseurl; ?>"
                                                class="btn btn--small btn--secondary btn--share share-twitter"
                                                title="Tweet on Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Tweet</span>
                                            </a>
                                            <a href="https://plus.google.com/share?url=<?php echo $baseurl; ?>"
                                                title="Share on google+"
                                                class="btn btn--small btn--secondary btn--share">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Google+</span>
                                            </a>
                                            <a target="_blank"
                                                href="http://pinterest.com/pin/create/button/?url=<?php echo $baseurl; ?>"
                                                class="btn btn--small btn--secondary btn--share share-pinterest"
                                                title="Pin on Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Pin it</span>
                                            </a>
                                            <a href="mailto:?subject=<?php echo $baseurl; ?>"
                                                class="btn btn--small btn--secondary btn--share share-pinterest"
                                                title="Share by Email" target="_blank">
                                                <i class="fa fa-envelope" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Email</span>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="paymnet-img">
                                    <img src="assets/images/payment-img.jpg" alt="Payment"></div>

                            </div>
                        </div>
                        <!--End-product-single-->
                        <!--Product Fearure-->
                        <div class="prFeatures">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                    <div class="details">
                                        <h3>Safe Payment</h3>Pay with the world's most payment methods.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                                    <div class="details">
                                        <h3>Confidence</h3>Protection covers your purchase and personal data.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="assets/images/worldwide.png" alt="Worldwide Delivery"
                                        title="Worldwide Delivery" />
                                    <div class="details">
                                        <h3>Worldwide Delivery</h3>FREE &amp; Shipping in India, US, UK, Canada &amp;
                                        regions.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                    <div class="details">
                                        <h3>Support</h3>Talk to help line for your question on +91 7300044197
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Fearure-->
                        <!--Product Tabs-->
                        <div class="tabs-listing">
                            <ul class="product-tabs">
                                <li rel="tab1"><a class="tablink">Product Details</a></li>
                                <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                                <li rel="tab3"><a class="tablink">Size Chart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li rel="tab4"><a class="tablink">Returns &amp; Refund</a></li>
                            </ul>
                            <div class="tab-container">
                                <div id="tab1" class="tab-content">
                                    <div class="product-description rte">
                                        <?php echo $arr['description'];?>
                                        <!-- <p>
                                        The K2 Comfortline Knee Orthosis is profoundly near to custom fit knee orthosis in the market and suitable for ligament injuries (such as ACL Knee Brace, PCL Knee Brace, MCL Knee Brace), Sports Injuries, Mild Osteoarthritis (OA) as well as for prevention of the knee joint from degeneration and maximizes comfort & minimizes brace migration. The brace construction is Low profile & Lightweight, which makes it extremely easy to use with daily activities.</p>
                                    <ul>
                                        <li>A unique stainless steel reinforced plastic frame.</li>
                                        <li>Flexible in the perfect areas to implement a flawless fit on the leg</li>
                                        <li>Powerful and firm stainless steel equipped polycentric hinges present that offload bodyweight off the knee.</li>
                                        <li>Silicon coated neoprene frame liners and foam strap pads preventing orthosis from slipping down.</li>
                                    </ul>
                                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                    <p>You can change the position of any sections such as slider, banner, products,
                                        collection and so on by just dragging and dropping.&nbsp;</p>
                                    <h3>Lorem Ipsum is not simply random text.</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness.</p>
                                    <p>Change colors, fonts, banners, megamenus and more. Preview changes are live
                                        before saving them.</p>
                                    <h3>1914 translation by H. Rackham</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness.</p>
                                    <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                    </h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                    <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                    <p>You can use variant style from colors, images or variant images. Also available
                                        differnt type of design styles and size.</p>
                                    <h3>Lorem Ipsum is not simply random text.</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness.</p>
                                    <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled.</p> -->
                                    </div>
                                </div>

                                <div id="tab2" class="tab-content">
                                    <div id="shopify-product-reviews">
                                        <div class="spr-container">
                                            <div class="spr-header clearfix">
                                                <div class="spr-summary">
                                                    <span class="product-review">

                                                        <span class="spr-summary-actions">
                                                            <a href="#" class="spr-summary-actions-newreview btn">Write
                                                                a
                                                                review</a>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="spr-content">
                                                <div class="spr-form clearfix">
                                                    <form method="post" action="#" id="new-review-form"
                                                        class="new-review-form">
                                                        <h3 class="spr-form-title">Write a review</h3>
                                                        <fieldset class="spr-form-contact">
                                                            <div class="spr-form-contact-name">
                                                                <label class="spr-form-label"
                                                                    for="review_author_10508262282">Name</label>
                                                                <input class="spr-form-input spr-form-input-text "
                                                                    id="review_author_10508262282" type="text"
                                                                    name="name" value="" placeholder="Enter your name">
                                                            </div>
                                                            <div class="spr-form-contact-email">
                                                                <label class="spr-form-label"
                                                                    for="review_email_10508262282">Email</label>
                                                                <input class="spr-form-input spr-form-input-email "
                                                                    id="review_email_10508262282" type="email"
                                                                    name="email" value=""
                                                                    placeholder="john.smith@example.com">
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="spr-form-review">
                                                            <div class="spr-form-review-rating">
                                                                <label class="spr-form-label">Rating</label>
                                                                <div class="spr-form-input spr-starrating">
                                                                    <div class="product-review" style="width:100%">
                                                                        <div class="rate float-left" style="width:100%;justify-content:end">
                                                                        <input type="radio" id="star1" name="rating"
                                                                            value="5">
                                                                        <label for="star1"></label>
                                                                        <input type="radio" id="star2" name="rating"
                                                                            value="4">
                                                                        <label for="star2"></label>
                                                                        <input type="radio" id="star3" name="rating"
                                                                            value="3">
                                                                        <label for="star3"></label>
                                                                        <input type="radio" id="star4" name="rating"
                                                                            value="2">
                                                                        <label for="star4"></label>
                                                                        <input type="radio" id="star5" name="rating"
                                                                            value="1">
                                                                        <label for="star5"></label></div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            </div>

                                                            <div class="spr-form-review-title">
                                                                <label class="spr-form-label"
                                                                    for="review_title_10508262282">Review Title</label>
                                                                <input class="spr-form-input spr-form-input-text "
                                                                    id="review_title_10508262282" type="text"
                                                                    name="title" value=""
                                                                    placeholder="Give your review a title">
                                                            </div>

                                                            <div class="spr-form-review-body">
                                                                <label class="spr-form-label"
                                                                    for="review_body_10508262282">Body of Review <span
                                                                        class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                <div class="spr-form-input">
                                                                    <textarea
                                                                        class="spr-form-input spr-form-input-textarea "
                                                                        id="review_body_10508262282"
                                                                        data-product-id="10508262282" name="body"
                                                                        rows="10"
                                                                        placeholder="Write your comments here"></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="spr-form-actions">
                                                            <input type="submit"
                                                                class="spr-button spr-button-primary button button-primary btn btn-primary"
                                                                value="Submit Review" name="review">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div class="spr-reviews">
                                                    <?php
                                                $reviewsql=mysqli_query($conn,"select * from reviews");
                                                while($fetchreview=mysqli_fetch_array($reviewsql)){
                                                ?>
                                                    <div class="spr-review">
                                                        <div class="spr-review-header">
                                                            <span
                                                                class="product-review spr-starratings spr-review-header-starratings"><ul class="ratings ratings-three">
                                                        <li class="ratingCheck">
                                                            <input type="radio" id="stars5" name="rate" value="5">
                                                            <label for="stars5"
                                                                <?php if( ($fetchreview['stars'] >=5)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars4" name="rate" value="4">
                                                            <label for="stars4"
                                                                <?php if( ($fetchreview['stars'] >= 4)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars3" name="rate" value="3">
                                                            <label for="stars3"
                                                                <?php if( ($fetchreview['stars'] >= 3)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars2" name="rate" value="2">
                                                            <label for="stars2"
                                                                <?php if( ($fetchreview['stars'] >= 2)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                            <input type="radio" id="stars1" name="rate" value="1">
                                                            <label for="stars1"
                                                                <?php if( ($fetchreview['stars'] >= 1)){ ?>class="fff"
                                                                <?php } ?>></label>
                                                        </li>
                                                    </ul></span>
                                                            <h3 class="spr-review-header-title">
                                                                <?php echo $fetchreview['name']; ?>
                                                            </h3>
                                                        </div>
                                                        <div class="spr-review-content">
                                                            <p class="spr-review-content-body">
                                                                <?php echo $fetchreview['description']; ?></p>
                                                        </div>
                                                        <div class="img_logo"
                                                            style="display: inline-block; padding-top: 0; width:15%;">
                                                            <a href="<?php echo $fetchreview['link'];?>" target="_blank">
                                                                <img src="assets/images/amazon_logo.png" alt="Z1"
                                                                    title="Z1" />
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab3" class="tab-content">
                                    <div class="text-center">
                                        <img src="auth/code/sadmin/image/product_image_check/<?php echo $arr['sizefile'] ?>"
                                            alt="" />
                                    </div>
                                </div>

                                <div id="tab4" class="tab-content">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                                            <div class="rte-setting">
                                                <p>We are happy to accept a return or exchange within 15 business days
                                                    from the date of delivery of the concerned product only. The buyer
                                                    will have to pay the return shipping charges. Once we receive the
                                                    returned item, the return process is initiated from our end and the
                                                    condition email of the returned item is sent out immediately & then
                                                    the refund process is initiated between the next 3-4 days.</p>
                                                <p>Buyer to inform of the same on receipt of damaged product by writing
                                                    to us at info@z1kneebrace.com</p>
                                                <li>Buyer to ship the product back at the notified address (Jodhpur,
                                                    Rajasthan, India) at its own cost after the receipt of our e-mail
                                                    consent;</li>
                                                <li>On receipt of the damaged product by us, we will send you the
                                                    exchanged product.</li>
                                                <p>Please note that no exchange / return / refund will be entertained if
                                                    a customer wants to do so for the reason that he/she doesn’t like
                                                    the product after delivery or feels the product doesn’t match his or
                                                    her expectations. No refunds will be given in the following cases:
                                                </p>
                                                <li>Incorrect or insufficient address mentioned by the customer;</li>
                                                <li>Non-availability of recipient at the mentioned address and/or
                                                    premises;</li>
                                                <li>Refusal to accept products;</li>
                                                <li>Delivered at the place/to the person specifically mentioned by the
                                                    customer other than the customer himself;</li>
                                                <li>Force majeure event;</li>
                                                <li>In case the product has undergone any tampering by the customer.
                                                </li>
                                                <p>Please note that all the shipping charges and duties incidental to
                                                    the return of product shall be borne by the buyer. Z1 Knee Brace has
                                                    no liability towards it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Tabs-->

                        <!--Related Product Slider-->
                        <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                                <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and
                                    number
                                    of grid to show and products from store admin.</p>
                            </header>

                            <div class="tabs-listing">

                                <div class="tab_container">
                                    <div id="tab1" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <?php
                                            $sql=mysqli_query($conn,"select * from products where name!='$productName' limit 4");
                                            while($arr=mysqli_fetch_array($sql)){
                                            ?>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="productdetail.php?name=<?php echo $arr['name']; ?>">
                                                        <!-- image -->
                                                        
                                                        <img class="primary blur-up lazyload"
                                                            data-src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>"
                                                            src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hightlightfile'];?>"
                                                            alt="image" title="product" width="300" height="300">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload"
                                                            data-src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hoverfile'];?>"
                                                            src="auth/code/sadmin/image/product_image_check/<?php echo $arr['hoverfile'];?>"
                                                            alt="image" title="product" width="300" height="300">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <?php $label=$arr['label'];
                                                        if($label!=''){ ?>
                                                        <div class="product-labels rectangular"><span
                                                                class="lbl pr-label2"><?php echo $arr['label'];?></span>
                                                        </div>
                                                        <?php } ?>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" method="post">
                                                        <a href="<?php echo $arr['name']; ?>" class="btn btn-addto-cart"
                                                            type="button" tabindex="0">Add To Cart</a>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="productdetail.php?name=<?php echo $arr['name']; ?>"
                                                            title="Quick View" class="quick-view-popup quick-view"
                                                            data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a
                                                            href="productdetail.php?name=<?php echo $arr['name']; ?>"><?php echo $arr['name']; ?></a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"> <?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.number_format($arr['price'] * $_SESSION['USD']).'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($arr['price'],2) ;?>
                                                            <?php } ?></span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <!-- <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div> -->
                                                    <!-- Variant -->

                                                    <!-- End Variant -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>



                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <!--End Related Product Slider-->
                    </div>
                    <!--#ProductSection-product-template-->
                </div>
                <!--MainContent-->
            </div>
            <!--End Body Content-->

            <!--Footer-->
            <?php include("include/footer.php");?>
            <!--End Footer-->
            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
            <!--End Scoll Top-->

            <div class="hide">
                <div id="sizechart">
                    <h3>WOMEN'S BODY SIZING CHART</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>31" - 33"</td>
                                <td>33" - 35"</td>
                                <td>35" - 37"</td>
                                <td>37" - 39"</td>
                                <td>39" - 42"</td>
                            </tr>
                            <tr>
                                <td>Waist</td>
                                <td>24" - 26"</td>
                                <td>26" - 28"</td>
                                <td>28" - 30"</td>
                                <td>30" - 32"</td>
                                <td>32" - 35"</td>
                            </tr>
                            <tr>
                                <td>Hip</td>
                                <td>34" - 36"</td>
                                <td>36" - 38"</td>
                                <td>38" - 40"</td>
                                <td>40" - 42"</td>
                                <td>42" - 44"</td>
                            </tr>
                            <tr>
                                <td>Regular inseam</td>
                                <td>30"</td>
                                <td>30½"</td>
                                <td>31"</td>
                                <td>31½"</td>
                                <td>32"</td>
                            </tr>
                            <tr>
                                <td>Long (Tall) Inseam</td>
                                <td>31½"</td>
                                <td>32"</td>
                                <td>32½"</td>
                                <td>33"</td>
                                <td>33½"</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>MEN'S BODY SIZING CHART</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>XXL</th>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>33" - 36"</td>
                                <td>36" - 39"</td>
                                <td>39" - 41"</td>
                                <td>41" - 43"</td>
                                <td>43" - 46"</td>
                                <td>46" - 49"</td>
                            </tr>
                            <tr>
                                <td>Waist</td>
                                <td>27" - 30"</td>
                                <td>30" - 33"</td>
                                <td>33" - 35"</td>
                                <td>36" - 38"</td>
                                <td>38" - 42"</td>
                                <td>42" - 45"</td>
                            </tr>
                            <tr>
                                <td>Hip</td>
                                <td>33" - 36"</td>
                                <td>36" - 39"</td>
                                <td>39" - 41"</td>
                                <td>41" - 43"</td>
                                <td>43" - 46"</td>
                                <td>46" - 49"</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding-left: 30px;"><img src="assets/images/size.jpg" alt=""></div>
                </div>
            </div>
            <div class="hide">
                <div id="productInquiry">
                    <div class="contact-form form-vertical">
                        <div class="page-title">
                            <h3>Camelia Reversible Jacket</h3>
                        </div>
                        <form method="post" action="#" id="contact_form" class="contact-form">
                            <input type="hidden" name="form_type" value="contact" />
                            <input type="hidden" name="utf8" value="✓" />
                            <div class="formFeilds">
                                <input type="hidden" name="contact[product name]" value="Camelia Reversible Jacket">
                                <input type="hidden" name="contact[product link]"
                                    value="/products/camelia-reversible-jacket-black-red">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="ContactFormName" name="contact[name]" placeholder="Name"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input type="email" id="ContactFormEmail" name="contact[email]"
                                            placeholder="Email" autocapitalize="off" value="" required>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input required type="tel" id="ContactFormPhone" name="contact[phone]"
                                            pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea required rows="10" id="ContactFormMessage" name="contact[body]"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


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
            <!-- Photoswipe Gallery -->
            <script src="assets/js/vendor/photoswipe.min.js"></script>
            <script src="assets/js/vendor/photoswipe-ui-default.min.js"></script>
            <script>
                $(function () {
                    var $pswp = $('.pswp')[0],
                        image = [],
                        getItems = function () {
                            var items = [];
                            $('.lightboximages a').each(function () {
                                var $href = $(this).attr('href'),
                                    $size = $(this).data('size').split('x'),
                                    item = {
                                        src: $href,
                                        w: $size[0],
                                        h: $size[1]
                                    }
                                items.push(item);
                            });
                            return items;
                        }
                    var items = getItems();

                    $.each(items, function (index, value) {
                        image[index] = new Image();
                        image[index].src = value['src'];
                    });
                    $('.prlightbox').on('click', function (event) {
                        event.preventDefault();

                        var $index = $(".active-thumb").parent().attr('data-slick-index');
                        $index++;
                        $index = $index - 1;

                        var options = {
                            index: $index,
                            bgOpacity: 0.9,
                            showHideOpacity: true
                        }
                        var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                        lightBox.init();
                    });
                });
            </script>
        </div>

        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                            title="Close (Esc)"></button><button class="pswp__button pswp__button--share"
                            title="Share"></button><button class="pswp__button pswp__button--fs"
                            title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom"
                            title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div><button class="pswp__button pswp__button--arrow--left"
                        title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right"
                        title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $(".swatchInput").click(function () {
                    let size = $(this).val();

                    let pro = '<?php echo $productName ?>';
                    $.ajax({
                        type: 'post',
                        url: 'auth/code/sadmin/api.php',
                        data: {
                            size: size,
                            productName: pro
                        },
                        success: function (response) {

                            $("#sizequa").html(response);
                            $('.sizese').html(size);
                            
                        }
                    });
                    
                });
                $("#sizequa").change(function () {
                    let val = $("#sizequa").html();
                    if (val == 'Out of Stock') {
                        $('.wrapQtyBtn').css('display', 'none');
                    }
                });
            })
        </script>

    
</body>

<!-- belle/product-layout-1.html   11 Nov 2019 12:42:26 GMT -->

</html>