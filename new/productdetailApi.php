<?php
session_start();
include('include/config.php');
$seo_title=$_GET['name'];
$sql=mysqli_query($conn,"select *,products.name from products inner join stock on products.name=stock.product_name where products.seo_title='$seo_title'");
$arr=mysqli_fetch_array($sql);
$productName=$arr['name'];
$accessories=$arr['categories'] ?? null;
$sizefile=$arr['sizefile'] ?? null;
$video=$arr['video'] ?? null;

if(isset($_POST['addtocart'])){
$quantity=$_POST['quantity'];
$productname=$_POST['productname'];
$price=$_POST['price'];
if(!isset($_POST['option1'])){
    echo "<script>alert('please select size');</script>";
}
else{
    $size=$_POST['option1'];
    $qua=$_POST['quantity'];
    $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
    $arr=mysqli_fetch_array($sql);
    $stock=$arr['stock'] ?? NULL;

    if($qua > $stock){
        echo "<script>alert('Only ".$stock." or less quantities allowed');</script>";
    }else{
if(isset($_SESSION['shopping_cart'])){
   
$item_array_id=array_column($_SESSION['shopping_cart'], "name");
if(!in_array($_POST['option1'],$item_array_id)){
    $count=count($_SESSION['shopping_cart']);
    $item_arr=array(
        'itemid'   => $_POST['productid'],
        'name'     => $productName,
        'productName' => $seo_title,
        'quantity' => $_POST['quantity'],
        'price'    => $_POST['price'],
        'option1'  => $_POST['option1'],
        'image'    => $_POST['image']
    );
    $_SESSION['shopping_cart'][$count] = $item_arr;
    header('location:'.$seo_title);
}
else{
    echo "<script>alert('already Added');</script>";
    header('location:'.$seo_title);
}
}else{
    $item_arr=array(
        'itemid'   => $_POST['productid'],
        'name'     => $productName,
        'productName' => $seo_title,
        'quantity' => $_POST['quantity'],
        'price'    => $_POST['price'],
        'option1'  => $_POST['option1'],
        'image'    => $_POST['image']
    );
    $_SESSION['shopping_cart'][0] = $item_arr;
}
    }
}
}

if(isset($_POST['checkout'])){
    if(!isset($_SESSION['customerid'])){
        header('location:../login.php');
    }
    else{
        if(!isset($_POST['option1'])){
            echo "<script>alert('please select size');</script>";
        }
        else{
            
            $size=$_POST['option1'];
            $qua=$_POST['quantity'];
            $sql=mysqli_query($conn,"select * from stock where product_name='$productName' AND value='$size'");
            $arr=mysqli_fetch_array($sql);
            $stock=$arr['stock'] ?? NULL;
            if($qua > $stock){
                echo "<script>alert('Only ".$stock." or less quantities allowed');</script>";
            }else{
        
        $id=$_SESSION['customerid'];
        $sql=mysqli_query($conn,"select * from customers where id='$id'");
        $fetchsql=mysqli_fetch_array($sql);
        $_SESSION['name']=$fetchsql['name'];
        $_SESSION['email']=$fetchsql['email'];
        $_SESSION['phone']=$fetchsql['phone'];
        $_SESSION['total']=$_POST['price1'];
        $_SESSION['quantity']=$_POST['quantity'];
        $_SESSION['option1']=$_POST['option1'];
        $_SESSION['productname']=$_POST['productname'];
        $_SESSION['image']=$_POST['image'];
        header('location:../checkout.php');
        // header('location:razor/pay.php');
            }
}
    }
}

if(isset($_POST['review'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $rating=$_POST['rating'];
    $title=$_POST['title'];
    $review=$_POST['review'];
    $body=$_POST['body'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d-m-y h:i:s');

    $sql=mysqli_query($conn,"INSERT INTO `product_reviews`(`name`, `email`, `rating`, `review_title`, `body_review`, `status`, `cur_date`) VALUES ('$name','$email','$rating','$title','$body','1','$date')");
}

$sql=mysqli_query($conn,"select * from products where name='$productName'");
$arr=mysqli_fetch_array($sql);