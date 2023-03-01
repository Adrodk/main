<!-- There has to be an easier way than doing an individual file for every part -->
<!-- How to fetch the correct table -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link type="text/css" rel="stylesheet" href="../style/services.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


<?php
    include '../ext_php/connect.php';
    $sql = "SELECT * FROM catalog WHERE part_number = '2715-S40T'";
    $result = $conn->query($sql);
?>












    <div class="container">
        <div class="header">
            <div class="logo pt-3">
                <a href="../index.php">
                    <img src="../images/corvette.png" alt="DRKPARTS-LOGO" id="clogo">
                    <img src="../images/DRKParts2.png" alt="DRKPARTS-TITLE" id="tlogo">
                </a>
            </div>
         
            <div class="languages">
              
                <a href="#"><span class="fi fi-gb"></span></a>
                <a href="#"><span class="fi fi-pt"></span></a>
                <a href="#"><span class="fi fi-es"></span></a>
                <a href="#"><span class="fi fi-fr"></span></a>
             
            </div><br /><br /><br />


            <label style="font-weight:600">Applications</label>
            <ul>
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
            ?>
         

                <li><?= preg_replace('/\n/', '<li>', $row['applications']); ?></li>

            <?php
            }
            ?>

            </ul>



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

