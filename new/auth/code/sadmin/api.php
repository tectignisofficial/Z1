<?php 
include('../../../include/config.php');

if(isset($_POST['val'])){
  $val=$_POST['val'];
  $sql=mysqli_query($conn,"SELECT *,orders.id as oid,stock.value as size,products.name as pname,shipping_address.name as oname,orders.order_status as orstatus FROM orders inner join shipping_address on shipping_address.id=orders.address_id inner join products on orders.product=products.name inner join stock on stock.value=orders.size where orders.id='$val'");
  $arr=mysqli_fetch_array($sql);
  echo '<div class="text-center mb-2">
  <h1 class="mb-1">Edit Orders</h1>
</div>
<form id="editUserForm" method="post" class="row gy-1 pt-75">
  <div class="col-6 col-md-6">
      <p><b>Order No:</b> '.$arr['order_no'].'</p>
  </div>
  <div class="col-6 col-md-6">
      <p><b>Order Date:</b> '.$arr['order_date'].'</p>
  </div>
  <div class="col-6 col-md-6">
      <p><b>Product Name:</b> '.$arr['pname'].'</p>
  </div>
  <div class="col-6 col-md-6">
      <p><b>Size:</b> '.$arr['size'].'</p>
  </div>
  <div class="col-12 col-md-12">
      <p><b>Price:</b> <i class="fa fa-inr"> </i> '.$arr['price'].'</p>
  </div>
  <div class="col-6 col-md-6">
      <p><b>Payment Status</b></p>
  </div>
  <div class="col-6 col-md-6">
  <select class="form-control" name="paymentstatus">
  <option value="Completed">Completed</option>
  <option value="Pending">Pending</option>
  <option value="Refunded">Refunded</option>
  </select>
</div>
<input type="hidden" name="orderid" value="'.$arr['oid'].'">
<div class="col-6 col-md-6">
      <p><b>Order Status</b></p>
  </div>
  <div class="col-6 col-md-6">
  <select class="form-control" name="orderstatus" onchange="get(this.value)">
  <option value="Confirm">Confirm</option>
  <option value="Processing">Processing</option>
  <option value="Courier" class="courier">Courier</option>
  <option value="Delivered">Delivered</option>
  <option value="Cancelled">Cancelled</option>
  </select>
</div>

<div class="col-6 col-md-6 hidecourier">
      <p><b>Courier Name</b></p>
  </div>
  <div class="col-6 col-md-6 hidecourier">
  <select class="form-control" name="dlh">
  <option value="DHL">DHL</option>
  <option value="Fedex">Fedex</option>
 
  </select>
</div>
<div class="col-6 col-md-6 hidecourier">
      <p><b>Tracking Id</b></p>
  </div>
  <div class="col-6 col-md-6 hidecourier">
 <input type="number" name="trans" class="form-control">

</div>
  <div class="col-12 text-center mt-2 pt-50">
      <button type="submit" name="updateorder" id="updateorder" class="btn btn-primary me-1">Update</button>
      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
          Discard
      </button>
  </div>
  
</form>

';
}

if(isset($_GET['did'])){
  $did=$_GET['did'];
  $sql=mysqli_query($conn,"DELETE from product_attribute where id='$did'");
  if($sql==1){
    header('location:productattributes.php');
  }
  else{
    echo '<script>alert("something Went Wrong");</script>';
  }
}

if(isset($_POST['size'])){
  $size=$_POST['size'];
  $productName=$_POST['productName'];
    $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
    $count=mysqli_num_rows($sql);
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock'] ?? NULL;
  if($stock==0){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock'].' in Stock</p> 
  
  
  ';
  }

  echo '
  
  ';

}

if(isset($_POST['attr'])){
  $attr = $_POST["attr"];
  $query = mysqli_query($conn,"SELECT * from product_attribute WHERE main_title ='$attr'");
  while($arr=mysqli_fetch_array($query)){
  echo '
  <div class="row mt-2">
  <div class="col-3">
  <label class="form-label" for="csname">Value</label>
  <input type="text" class="form-control" name="attrnal[]" value="'.$arr['title'].'" readonly>
</div>
<div class="col-3">
  <label class="form-label" for="csname">Stock</label>
  <input type="text" class="form-control" name="stock[]" value="">
</div>

</div>';
  }
}

if(isset($_GET['orderidcancel'])){
  $orderidcancel=$_GET['orderidcancel'];
  $sql=mysqli_query($conn,"update orders set order_status='Cancelled' where id='$orderidcancel'");
  header("location:../../../myaccount.php");
}
?>