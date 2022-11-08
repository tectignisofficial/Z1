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
?>