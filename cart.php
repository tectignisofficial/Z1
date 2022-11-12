<?php
session_start();
include('include/config.php');

if(isset($_GET['did'])){
    foreach($_SESSION['shopping_cart'] as $keys => $values){
        if($values['itemid'] == $_GET['did']){
            unset($_SESSION['shopping_cart'][$keys]);
        }
    }
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
    if($_SESSION['myselect']=='INR'){
        header('location:checkout.php');
        // header('location:razor/pay.php');
    }
    else{
        echo "<script>alert('only rs');</script>";
    }
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Your cart &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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


   
    <?php include("include/header.php");?> 
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <?php
                                if(!empty($_SESSION['shopping_cart'])){
                                    $total=0;
                                    foreach($_SESSION['shopping_cart'] as $keys => $values){
                                ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="assets/images/product-images/product-image1.jpg" alt="Elastic Waist Dress - Navy / Small"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#"><?php echo $values['name']; ?></a>
                                        </div>
                                        
                                        <!-- <div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div> -->
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money"> <?php
                                                            if(isset($_SESSION['USD'])){
                                                                echo '<i class="'.$_SESSION['icon'].'"></i>'.$values['price'] * $_SESSION['USD'].'';
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo $values['price'];?>
                                                            <?php } ?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div><span class="quantity"><?php echo $values['quantity']; ?></span></div>
                                        <!-- <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div> -->
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money"><i class="<?php echo $_SESSION['icon'] ?>"></i><?php  
                                              if(isset($_SESSION['USD'])){
                                                   echo number_format($values['quantity'] * $values['price']* $_SESSION['USD'],2 );
                                                            }else{
                                                            ?><i class="fa fa-inr"></i> <?php echo number_format($values['quantity'] * $values['price'],2 )?>
                                                            <?php } ?>
                                        </span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="cart.php?did=<?php echo $values['itemid'] ?>" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                                <?php  
                                if(isset($_SESSION['USD'])){
                                    $total= $total + ($values['quantity'] * $values['price'] * $_SESSION['USD']);  
                                }
                                else{

                                    $total= $total + ($values['quantity'] * $values['price']);  }
                             
                            }
                                } ?>
                                <!-- <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="assets/images/product-images/product-image3.jpg" alt="3/4 Sleeve Kimono Dress"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">3/4 Sleeve Kimono Dress</a>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">$735.00</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">$735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr> -->
                             
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                </tr>
                            </tfoot>
                    </table>
                    
                    <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
                    <hr>
			
                    
                    </form>                   
               	</div>
               
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                <form method="post">
                	<div class="cart-note">
                    	<div class="solid-border">
							<h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
							<textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
						</div>
                    </div>
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money"><?php if(isset($_SESSION['USD'])){ echo "<i class='".$_SESSION['icon']."'></i>"; }else{
                            echo "<i class='fa fa-inr'></i> ";
                        } if($_SESSION['shopping_cart']){ echo number_format($total,2);
                        $_SESSION['total']=number_format($total,2);
                        }else{ echo '0.00'; } ?></span></span>
                      </div>
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" >
                           I agree with the terms and conditions</label>
                      </p>
                      <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout">
                      <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                    </div>
                    </form>
                </div>
                   
            </div>
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