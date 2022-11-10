        <!--Top Header-->
        <?php
        include("currencysession.php");
        ?>
        <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                    <form action="" method="post">
                    <div class="currency-picker">
                        <span class="selected-currency">INR</span>
                        
                         <ul id="currencies">
                            <select name="myselect" id="" class="form-control" onchange="this.form.submit()">
                        <option value=""></option>
                            <option value="INR">INR</option>
                            <option value="GBP">GBP</option>
                            <option value="CAD">CAD</option>
                            <option value="USD">USD</option>
                            <option value="AUD">AUD</option>
                        </select>
                        </ul> 
                    </div>
                    </form>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <!-- <div class="language-dropdown">
                      
                      </div> -->
                      <p class="phone-no"><i class="anm anm-phone-s"></i> +91 7300044197</p>
                    </div>
                   
                   
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Create Account</a></li>
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
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="anm anm-angle-down-l"><?= $page == 'index.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="about-us.php">About us <i class="anm anm-angle-down-l"><?= $page == 'about-us.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="contact-us.php">Contact us <i class="anm anm-angle-down-l"><?= $page == 'contact-us.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="blogs.php">Blogs <i class="anm anm-angle-down-l"><?= $page == 'blogs.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="reviews.php">Reviews <i class="anm anm-angle-down-l"><?= $page == 'reviews.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="videos.php">Videos <i class="anm anm-angle-down-l"><?= $page == 'video.php' ? 'active':'' ?></i></a>
                            </li>
                            <li class="lvl1"><a href="shop.php"><b>Shop Now!</b> <i class="anm anm-angle-down-l"><?= $page == 'shop.php' ? 'active':'' ?></i></a></li>
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
                        	<i class="icon anm anm-bag-l" ></i>
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