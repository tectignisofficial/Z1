<?php
session_start();
include('include/config.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-grid-3.html   11 Nov 2019 12:39:06 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accessories &ndash; Z1KneeBrace</title>
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

<body class="template-collection belle">
    <div class="pageWrapper">

        <?php include("include/header.php");?>

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Accessories</h1>
                        <p><a href="index.php">Home</a> / <span>Accessories</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">
                <div class="row">
                    <!--Sidebar-->
                    <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i>
                        </div>
                        <div class="sidebar_tags">

                            <div class="sidebar_widget static-banner">
                                <img src="assets/images/z1kneebanner.webp" alt="z1knee" />
                            </div>
                        </div>
                    </div> -->
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                       
                        <div class="productList">
                            <!--Toolbar-->
                            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product
                                Filters</button>
                            <div class="toolbar">
                                <div class="filters-toolbar-wrapper">
                                    <div class="row">
                                        <div
                                            class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                        </div>
                                        <div
                                            class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 text-right">
                                            <div class="filters-toolbar__item">
                                                <label for="SortBy" class="hidden">Sort</label>
                                                <select name="SortBy" id="SortBy"
                                                    class="filters-toolbar__input filters-toolbar__input--sort" style="width:100px">
                                                    <option value="" selected="selected" disabled>Sort</option>
                                                    <option value="LowToHigh">low to high</option>
                                                    <option value="HighToLow">high to low</option>

                                                </select>
                                                <input class="collection-header__default-sort" type="hidden"
                                                    value="manual">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End Toolbar-->
                            <div class="grid-products grid--view-items">
                                <ul class="row outer">
                                    <?php
                                            if(isset($_GET['pageno'])){
                                                $pageno=$_GET['pageno'];
                                            }else{ $pageno = 1; }
                                            $no_of_record_per_page=8;
                                            $occ=($pageno-1)*$no_of_record_per_page;
                                            $total_page=mysqli_query($conn,"select count(*) from products where categories='accessories'");
                                            $total_rows = mysqli_fetch_array($total_page)[0];
                                            $total_pages = ceil($total_rows / $no_of_record_per_page);
                                            $sql=mysqli_query($conn,"select * from products where categories='accessories'  LIMIT $occ, $no_of_record_per_page");
                                            if(mysqli_num_rows($sql)>0){
                                            while($arr=mysqli_fetch_array($sql)){
                                            ?>
                                    <li class="col-6 col-sm-6 col-md-3 col-lg-3 item " data-price="<?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo number_format($arr['price'] * $_SESSION['USD']).'';
                                                            }else{
                                                            ?><?php echo $arr['price'];?>
                                                    <?php } ?>" style="list-style:none;">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="productdetail/<?php echo $arr['seo_title']; ?>">
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
                                                        class="lbl pr-label2"><?php echo $arr['label'];?></span></div>
                                                <?php } ?>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#"
                                                onclick="window.location.href='cart.html'" method="post">
                                                <a href="productdetail/<?php echo $arr['seo_title']; ?>"
                                                    class="btn btn-addto-cart" type="button">Add To Cart</a>
                                            </form>

                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a
                                                    href="productdetail/<?php echo $arr['seo_title']; ?>"><?php echo $arr['name'];?></a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price child">
                                                <span class="price"> <?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.number_format($arr['price'] * $_SESSION['USD']).'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo $arr['price'];?>
                                                    <?php } ?></span>
                                            </div>
                                            <!-- End product price -->

                                            <!-- Variant -->

                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </li>
                                    <?php } ?>
                                </ul>
                                <hr class="clear">

                                <div class="pagination">
                                    <ul>
                                        <?php
                                                for($i=1;$i<=$total_pages;$i++)
                                                {
                                                    ?>
                                        <li class="<?php if($pageno == $i){ echo 'active'; } ?>"><a
                                                href="?pageno=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php
                                                }
                                                ?>
                                    </ul>
                                </div>
                                <?php } else{  echo '<div> No Record Found </div>' ;
                                    //  echo '<script>window.location.href="accessories.php";</script>' ;
                                     } ?>



                            </div>
                        </div>

                    </div>
                    <!--End Main Content-->
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

        <!--Quick View popup-->
        <!--End Quick View popup-->

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
            (function () {

                let field = document.querySelector('.outer');
                let li = Array.from(field.children);

                let select = document.getElementById('SortBy');
                let ar = [];
                select.onchange = sortingValue;

                function sortingValue() {

                    if (this.value === 'Default') {
                        while (field.firstChild) {
                            field.removeChild(field.firstChild);
                        }
                        field.append(...ar);
                    }
                    if (this.value === 'LowToHigh') {
                        SortElem(field, li, true);

                        function SortElem(field, li, asc) {
                            let dm, sortli;
                            // dm = asc ? 1 : -1;

                            sortli = li.sort((a, b) => {
                                const ax = a.getAttribute('data-price');
                                const bx = b.getAttribute('data-price');
                                return ax - bx;
                            });
                            while (field.firstChild) {
                                field.removeChild(field.firstChild);
                            }
                            field.append(...sortli);
                        }
                    }
                    if (this.value === 'HighToLow') {
                        SortElem(field, li, false);

                        function SortElem(field, li, asc) {
                            let dm, sortli;
                            // dm = asc ? 1 : -1;

                            sortli = li.sort((a, b) => {
                                const ax = a.getAttribute('data-price');
                                const bx = b.getAttribute('data-price');
                                return bx - ax;
                            });
                            while (field.firstChild) {
                                field.removeChild(field.firstChild);
                            }
                            field.append(...sortli);
                        }

                    }
                }


                // alert(select);
            })();
        </script>
    </div>
</body>

<!-- belle/shop-grid-3.html   11 Nov 2019 12:39:06 GMT -->

</html>