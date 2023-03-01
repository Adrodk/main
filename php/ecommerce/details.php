<?php 

include 'connect.php';

if (isset($_REQUEST['quantity'])){
    $sku = $_REQUEST['sku'];
    $quantity = $_REQUEST['quantity'];
    $sql = "INSERT INTO `cart` (`sku`, `in_cart`) VALUES ('$sku', '$quantity' )"
    $db ->query($sql);
    ?> 

    <h3><?= $row['description'] ?></h3>
</div>
<div>
    <form action="details.php">
        Price: $<?= $row['unit_price'] ?><br>
        How many: <input type="number" name="quantity"><br>
        <input type="hidden" name="title" value="<?= $title ?>">
        <button type="submit" name="submit">Add to cart</button>
    </form>
</div>

<?php
}
?>