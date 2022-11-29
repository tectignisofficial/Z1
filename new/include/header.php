        <!--Top Header-->
        <?php
        $page= substr($_SERVER['SCRIPT_NAME'],STRRPOS($_SERVER['SCRIPT_NAME'],"/")+1);
        //include("currencysession.php");
        ?>
        <div class="top-header">
            <style>
                #select {
                    color: white;
                    background: black;
                    height: fit-content;
                    border-color: black;
                    background-image: red;
                }

                #select.dropdown {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    background-position: 22px 3px;
                    background-size: 13px 13px;
                    width: 40px;
                    height: 20px;
                    margin-left: 4px;
                    position: absolute;
                }

                .overlay {
                    font-size: 9px;
                    color: white;
                    position: absolute;
                    left:44px;
                    right: 0px;
                    top: 11px;
                    cursor: default;
                    line-height: 1px;

                }

                .cur {
                    position: relative;
                    width: 40px;
                    height: 20px;
                    float: left;
                    margin: 0;
                    padding: 0;
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4 d-flex">
                        <form action="" method="post">
                            <div class="currency-picker">
                                <!-- <span class="selected-currency"><?php if(isset($_SESSION['USD'])){ echo $_SESSION['myselect']; }else { echo 'INR'; } ?></span> -->

                                <div id="cur">
                                    <select name="myselect" id="select" class="" onchange="this.form.submit()">

                                        <option value="INR"
                                            <?php if(isset($_SESSION['USD'])){ if($_SESSION['myselect']=='INR'){echo 'selected'; } } ?>>
                                            INR</option>
                                        <option value="GBP"
                                            <?php if(isset($_SESSION['USD'])){ if($_SESSION['myselect']=='GBP'){echo 'selected'; } } ?>>
                                            GBP</option>
                                        <option value="CAD"
                                            <?php if(isset($_SESSION['USD'])){ if($_SESSION['myselect']=='CAD'){echo 'selected'; } } ?>>
                                            CAD</option>
                                        <option value="USD"
                                            <?php if(isset($_SESSION['USD'])){ if($_SESSION['myselect']=='USD'){echo 'selected'; } } ?>>
                                            USD</option>
                                        <option value="AUD"
                                            <?php if(isset($_SESSION['USD'])){ if($_SESSION['myselect']=='AUD'){echo 'selected'; } } ?>>
                                            AUD</option>
                                    </select>
                                    <div class="overlay">&#9660;</div>
                                </div>
                            </div>
                        </form>

                        <!-- <div class="language-dropdown">
                      
                      </div> -->
                        <p class="phone-no pl-4"><i class="fa fa-phone"></i> +91 7300044197</p>


                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <?php
                        if(!isset($_SESSION['customerid'])){
                        ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Create Account</a></li>
                            <?php }else{ ?>
                            <li><a href="myaccount.php">Hello &nbsp;<?= $_SESSION['customername'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->


        <!--Header-->
        <div class="header-wrap animated d-flex border-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="Z1" title="Z1" />
                        </a>
                        
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu " ><a href="index.php" class="<?= $page == 'index.php' ? 'active':'' ?>">Home <i
                                            class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="about-us.php" class="<?= $page == 'about-us.php' ? 'active':'' ?>">About us <i
                                            class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="contact-us.php" class="<?= $page == 'contact-us.php' ? 'active':'' ?>">Contact us <i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="blog.php" class="<?= $page == 'blog.php' ? 'active':'' ?>">Blogs <i
                                            class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="reviews.php" class="<?= $page == 'reviews.php' ? 'active':'' ?>">Reviews <i
                                            class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="videos.php" class="<?= $page == 'videos.php' ? 'active':'' ?>">Videos <i
                                            class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="shop.php" class="<?= $page == 'shop.php' ? 'active':'' ?>">Shop Now! <i class="anm anm-angle-down-l"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="Z1" title="Z1" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="cart.php" class="" title="Cart" style="font-size:20px">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php
                            if(isset($_SESSION['shopping_cart'])){
                            $items_in_cart = is_array($_SESSION['shopping_cart']) ? count($_SESSION['shopping_cart']) : 0; echo $items_in_cart; }
                            ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->

        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.php">Home </a>
                <li class="lvl1 parent megamenu"><a href="about-us.php">About us </a>
                <li class="lvl1 parent megamenu"><a href="contact-us.php">Contact us </a>
                <li class="lvl1 parent megamenu"><a href="blogs.php">Blogs </a>
                <li class="lvl1 parent megamenu"><a href="reviews.php">Reviews</a>
                <li class="lvl1 parent megamenu"><a href="videos.php">Videos </a>
                <li class="lvl1"><a href="shop.php"><b>Shop Now!</b></a></li>
                <ul>
                </ul>
        </div>
        <!--End Mobile Menu-->