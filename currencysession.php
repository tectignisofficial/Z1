<?php
if(isset($_POST['myselect'])){
    $currency=$_POST['myselect'];
    $sql=mysqli_query($conn,"select * from currency where currency_name='$currency'");
    $arr=mysqli_fetch_array($sql);
    $digit=$arr['currency_rate'];
    $curr_name=$arr['currency_icon'];
      $_SESSION['USD']=$digit;
      $_SESSION['icon']=$curr_name;
  }
  
?>