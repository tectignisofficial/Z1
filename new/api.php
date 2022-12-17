<?php
session_start();
include('include/config.php');
if(isset($_POST['billingId'])){
    echo '<input type="hidden" value="'.$_POST['pageurl'].'" name="url">';
    $name=$_POST['billaddname'];
    if($_POST['billaddname'] == 'billing'){
    $sql=mysqli_query($conn,"select * from billing_address where id='".$_POST['billingId']."'");
    $arr=mysqli_fetch_array($sql);
    echo '
    <div style="display:flex;margin-bottom:30px;"><h1 class="mb-1" style="width:95%">Update Billing Address</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>

<div class="form-group col-md-12 col-lg-12 col-xl12 required">
        <div class="row">
            <input type="hidden" name="id" value='.$arr['id'].'>
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-firstname">Full Name <span
                        class="required-f">*</span></label>
                <input name="fullName" value="'.$arr['name'].'" id="input-firstname" type="text"
                    required>
            </div>
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-lastname">phone <span
                        class="required-f">*</span></label>
                <input value="'.$arr['phone'].'" name="number" id="input-lastname" type="tel"
                    minlength="12" maxlength="12" required>
            </div>email
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-email">House no./Building Name <span
                        class="required-f">*</span></label>
                <input name="home" value="'.$arr['house_building'].'" id="input-email" type="text" required>
            </div>
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-telephone">Road name/Area/Colony <span
                        class="required-f">*</span></label>
                <input name="road" value="'.$arr['road_area_colony'].'" id="input-telephone" type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6 col-xl-6">
                <label for="input-company">Pin Code</label>
                <input name="pincode" value="'.$arr['pin_code'].'" id="input-company" type="number"
                    required>
            </div>
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-country">Country <span
                        class="required-f">*</span></label>
                        <input type="text" name="country_id" class="countries form-control" id="countryId" required value="'.$arr['country'].'">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-zone">Region / State <span
                        class="required-f">*</span></label>
                        <input type="text" name="zone_id" class="states form-control" id="stateId" required value="'.$arr['state'].'">
                 </div>
            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                <label for="input-address-1">City<span
                        class="required-f">*</span></label>
                        <input type="text" name="city" class="cities form-control" id="cityId" required value="'.$arr['city'].'">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                <label for="input-postcode">Landmark <span
                        class="required-f">*</span></label>
                <textarea class="form-control resize-both" rows="3" name="landmark"
                    required>'.$arr['landmark'].'</textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                <label for="input-company">Order Notes <span
                        class="required-f">*</span></label>
                <textarea class="form-control resize-both" rows="3" name="notes"
                    required>'.$arr['order_note'].'</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                <button type="submit" name="billing_address"
                    class="btn btn-primary">Submit</button>
            </div>
        </div>
</div>
    
    ';
    }
    else if($_POST['billaddname'] == 'shipping'){
        $sql=mysqli_query($conn,"select * from shipping_address where id='".$_POST['billingId']."'");
        $arr=mysqli_fetch_array($sql);
        echo '
        <div style="display:flex;margin-bottom:30px;"><h1 class="mb-1" style="width:95%">Update Shipping Address</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>

            <div class="form-group col-md-12 col-lg-12 col-xl12 required">
            <div class="row">
                <input type="hidden" name="id" value='.$arr['id'].'>
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-firstname">Full Name <span
                            class="required-f">*</span></label>
                    <input name="fullName" value="'.$arr['name'].'" id="input-firstname" type="text"
                        required>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-lastname">phone <span
                            class="required-f">*</span></label>
                    <input value="'.$arr['phone'].'" name="number" id="input-lastname" type="tel"
                        minlength="12" maxlength="12" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-email">House no./Building Name <span
                            class="required-f">*</span></label>
                    <input name="home" value="'.$arr['house_building'].'" id="input-email" type="text" required>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-telephone">Road name/Area/Colony <span
                            class="required-f">*</span></label>
                    <input name="road" value="'.$arr['road_area_colony'].'" id="input-telephone" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                    <label for="input-company">Pin Code</label>
                    <input name="pincode" value="'.$arr['pin_code'].'" id="input-company" type="number"
                        required>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-country">Country <span
                            class="required-f">*</span></label>
                            <input type="text" name="country_id" class="countries form-control" id="countryId" required value="'.$arr['country'].'">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-zone">Region / State <span
                            class="required-f">*</span></label>
                            <input type="text" name="zone_id" class="states form-control" id="stateId" required value="'.$arr['state'].'">
                     </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                    <label for="input-address-1">City<span
                            class="required-f">*</span></label>
                            <input type="text" name="city" class="cities form-control" id="cityId" required value="'.$arr['city'].'">
                </div>
    
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                    <label for="input-postcode">Landmark <span
                            class="required-f">*</span></label>
                    <textarea class="form-control resize-both" rows="3" name="landmark"
                        required>'.$arr['landmark'].'</textarea>
                </div>
            </div>
    
            <div class="row">
                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                    <label for="input-company">Order Notes <span
                            class="required-f">*</span></label>
                    <textarea class="form-control resize-both" rows="3" name="notes"
                        required>'.$arr['order_note'].'</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                    <button type="submit" name="shipping_address"
                        class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>        
        ';
        }
  }
  
  if(isset($_POST['shipping_address'])){
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
        $url=$_POST['url'];

        $sql=mysqli_query($conn,"UPDATE `shipping_address` SET `name`='$fullName',`phone`='$phone',`house_building`='$home',`country`='$country_id',`state`='$zone_id',`city`='$city',`road_area_colony`='$road',`pin_code`='$pincode',`landmark`='$landmark',`order_note`='$notes' WHERE id='$id'");
        if($sql==1){
            echo '<script>alert("Successfully Updated");window.location.href="'.$url.'";</script>';
        }
  }

  if(isset($_POST['billing_address'])){
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

    $sql=mysqli_query($conn,"UPDATE `billing_address` SET `name`='$fullName',`phone`='$phone',`house_building`='$home',`country`='$country_id',`state`='$zone_id',`city`='$city',`road_area_colony`='$road',`pin_code`='$pincode',`landmark`='$landmark',`order_note`='$notes' WHERE id='$id'");
    if($sql==1){
        echo '<script>alert("Successfully Updated");window.location.href="'.$url.'";</script>';
    }
}

if(isset($_GET['defaultbilling'])){
    $defaultbilling=$_GET['defaultbilling'];
    $url=$_GET['url'];
    $id=$_SESSION['customerid'];
    $sql=mysqli_query($conn,"select * from billing_address where set_default='1' and customer_id='$id'");
    if(mysqli_num_rows($sql)>0){
        $query=mysqli_query($conn,"UPDATE `billing_address` SET `set_default`='0' WHERE customer_id='$id'");
        if($query==1){
            $set=mysqli_query($conn,"UPDATE `billing_address` SET `set_default`='1' WHERE id='$defaultbilling'");
        }
    }
    header('location:'.$url);

}

if(isset($_GET['defaultshipping'])){
    $defaultshipping=$_GET['defaultshipping'];
    $url=$_GET['url'];
    $id=$_SESSION['customerid'];
    $sql=mysqli_query($conn,"select * from shipping_address where set_default='1' and customer_id='$id'");
    if(mysqli_num_rows($sql)>0){
        $query=mysqli_query($conn,"UPDATE `shipping_address` SET `set_default`='0' WHERE customer_id='$id'");
        if($query==1){
            $set=mysqli_query($conn,"UPDATE `shipping_address` SET `set_default`='1' WHERE id='$defaultshipping'");
        }
    }
    header('location:'.$url);
}

if(isset($_POST['gst'])){
    $id=$_POST['id'];
    $gst=$_POST['gst'];
    $checksql=mysqli_query($conn,"select * from shipping_address where customer_id='$id'");
    $arr=mysqli_fetch_array($checksql);
    if($arr['customer_id']==$id){
        $sql=mysqli_query($conn,"UPDATE `gst` SET `gstno`='$gst' WHERE customer_id='$id'");
    }
    else{
        $sql=mysqli_query($conn,"INSERT INTO `gst`(`gstno`, `customer_id`) VALUES ('$gst','$id')"); 
    }
}

if(isset($_POST['bulk_order'])){
    $first_name=$_POST['first_name'];
    $company_name=$_POST['company_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $Address=$_POST['Address'];
    $street_address=$_POST['street_address'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $enquiry=$_POST['enquiry'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d h:i');

    $sql=mysqli_query($conn,"INSERT INTO `bulk_order`(`name`, `company_name`, `email`, `phone`, `address`, `street_address`, `city`, `zip`,`state`, `country`, `enquiry_product`, `cur_date`) VALUES ('$first_name','$company_name','$email','$phone','$Address','$street_address','$city','$zip','$state','$country','$enquiry','$date')");

    if($sql==1){
        header('location:bulkorder.php');
    }
}
?>