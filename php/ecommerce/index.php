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

    $my_sql = "SELECT * FROM inventory";
    $result = $db->query($my_sql);
    ?>

   







<table class="table table-striped">
        <thread>
 
            <th><a href="index.php?order=title">Title</a></th>
      
            <th><a href="index.php?order=price">Price</a></th>
            <th><a href="index.php?order=stock">In Stock</a></th>
           
        </thread>

        <?php
        if (isset($_REQUEST['order'])){
            if($_REQUEST['order'] == 'title'){
                $my_sql .= " ORDER BY title";
            }
            if($_REQUEST['order'] == 'price'){
                $my_sql .= " ORDER BY price";
            }
            if($_REQUEST['order'] == 'stock'){
                $my_sql .= " ORDER BY stock";
            }
        }


        // $result =$db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
   ?>


        <tr>
            <td><a href="details.php?title<?= $row['title'] ?>"><?= $row['title'] ?></a></td>
    
            <td><?= $row['unit_price'] ?></td>
            <td><?= $row['in__stock'] ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    
    
    
</body>
</html>
