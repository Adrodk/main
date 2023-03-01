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
    include 'nav.inc.php';
    include 'connect.php';
    ?>
    <?php

    $my_sql = "SELECT
    inventory.sku, inventory.title, inventory.unit_price, cart.in_cart, inventory.unit_price * cart.in_cart AS 'subtotal'
   FROM
    cart
    LEFT JOIN inventory ON (
      cart.sku = inventory.sku
    )";
    $result = $db->query($my_sql);
    ?>

   







<table class="table table-striped">
        <thread>
 
            <th>Item</th>
      
            <th>Price</th>
            <th>In Cart</th>
            <th>Subtotal</th>
           
        </thread>

        
        <?php
    

        // $result =$db->query($sql);
        $total = 0;
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $total = $total + $row['subtotal'];
   ?>


        <tr>
            
        
            <td><?= $row['title'] ?></td>
    
            <td>$<?= $row['unit_price'] ?></td>
            <td><?= $row['in_cart'] ?></td>
            <td>
                $<?= 
                
                
                $sub = $row['in_cart'] * $row['unit_price'];
                 
                ?>
            </td>
            
            
        </tr>
        
       
        <?php 
        }
        ?>
        
       
         <tr>
            <td style="font-weight:800;">TOTAL</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="border:2px solid black">$<?=number_format($total, 2); ?> </td>
        </tr>
        
    </table>
    
    
    
</body>
</html>