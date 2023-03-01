<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link type="text/css" rel="stylesheet" href="style/cart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>



    <?php
    include 'ext_php/connect.php';
    
    $sql = "SELECT * FROM cart";
    $result = $conn->query($sql);
   
  
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
                <!-- LOGIN BUTTON REMOVED USER IS SUPPOSED TO BE LOGGED IN TO VIEW CATALOG/CART ... WIP -->
                <a href="#"><span class="fi fi-gb"></span></a>
                <a href="#"><span class="fi fi-pt"></span></a>
                <a href="#"><span class="fi fi-es"></span></a>
                <a href="#"><span class="fi fi-fr"></span></a>
             
            </div><br />

            <h5 class="cart_title">Your Cart</h5>
            <hr class="hr_line_cart">
            <br />
            <p class="cart_text">Items in order:&nbsp;&nbsp;&nbsp;&nbsp; 11 </p>  
            <!-- This isn't supposed to be like this  -->
            <p class="cart_text">Order price:&nbsp;&nbsp;&nbsp;&nbsp;$</p>



            <table id="catalog_table" class="table-striped">
                <th class="table_head">Code</th>
                <th class="table_head">Amount</th>
                <th class="table_head">Price</th>
                <th class="table_head">Total</th>
                <th class="table_head">Name</th>
                <th class="table_head">Delete</th>
                <?php
                
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                
                    
            
                ?>
                <tr>
                <td><?= $row['part_number']; ?> </td>
                <td><?= $row['in_cart']; ?></td>
                <td><?= $row['list_price'] ?></td>
                <td>$<?= $row['list_price'] * $row['in_cart']; ?> </td>
              
                <td><?= $row['item'] ?></td>
                <td><button name="delete" style="opacity:0.5; border:2px solid #ffffff";><a href="catalog.php">x</a></button></td>
                
              
               
        
                </tr>




            <?php
        }
        ?>
            </table> 






            <br />
          
            <hr class="hrline"><br/>
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

