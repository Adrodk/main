
<?php
include 'ext_php/connect.php';

  if(isset($_POST['cart_btn'])){
    
    $quantity = $_POST['quantity'];
    $part_number = isset($_POST["part_number"] ) ? $_POST["part_number"]: '';
    $item = isset($_POST["item"] ) ? $_POST["item"]: '';
    $list_price = isset($_POST["list_price"] ) ? $_POST["list_price"]: '';

    $insert = "INSERT INTO `cart` (`sku`, `item`, `list_price`, `in_cart`) VALUES ('$part_number', '$item', '$list_price', `$quantity` ) ON DUPLICATE KEY UPDATE in_cart = in_cart + $quantity";
    mysql_query($insert) or die(mysql_error()."<br />".$insert);
    echo $sql;

    
}
?>
<a href="catalog.php">home</a>
