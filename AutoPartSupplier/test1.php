<?php


if(isset($_POST['cart_btn'])){


        $sku = isset($_REQUEST['sku']);
        $part_number = isset($_REQUEST['oem']);
        $item = isset($_REQUEST['item']);
        $list_price = isset($_REQUEST['list_price']);
        $quantity = isset($_REQUEST['quantity'])?$_POST['quantity']:'';
        

        $sql = "INSERT INTO `cart` (sku, part_number, item, list_price, in_cart) VALUES ('$sku', '$part_number', '$item', '$list_price', '$quantity') ON DUPLICATE KEY UPDATE in_cart = in_cart + $quantity; ";

        echo $sql;
        
    
    }

    ?>