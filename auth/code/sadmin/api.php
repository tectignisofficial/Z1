<?php 
include('../../../include/config.php');
if(!empty($_POST["attr"])){ 
$attr = $_POST["attr"];
$query = mysqli_query($conn,"SELECT * from product_attribute WHERE main_title ='$attr'"); 
 ?>
 <option disabled selected>Value</option>
   <?php while($row = $query->fetch_assoc()){  ?>
       <option value="<?php echo $row['title'] ?>"><?php echo $row['title']?></option> 
  <?php  } 
}

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
  if($size=='XS'){
    $sql=mysqli_query($conn,"select * from products where name='$productName' AND attribute='$size'");
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock_status'] ?? NULL;
  if($stock==''){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock_status'].' in Stock</p> ';
  }
  }
  else if($size=='S'){
    $sql=mysqli_query($conn,"select * from products where name='$productName' AND attribute='$size'");
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock_status'] ?? NULL;
  if($stock==''){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock_status'].' in Stock</p> ';
  }
  }
  else if($size=='M'){
    $sql=mysqli_query($conn,"select * from products where name='$productName' AND attribute='$size'");
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock_status'] ?? NULL;
  if($stock==''){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock_status'].' in Stock</p> ';
  }
  }
  else if($size=='L'){
    $sql=mysqli_query($conn,"select * from products where name='$productName' AND attribute='$size'");
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock_status'] ?? NULL;
  if($stock==''){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock_status'].' in Stock</p> ';
  }
  }
  else if($size=='XL'){
    $sql=mysqli_query($conn,"select * from products where name='$productName' AND attribute='$size'");
  $arr=mysqli_fetch_array($sql);
  $stock=$arr['stock_status'] ?? NULL;
  if($stock==''){
    echo '<p style="font-size:15px;margin-bottom:6px">Out of Stock</p> ';
  }else{
  echo '<p style="font-size:15px;margin-bottom:6px"> <i class="fa fa-check" style="font-size:25px"aria-hidden="true"> </i>'.$arr['stock_status'].' in Stock</p> ';
  }
  }

}

if(isset($_POST['myselect'])){
  $sql=mysqli_query($conn,"select price from products");
  $arr=mysqli_fetch_array($sql);
  $digit=$arr['price'];
  if($currency=="USD"){
    $output = $digit * 51.52;
    echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
}else if($currency=="GBP"){
    $output = $digit * 63.62;
    echo"<center><label class='text-success' style='font-size:25px;'>€".$output."</label></center>";
}else if($currency=="INR"){
    $output = $digit;
    echo"<center><label class='text-success' style='font-size:25px;'>₱".$output."</label></center>";
}else if($currency=="CAD"){
    $output = $digit * 0.47;
    echo"<center><label class='text-success' style='font-size:25px;'>¥".$output."</label></center>";
}else if($currency=="AUD"){
    $output = $digit;
    echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
}
}
?>