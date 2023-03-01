<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <link type="text/css" rel="stylesheet" href="style/catalog.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>



    <?php

    include 'ext_php/connect.php';


    $result = $conn->query($sql);

    if (isset($_GET['cart_btn'])) {
        $sku = $_POST['sku'] ?? $_GET['sku'] ?? 'nobody';
        $part_number = isset($_GET['part_number']);
        $item = isset($_GET['item']);
        $list_price = isset($_GET['list_price']);
        $quantity = isset($_GET['quantity']);


        if (isset($quantity)) {


            $sql = "INSERT INTO `cart` (sk1u, part_number, item, list_price, in_cart) VALUES ('$sku', '$part_number', '$item', '$list_price', '$quantity') ON DUPLICATE KEY UPDATE in_cart = in_cart + $quantity";


            echo $sql;
        } else {
            echo 'Hello';
        }
    }





    //      if(isset($_POST['cart_btn'])){
    //         $quantity = $_POST['quantity'];
    //         $sku = isset($_GET['sku']);
    //         $part_number = isset($_GET["part_number"] );
    //         $item = isset($_GET["item"] );
    //         $list_price = isset($_GET["list_price"] );


    //         $sql = "INSERT INTO `cart` (`sku`, `part_number`, `item`, `list_price`, `in_cart`) VALUES ('$sku', '$part_number', '$item', '$list_price', '$quantity');";

    //     echo $sql;




    // }




    // if (isset($_POST['cart_btn'])){
    //     $sql = "INSERT INTO `cart` (`sku`, `item`, `list_price`, `in_cart`) VALUES ('1', '2', '3', '4')";
    //     // $part_number = $_REQUEST['part_number'];
    //     // $item = $_REQUEST['item'];
    //     // $list_price = $_REQUEST['list_price'];
    //     // $quantity = $_POST['quantity'];
    //     // $sql = "INSERT INTO `cart` (`sku`, `item`, `list_price`, `in_cart`) VALUES('$part_number', '$item', '$list_price', '$quantity')";
    //




    // if(isset($_GET['sku'])){
    //     $sku = $_GET['sku'];
    //     $sql = "SELECT * FROM catalog WHERE sku = '$sku'";
    // }
    // if(isset($_GET['part_number'])){
    //     $sku = $_GET['part_number'];
    //     $sql = "SELECT * FROM catalog WHERE part_number = '$part_number'";
    // }
    ?>












    <div class="container">
        <div class="header">
            <div class="logo pt-3">
                <a href="index.php">
                    <img src="images/corvette.png" alt="DRKPARTS-LOGO" id="clogo">
                    <img src="images/DRKParts2.png" alt="DRKPARTS-TITLE" id="tlogo">
                </a>
            </div>

            <div class="languages">
                <!-- LOGIN BUTTON REMOVED USER IS SUPPOSED TO BE LOGGED IN TO VIEW CATALOG ... WIP -->
                <a href="#"><span class="fi fi-gb"></span></a>
                <a href="#"><span class="fi fi-pt"></span></a>
                <a href="#"><span class="fi fi-es"></span></a>
                <a href="#"><span class="fi fi-fr"></span></a>



            </div>
            <a href="cart.php" id="cart_text"><img src="images/cart.png" id="cart_icon">&nbsp;</a>
            <br />

            <form method="get" action="">
                <table id="catalog_table" class="table-striped">
                    <th class="table-head">Code</th>
                    <th class="table-head">Name</th>
                    <th class="table-head">Make</th>
                    <th class="table-head">OEM</th>
                    <th class="table-head">Price</th>
                    <th class="table-head">In Stock</th>
                    <th class="table-head">&nbsp;</th>
                    <th class="table-head">&nbsp;</th>

                    <?php
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>





                        <tr>
                            <td name="part_number"><a href="applications/2715-S40T.php" style="color:#000000" ;><?= preg_replace('/\s+/', '<br>', $row['part_number']); ?> </a></td>
                            <td name="item"><?= $row['item'] ?></td>
                            <td name="model"><?= $row['model'] ?></td>
                            <td name="oem"><?= $row['oem_number'] ?>&nbsp;&nbsp;</td>
                            <td name="list_price">$<?= $row['list_price']; ?></td>
                            <td name="stock"><?= $row['stock']; ?></td>
                            <td><input type="number" class="cart_input" min="0" max="<?= $row['stock']; ?>" name="quantity" value="<?php echo $quantity; ?>"></td>
                            <td><input type="submit" class="order_btn" value="Add to order" name="cart_btn"></td>


                        </tr>






                    <?php
                    }

                    ?>


                </table>
            </form>







            <br />

            <hr class="hrline"><br />
            <div class="footer">
                <div class="copy">
                    <span>&#169; 2022 DRKPARTS, Inc.</span>
                </div>
                <div class="flinks">
                    <a href="#" class="privacy">Privacy Policy &#9900; </a>
                    <a href="#" class="conditions">Terms & Conditions &#9900; </a>
                    <a href="#" class="contact_us">Contact Us</a><br /><br>
                </div>
            </div>

        </div>




        <script src="script/script.js"></script>
</body>

</html>