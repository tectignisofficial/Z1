<?php 
include('../../../include/config.php');
// if(!empty($_POST["attr"])){ 
// $attr = $_POST["attr"];
// $query = mysqli_query($conn,"SELECT * from product_attribute WHERE main_title ='$attr'"); 
// \
// }

if(isset($_GET['did'])){
  $did=$_GET['did'];
  $sql=mysqli_query($conn,"DELETE from product_attribute where id='$did'");
  if($sql==1){
    header('location:productattributes.php');
  }
}

if(isset($_POST['size'])){
  $size=$_POST['size'];
  $productName=$_POST['productName'];
    $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
    $count=mysqli_num_rows($sql);
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock'] ?? NULL;
  if($count==$size){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock'].' in Stock</p> ';
  }

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
?>