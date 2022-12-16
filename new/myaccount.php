<?php
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
 $url = "https://";   
else  
 $url = "http://";   
$url.= $_SERVER['HTTP_HOST'];   
$url.= $_SERVER['REQUEST_URI'];    
session_start();
if(!isset($_SESSION['customerid'])) 
{
 header("Location:login.php"); 
}

include('include/config.php');

$billADDRESS=mysqli_query($conn,"SELECT * FROM `billing_address` WHERE customer_id='".$_SESSION['customerid']."'");
$arr=mysqli_fetch_array($billADDRESS);

$shipADDRESS=mysqli_query($conn,"SELECT * FROM `shipping_address` WHERE customer_id='".$_SESSION['customerid']."'");
$shiparr=mysqli_fetch_array($shipADDRESS);

$data=mysqli_query($conn,"SELECT * FROM `customers` WHERE id='".$_SESSION['customerid']."'");
$row=mysqli_fetch_array($data);
if(isset($_POST['update'])){


    $FullName=$_POST['customerName'];
    $customerPhone=$_POST['customerPhone'];


    $sql=mysqli_query($conn, "UPDATE `customers` SET `name`='$FullName',`phone`='$customerPhone' WHERE id='".$_SESSION['customerid']."'");
      if($sql==1){
        echo '<script>alert("sucessfully submitted");</script>';
        header('location:myaccount.php');
    }else{
        echo '<script>alert("something went wrong");</script>';
    }
}

if(isset($_POST["changepassword"])){
	$password=$_POST["confirmpassword"];
	$newpassword=$_POST["newPassword"];


	$sql = mysqli_query($conn,"SELECT * FROM customers WHERE id='".$_SESSION['customerid']."'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
	
	$hashpassword=password_hash($newpassword,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `customers` SET `password`='$hashpassword' WHERE id='".$_SESSION['customerid']."'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='login.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	}

    if(isset($_POST['shipping_address'])){
        $customerName=$_POST['customerName'];
        if($customerName == 'Shipping'){
        $fullName=mysqli_real_escape_string($conn,$_POST['fullName']) ?? null;
        $phone=mysqli_real_escape_string($conn,$_POST['number']);
        $home=mysqli_real_escape_string($conn,$_POST['home']);
        $road=mysqli_real_escape_string($conn,$_POST['road']);
        $pincode=$_POST['pincode'];
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        $country_id=mysqli_real_escape_string($conn,$_POST['country_id']);
        $zone_id=mysqli_real_escape_string($conn,$_POST['zone_id']);
        $landmark=mysqli_real_escape_string($conn,$_POST['landmark']);
        $notes=mysqli_real_escape_string($conn,$_POST['notes']);
        $id=$_POST['id'];
        
        $checksql=mysqli_query($conn,"select * from shipping_address");
        if(mysqli_num_rows($checksql)==0){
            $sql=mysqli_query($conn,"INSERT INTO `shipping_address`(`name`, `phone`, `house_building`, `country`, `state`, `city`, `road_area_colony`, `pin_code`, `landmark`, `order_note`, `customer_id`,`set_default`) VALUES ('$fullName','$phone','$home','$country_id','$zone_id','$city','$road','$pincode','$landmark','$notes','$id','1')");
        }else{
            $sql=mysqli_query($conn,"INSERT INTO `shipping_address`(`name`, `phone`, `house_building`, `country`, `state`, `city`, `road_area_colony`, `pin_code`, `landmark`, `order_note`, `customer_id`) VALUES ('$fullName','$phone','$home','$country_id','$zone_id','$city','$road','$pincode','$landmark','$notes','$id')");
        }
        }
        else if($customerName == 'Billing'){
            $fullName=mysqli_real_escape_string($conn,$_POST['fullName']) ?? null;
            $phone=mysqli_real_escape_string($conn,$_POST['number']);
            $home=mysqli_real_escape_string($conn,$_POST['home']);
            $road=mysqli_real_escape_string($conn,$_POST['road']);
            $pincode=$_POST['pincode'];
            $city=mysqli_real_escape_string($conn,$_POST['city']);
            $country_id=mysqli_real_escape_string($conn,$_POST['country_id']);
            $zone_id=mysqli_real_escape_string($conn,$_POST['zone_id']);
            $landmark=mysqli_real_escape_string($conn,$_POST['landmark']);
            $notes=mysqli_real_escape_string($conn,$_POST['notes']);
            $id=$_POST['id'];

            $checksql=mysqli_query($conn,"select * from billing_address");
            if(mysqli_num_rows($checksql)==0){
            $sql=mysqli_query($conn,"INSERT INTO `billing_address`(`name`, `phone`, `house_building`, `country`, `state`, `city`, `road_area_colony`, `pin_code`, `landmark`, `order_note`, `customer_id`,`set_default`) VALUES ('$fullName','$phone','$home','$country_id','$zone_id','$city','$road','$pincode','$landmark','$notes','$id','1')");
            }else{
                $sql=mysqli_query($conn,"INSERT INTO `billing_address`(`name`, `phone`, `house_building`, `country`, `state`, `city`, `road_area_colony`, `pin_code`, `landmark`, `order_note`, `customer_id`) VALUES ('$fullName','$phone','$home','$country_id','$zone_id','$city','$road','$pincode','$landmark','$notes','$id')");
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
    <title>My Account &ndash; Z1KneeBrace</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/js/countrystatecity.js?v2"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        .modal {
            overflow-y: auto !important;
        }

        label {
            text-align: start !important
        }

        p {
            text-transform: capitalize;
        }
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
                        <h1 class="page-width">My Account</h1>
                        <p><a href="index.php">Home</a> / <span>My Account</span></p>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container mt-5">
                <div class="dashboard-upper-info">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="d-single-info">
                                <p class="user-name">Hello <span
                                        class="font-weight-600"><?php echo $row['name'] ?></span></p>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="d-single-info">
                                <p>Need Assistance? Customer service at.</p>
                                <p>info@z1kneebrace.com</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="d-single-info">
                                <p>E-mail them at </p>
                                <p>info@z1kneebrace.com</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12">
                            <div class="d-single-info text-lg-center">
                                <a class="view-cart" href="cart.php"><i class="icon anm anm-bag-l"></i> View
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row margin-30px-bottom">
                    <div class="col-xl-2 col-lg-2 col-md-12 md-margin-20px-bottom">
                        <!-- Nav tabs -->
                        <ul class="nav flex-column dashboard-list" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#account-details">Account details</a>
                            </li>
                            <li><a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>

                            <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#changepassword">Change Password</a></li>
                            <li><a class="nav-link" href="logout.php">logout</a></li>
                        </ul>
                        <!-- End Nav tabs -->
                    </div>

                    <div class="col-xs-10 col-lg-10 col-md-12">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard-content padding-30px-all md-padding-15px-all">
                            <!-- Dashboard -->
                            <div id="changepassword" class="tab-pane fade">
                                <h3>Change Password</h3>
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-firstname">Current Password <span
                                                    class="required-f">*</span></label>
                                            <input name="confirmpassword" value="" id="input-firstname"
                                                class="form-control" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-email">New Password<span
                                                    class="required-f">*</span></label>
                                            <input name="newPassword" value="" id="input-email" class="form-control"
                                                type="text" required>
                                        </div> <button type="submit" name="changepassword"
                                            class="btn margin-15px-top btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        <!-- End Dashboard -->

                        <!-- Orders -->
                        <div id="orders" class="product-order tab-pane fade">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="alt-font">
                                        <tr>
                                            <th>Order</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cusid=$_SESSION['customerid'];
                                            $sql=mysqli_query($conn,"select * from orders where customer='$cusid'");
                                            $count=1;
                                            while($arr1=mysqli_fetch_array($sql)){
                                            ?>
                                        <tr>

                                            <td><?= $count; ?></td>
                                            <td><?= $arr1['product'] ?></td>
                                            <td><?php $date=$arr1['order_date'];
                                            $date1=strtotime($date);
                                            echo date('M d, 20y',$date1) ?>
                                            </td>
                                            <td><?= $arr1['order_status'] ?></td>
                                            <?php
                                            $curr=$arr1['payment_currency'];
                                            $sql1=mysqli_query($conn,"select * from currency where currency_name='$curr'");
                                            $row1=mysqli_fetch_array($sql1);
                                            ?>
                                            <td><i class="<?= $row1['currency_icon'] ?>"></i> <?= $arr1['amount'] ?>
                                            </td>
                                            <?php
                                            $pro=$arr1['product'];
                                            $sql2=mysqli_query($conn,"select * from products where name='$pro'");
                                            $arr2=mysqli_fetch_array($sql2);
                                            ?>
                                            <td>
                                                <a class="view viewdetail" href="" data-toggle="modal"
                                                    data-id="<?= $arr1['id']; ?>"
                                                    data-product="<?= $arr1['product']; ?>"
                                                    data-size="<?= $arr1['size'] ?>"
                                                    data-image="<?= $arr2['hightlightfile'] ?>"
                                                    data-order="<?= $arr1['order_id']; ?>"
                                                    data-processing="<?= $arr1['order_status'] ?>">
                                                    <!-- <i class="fa fa-eye"></i> -->
                                                    View &nbsp;&nbsp;
                                                </a>
                                                <a href="order_tracking?order=<?= $arr1['id'] ?>">Track Your Order</a>
                                            </td>
                                        </tr>
                                        <?php $count++; } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Orders -->

                        <!-- Address -->
                        <div id="address" class="address tab-pane">
                            <div class="row" style="float:right" data-target="#content" data-toggle="modal">
                                <button class="btn btn-primary" data-target="#content" data-toggle="modal">
                                    Add Address</button>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h2 style="display: -webkit-inline-box;">Billing Address</h2>&nbsp;&nbsp;&nbsp;<a
                                        href="#billingmodalRegister" data-toggle="modal"
                                        data-target="#billingmodalRegister" style="color:#0874c3">Change</a>
                                    <?php
                                    $id=$_SESSION['customerid'];
                                    
                                    $sql=mysqli_query($conn,"select * from billing_address where customer_id='$id' and set_default='1'");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>

                                    <input type="hidden" name="prid" value="<?= $arr['id'] ?>">
                                    <p><?= $arr['house_building'].' , '.$arr['road_area_colony'].' ,  Near by' .$arr['landmark'].','.$arr['city'].' , '.$arr['state'].' , '.$arr['country'].' , '.$arr['pin_code'] ?>
                                    </p>
                                    <p><?= $arr['phone']; ?></p>
                                    <p>
                                        <p style="cursor:pointer;display:inline-block;color:black" class="billingmodal"
                                            data-name="billing" data-id='<?= $arr['id'] ?>'>Edit</p>
                                        <?php } ?>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h2 style="display: -webkit-inline-box;">Shipping Address</h2>&nbsp;&nbsp;&nbsp;<a
                                        href="#shippingmodalRegister" data-toggle="modal"
                                        data-target="#shippingmodalRegister" style="color:#0874c3">Change</a>
                                    <?php
                                    $id=$_SESSION['customerid'];
                                    $sql=mysqli_query($conn,"select * from shipping_address where customer_id='$id' and set_default='1'");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>

                                    <input type="hidden" name="prid" value="<?= $arr['id'] ?>">
                                    <p><?= $arr['house_building']. ',' .$arr['road_area_colony']. ', Near by '.$arr['landmark'].' , '.$arr['city'].' , '.$arr['state'].' , '.$arr['country'].' , '.$arr['pin_code'] ?>
                                    </p>
                                    <p><?= $arr['phone']; ?></p>
                                    <p style="cursor:pointer;display:inline-block;color:black" class="billingmodal"
                                        data-id='<?= $arr['id'] ?>' data-name="shipping">Edit</p>

                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <!-- End Address -->

                        <!-- Account Details -->
                        <div id="account-details" class="tab-pane fade active show">
                            <h3>Account details </h3>
                            <div class="account-login-form bg-light-gray padding-20px-all">
                                <form method="POST">
                                    <fieldset>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">Name <span
                                                        class="required-f">*</span></label>
                                                <input name="customerName" value="<?php echo $row['name'] ?>"
                                                    id="input-firstname" class="form-control" type="text" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">E-Mail <span
                                                        class="required-f">*</span></label>
                                                <input readonly name="customerEmail" value="<?php echo $row['email'] ?>"
                                                    id="input-email" class="form-control" type="email" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Telephone <span
                                                        class="required-f">*</span></label>
                                                <input name="customerPhone" value="<?php echo $row['phone'] ?>"
                                                    id="input-telephone" class="form-control" type="tel" required>
                                            </div>

                                        </div>

                                    </fieldset>
                                    <button type="submit" name="changepassword"
                                        class="btn margin-15px-top btn-primary">Save</button>
                                </form>

                            </div>
                        </div>
                        <!-- End Account Details -->
                    </div>
                    <!-- End Tab panes -->
                </div>
            </div>
        </div>
        <div class="modal fade quick-view-popup" tabindex="-1" role="dialog" id="content">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-tital">Address</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form method="post">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                    <label for="" style="font-size:15px;"><b>Select Address Type </b><span
                                            style="color:red;margin-right:14px">*</span></label>
                                    <div class="row" style="margin-left:-5px;">
                                        <input name="customerName" value="Billing" id="input-firstname"
                                            class="form-control" type="radio" required>&nbsp;Billing Address
                                        &nbsp;&nbsp;&nbsp;
                                        <input name="customerName" value="Shipping" id="input-firstname"
                                            class="form-control" type="radio" required>&nbsp;
                                        Shipping Address
                                    </div>

                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xl12 required">

                                    <fieldset>
                                        <div class="row">
                                            <input type="hidden" name="id" value='<?= $_SESSION['customerid']; ?>'>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">Full Name <span
                                                        class="required-f">*</span></label>
                                                <input name="fullName" value="" id="input-firstname" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">phone <span
                                                        class="required-f">*</span></label>
                                                <input value="" name="number" id="input-lastname" type="tel"
                                                    minlength="12" maxlength="12" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">House no./Building Name <span
                                                        class="required-f">*</span></label>
                                                <input name="home" value="" id="input-email" type="text" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Road name/Area/Colony <span
                                                        class="required-f">*</span></label>
                                                <input name="road" value="" id="input-telephone" type="text" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                <label for="input-company">Pin Code</label>
                                                <input name="pincode" value="" id="input-company" type="number"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-country">Country <span
                                                        class="required-f">*</span></label>
                                                <select name="country_id" class="countries form-control" id="countryId"
                                                    required>
                                                    <option value="">Select Country</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-zone">Region / State <span
                                                        class="required-f">*</span></label>
                                                <select name="zone_id" class="states form-control" id="stateId"
                                                    required>
                                                    <option value="">Select State</option>
                                                </select> </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-address-1">City<span
                                                        class="required-f">*</span></label>
                                                <select name="city" class="cities form-control" id="cityId" required>
                                                    <option value="">Select City</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                <label for="input-postcode">Landmark <span
                                                        class="required-f">*</span></label>
                                                <textarea class="form-control resize-both" rows="3" name="landmark"
                                                    required></textarea>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                <label for="input-company">Order Notes <span
                                                        class="required-f">*</span></label>
                                                <textarea class="form-control resize-both" rows="3" name="notes"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                <button type="submit" name="shipping_address"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade quick-view-popup" id="viewdetailmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <label for="input-firstname">Order - <span class="required-f order"></span></label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                            </div>
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 text-center required">
                                <img src="" class="image rounded-circle " width="100" height="100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-firstname" class="product"></label>
                            </div>
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-email" class="size"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-telephone" class="processing"> </label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-telephone">Are You Want to Cancel Order ? <a
                                        href="auth/code/sadmin/api.php" class="cancelattr">Cancel</a></label>
                                <!-- <button class="btn btn-info-outline">Cancel</button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="billingmodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class=" mb-2">
                            <form method="post" action="api.php">
                                <div id="billingbody">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->

        <div class="modal fade quick-view-popup" id="billingmodalRegister">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <label for="input-firstname">Billing Address <span class="required-f order"></span></label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php
                                    $id=$_SESSION['customerid'];
                                    $sql=mysqli_query($conn,"select * from billing_address where customer_id='$id' and set_default='0'");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                            <div class="col-6">
                                <p><?= $arr['house_building'].' , '.$arr['road_area_colony'].' ,  Near by' .$arr['landmark'].','.$arr['city'].' , '.$arr['state'].' , '.$arr['country'].' , '.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                <p>
                                    <p style="cursor:pointer;display:inline-block;color:black" class="billingmodal"
                                        data-name="billing" data-id='<?= $arr['id'] ?>'>Edit</p> | <a
                                        href="api.php?defaultbilling=<?= $arr['id'] ?>&url=<?= $url ?>">Set
                                        Default</a>
                                </p>
                            </div>
                            <hr>
                            <?php } ?> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade quick-view-popup" id="shippingmodalRegister">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <label for="input-firstname">Shipping Address <span class="required-f order"></span></label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php
                                    $id=$_SESSION['customerid'];
                                    $sql=mysqli_query($conn,"select * from shipping_address where customer_id='$id' and set_default='0'");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                            <div class="col-6">
                                <p><?= $arr['house_building'].' , '.$arr['road_area_colony'].' ,  Near by' .$arr['landmark'].','.$arr['city'].' , '.$arr['state'].' , '.$arr['country'].' , '.$arr['pin_code'] ?>
                                </p>
                                <p><?= $arr['phone']; ?></p>
                                <p>
                                    <p style="cursor:pointer;display:inline-block;color:black" class="billingmodal"
                                        data-name="shipping" data-id='<?= $arr['id'] ?>'>Edit</p> | <a
                                        href="api.php?defaultshipping=<?= $arr['id'] ?>&url=<?= $url ?>">Set
                                        Default</a>
                                </p>
                            </div>
                            <hr>
                            <?php } ?> </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Body Content-->


    <?php include("include/footer.php");?>
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    <script>
        $(document).ready(function () {
            $('.billingmodal').click(function () {
                let billingId = $(this).data('id');
                let billaddname = $(this).data('name');
                let pageurl = <?= $url; ?> ;
                $.ajax({
                    url: 'api.php',
                    type: 'POST',
                    data: {
                        billingId: billingId,
                        billaddname: billaddname,
                        pageurl: pageurl
                    },
                    success: function (data) {
                        $('#billingbody').html(data);
                        $('#shippingmodalRegister').modal('hide');
                        $("#billingmodalRegister").modal('hide');
                        $('#billingmodal').modal('show');
                    }
                });
            });
        });
    </script>

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
        $('.viewdetail').click(function () {
            let id = $(this).data('id');
            let product = $(this).data('product');
            let size = $(this).data('size');
            let image = $(this).data('image');
            let order = $(this).data('order');
            let processing = $(this).data('processing');

            $('.product').html(product);
            $('.size').html(size);
            $('.order').html(order);
            $('.image').attr("src", 'auth/code/sadmin/image/product_image_check/' + image);
            $('.processing').html(processing);
            $('.cancelattr').attr("href", "auth/code/sadmin/api.php?orderidcancel=" + id);
            $('#viewdetailmodal').modal('show');
        });
    </script>
    </div>
</body>

<!-- belle/cart.html   11 Nov 2019 12:47:01 GMT -->

</html>