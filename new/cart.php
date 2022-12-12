<?php
session_start();
include('include/config.php');

if(isset($_GET['did'])){
    foreach($_SESSION['shopping_cart'] as $keys => $values){
        if($values['itemid'] == $_GET['did']){
            if($values['option1'] == $_GET['option']){
            unset($_SESSION['shopping_cart'][$keys]);
            }
            $session_check=count($_SESSION['shopping_cart']);
            if($session_check==0){
            unset($_SESSION['shopping_cart']);
            }
        }
        
    }
    header('location:cart.php');
}

if(isset($_POST['checkout'])){
    if(!isset($_SESSION['customerid'])){
        header('location:login.php');
    }
    else{
        $id=$_SESSION['customerid'];
        $sql=mysqli_query($conn,"select * from customers where id='$id'");
        $fetchsql=mysqli_fetch_array($sql);
        $_SESSION['name']=$fetchsql['name'];
        $_SESSION['email']=$fetchsql['email'];
        $_SESSION['phone']=$fetchsql['phone'];
        header('location:checkout.php');
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Your cart &ndash; Z1KneeBrace</title>
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
        .mt-100 {
            margin-top: 100px;

        }


        .card1 {
            margin-bottom: 30px;
            border: 0;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            letter-spacing: .5px;
            border-radius: 8px;
            -webkit-box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
            box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
        }

        .card1 .card-header1 {
            background-color: #fff;
            border-bottom: none;
            padding: 24px;
            border-bottom: 1px solid #f6f7fb;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-header1:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }



        .card1 .card-body1 {
            padding: 30px;
            background-color: transparent;
        }

        /* .btn-primary, .btn-primary.disabled, .btn-primary:disabled {
    background-color: #4466f2!important;
    border-color: #4466f2!important;
} */
    </style>
</head>

<body class="page-template belle">
    <div class="pageWrapper">



        <?php include("include/header.php");?>
        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->

            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper headinghead">
                        <h1 class="page-width">Your cart</h1>
                        <p><a href="index.php">Home</a> / <span>Your cart</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">
                <?php
            if(isset($_SESSION['shopping_cart'])){
          
            ?>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                        <form action="#" method="post" class="cart style2">
                            <table class="table-responsive">
                                <thead class="cart__row cart__header">
                                    <tr>
                                        <th colspan="2" class="text-center">Product</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Total</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $total=0;
                                if(!empty($_SESSION['shopping_cart'])){
                                    $total=0;
                                    foreach($_SESSION['shopping_cart'] as $keys => $values){
                                ?>
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item small--hide">
                                            <a href="productdetail.php?name=<?php echo $values['name']; ?>"><img
                                                    class="cart__image"
                                                    src="auth/code/sadmin/image/product_image_check/<?php echo $values['image']; ?>"
                                                    alt="Elastic Waist Dress - Navy / Small"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item small--hide">
                                            <div class="list-view-item__title">
                                                <?php echo $values['name']; ?>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item small--hide">
                                            <span class="money"> <?php
                                                            echo $values['option1']; ?>
                                            </span>
                                        </td>
                                        <td class="small--hide">
                                            <i
                                                class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i>
                                            <?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                            <?php echo number_format($values['price'],2 )?>
                                            <?php } ?>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div><span class="quantity"><?php echo $values['quantity']; ?></span></div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money"><i
                                                        class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i><?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['quantity'] * $values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                                    <?php echo number_format($values['quantity'] * $values['price'],2 )?>
                                                    <?php } ?>
                                                </span></div>
                                        </td>
                                        <td class="text-center small--hide"><a
                                                href="cart.php?did=<?php echo $values['itemid'] ?>&option=<?= $values['option1']; ?>"
                                                class="btn btn--secondary cart__remove" title="Remove tem"><i
                                                    class="icon icon anm anm-times-l"></i></a>
                                        </td>
                                    </tr>
                                    <?php  
                                        
                                    }
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-left"><a href="shop.php"
                                                class="btn--link cart-continue"><i
                                                    class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    </tr>
                                </tfoot>
                            </table>

                            <!--mobile-->
                            <?php
                                $total=0;
                                if(!empty($_SESSION['shopping_cart'])){
                                    $total=0;
                                    foreach($_SESSION['shopping_cart'] as $keys => $values){
                                ?>
                            <div class="row mobileview">
                                <div class="col-3">
                                    <a href="productdetail.php?name=<?php echo $values['name']; ?>"><img
                                            class="cart__image"
                                            src="auth/code/sadmin/image/product_image_check/<?php echo $values['image']; ?>"
                                            alt="Elastic Waist Dress - Navy / Small"></a>
                                </div>
                                <div class="col-9">
                                    <div><?php echo $values['name']; ?></div>
                                    <div> <i class="<?php if(isset($_SESSION['icon'])){ echo $_SESSION['icon']; } ?>"></i>
                                        <?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i>
                                        <?php echo number_format($values['price'],2 )?>
                                        <?php } ?></div>
                                    <div>Size: <?php echo $values['option1']; ?> &nbsp; &nbsp; <span>Qty:
                                            <?php echo $values['quantity']; ?></span></div>
                                            <p></p>
                                                    <p><a
                                                href="cart.php?did=<?php echo $values['itemid'] ?>&option=<?= $values['option1']; ?>"
                                                class="" title="Remove tem"><i
                                                    class="icon icon anm anm-times-l"></i>&nbsp;&nbsp; Remove</a></p>
                                    
                                </div>
                            </div>
                            <?php  
                                        if(isset($_SESSION['USD'])){
                                            $total= $total + ($values['quantity'] * $values['price'] * $_SESSION['USD']);  
                                        }
                                        else{

                                            $total= $total + ($values['quantity'] * $values['price']);  } ?>
                            <?php } } ?>
                            <!--mobile-->
                            <div class="currencymsg">We processes all orders in USD. While the content of your cart is
                                currently displayed in USD, the checkout will use USD at the most current exchange rate.
                            </div>
                            <hr>


                        </form>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                        <form method="post">

                            <div class="solid-border">
                                <div class="row">
                                    <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                                    <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                                            class="money"><?php if(isset($_SESSION['USD'])){ echo "<i class='".$_SESSION['icon']."'></i>"; }else{
                            echo "<i class='fa fa-inr'></i> ";
                        } if(isset($_SESSION['shopping_cart'])){ echo number_format($total,2);
                        $_SESSION['total']=$total;
                        
                        }else{ echo '0.00'; } ?></span></span>
                                </div>
                                <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                <a href="checkout.php">
                                    <input type="submit" name="checkout" id="cartCheckout"
                                        class="btn btn--small-wide checkout" value="Checkout">
                                </a>
                                <div class="paymnet-img">
                                    <img src="assets/images/payment-img.jpg" alt="Payment"></div>
                            </div>
                        </form>
                    </div>

                </div>
                <?php
              }
              else if(
              isset($_SESSION['shopping_cart'])) 
            {
                $item_in_cart = is_array($_SESSION['shopping_cart']) ? count($_SESSION['shopping_cart']) : 0; 
                if($item_in_cart == '0'){
echo '<div class="container-fluid  mt-100">
<div class="row">

   <div class="col-md-12">
   
           <div class="card1">
       <div class="card-header1">
       
       </div>
       <div class="card-body1 cart">
               <div class="col-sm-12 empty-cart-cls text-center">
                   <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                   <h3><strong>Your Cart is Empty</strong></h3>
                   <h4>Add something to make me happy :)</h4>
                   <a href="shop.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                   
               
               </div>
       </div>
</div>
       
   
   </div>

</div>

</div>';
                }
              }
              else{
                echo '<div class="container-fluid  mt-100">
                <div class="row">
                
                   <div class="col-md-12">
                   
                           <div class="card1">
                       <div class="card-header1">
                       
                       </div>
                       <div class="card-body1 cart">
                               <div class="col-sm-12 empty-cart-cls text-center">
                                   <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                                   <h3><strong>Your Cart is Empty</strong></h3>
                                   <h4>Add something to make me happy :)</h4>
                                   <a href="shop.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                                   
                               
                               </div>
                       </div>
               </div>
                       
                   
                   </div>
                
                </div>
               
               </div>';
            } 
            ?>
            </div>

        </div>
        <!--End Body Content-->


        <?php include("include/footer.php");?>
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

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->

</html>