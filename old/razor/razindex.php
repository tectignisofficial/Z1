<?php
session_start();
include("../config.php");
// $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$qss=mysqli_query($conn,"SELECT * FROM `client` WHERE `Client_Code`='35'");
$ress=mysqli_fetch_array($qss);
?>
<form action="pay.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ress['Client_Code']; ?>">
    <!-- <input type="hidden" name="price"> -->
   Name: <input type="text" name="name" value="<?php echo $ress['Firm_Name']; ?>" redonly><br><br>
    Email:<input type="text" name="email" value="<?php echo $ress['Email']; ?>"  redonly><br><br>
    Phone:<input type="text" name="phone" value="<?php echo $ress['Mobile_Number']; ?>"  redonly><br><br>
    Price:<input type="text" name="price"><br><br>
    <button type="submit" name="submit">Pay</button>
</form>
</body>
</html>