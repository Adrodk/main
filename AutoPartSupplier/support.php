<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link type="text/css" rel="stylesheet" href="style/support.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
    include 'ext_php/connect.php';
    $sql = "SELECT * FROM sales_team";
    $result = $conn->query($sql);
    ?>


<a href="catalog.php" class="catalog_anchor"><button id="catalog_btn">CATALOG</button></a>
    <div class="container">
        <div class="header">
            <div class="logo pt-3">
                <a href="index.php">
                    <img src="images/corvette.png" alt="DRKPARTS-LOGO" id="clogo">
                    <img src="images/DRKParts2.png" alt="DRKPARTS-TITLE" id="tlogo">
                </a>
            </div>
          
            <div class="languages">
                <a href="registration.php" class="login_btn"><span class="login mr-5 mb-4">Login</span></a><br />
                <a href="#"><span class="fi fi-gb"></span></a>
                <a href="#"><span class="fi fi-pt"></span></a>
                <a href="#"><span class="fi fi-es"></span></a>
                <a href="#"><span class="fi fi-fr"></span></a>
             
            </div><br />


            <nav class="navbar navbar-expand-sm">
                <form class="form-inline my-2 my-lg-0">
                    <input class="search mr-sm-2 small" type="search" placeholder="&nbsp;">
                    <button class="searchbtn btn my-3 my-sm-0 btn-sm" type="submit"><img src="stock images/search.svg" ></button>
                  </form>
               
            
              
                <div class="collapse navbar-collapse" id="">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="parts_acc.php">PARTS & ACCESORIES </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="services.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="support.php">SUPPORT</a>
                    </li>
                  </ul>

        
                </div>
            </nav>
            <br />
            <div class="sales_contact">
              <h4 class="sales_head">DRKPARTS Sales Management Team</h4>
              <hr style="background-color:#b3d9ff">
              <div class="row">
                <div class="col">
                  
                  <h6>Sales Hours of Operation</h6>
                  <hr>
                  <p>Monday&nbsp;-&nbsp;Friday:&nbsp;&nbsp;&nbsp;7:30am <span class="timezone">ET</span>&nbsp;-&nbsp;6:00pm&nbsp;<span class="timezone">ET</span></p>
                  <p>Saturday:&nbsp;&nbsp;&nbsp;8:00am&nbsp;<span class="timezone">ET</span>&nbsp;-&nbsp;4:00pm&nbsp;<span class="timezone">ET</span></p>
                  

                </div>
                <div class="col">
                
                  <h6>Primary Phone Number</h6>
                  <hr>
                  <p>Toll free:&nbsp;&nbsp;&nbsp;888-888-8888</p>
                  <p>&nbsp;</p>
                  
                  

                </div>
              </div>
              <h6>Sales Contact<span id="floridatz"></span></h6>
              
              <hr style="background-color:#b3d9ff">

              
             
            
          

            <table class="table-striped">
              <th class="table_head">Name</th>
              <th class="table_head">Title</th>
              <th class="table_head">Region</th>
              <th class="table_head">Region Detail</th>
              <th class="table_head">Ext</th>
            
          
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
            ?>

            <tr>

           
              <td><?= $row['name']; ?></a>
              <td><?= $row['title']; ?>
              <td><?= $row['region']; ?>
              <td><?= $row['region_detail']; ?>
              <td><?= $row['ext']; ?>
      
           
            

            </tr>

            <?php
            }
            ?>
            </table>

            <hr style="background-color:#b3d9ff">
            <img src="images/time_zone_map.gif" class="map">

            </div>



            <br />
          
            <hr class="hrline"><br/>
            <div class="footer">
                <div class="copy">
                    <span>&#169; 2022 DRKPARTS, Inc.</span>
                </div>
                <div class="flinks">
                    <a href="#" class="privacy">Privacy Policy &#9900; </a> 
                    <a href="#" class="conditions">Terms & Conditions &#9900; </a>
                    <a href="#" class=contact_us">Contact Us</a><br /><br>
                </div>
            </div>

    </div>
    

    <script src="script/script.js"></script>
    
</body>
</html>

