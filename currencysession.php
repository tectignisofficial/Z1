<?php
if(isset($_POST['myselect'])){
    $currency=$_POST['myselect'];
    $sql=mysqli_query($conn,"select * from currency where currency_name='$currency'");
    $arr=mysqli_fetch_array($sql);
    $digit=$arr['currency_rate'];
    $curr_name=$arr['currency_icon'];
    $_SESSION['myselect']=$currency;
      $_SESSION['USD']=$digit;
      $_SESSION['icon']=$curr_name;

      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
      $url = "https://";   
 else  
      $url = "http://";   
 // Append the host(domain name, ip) to the URL.   
 $url.= $_SERVER['HTTP_HOST'];   
 
 // Append the requested resource location to the URL   
 $url.= $_SERVER['REQUEST_URI'];    
  //  header('location:'.$CurPageURL);
   echo "<script>window.location.href='".$url."'</script>";
//  echo $url;  
  }
 
  
?>