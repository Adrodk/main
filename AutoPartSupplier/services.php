<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link type="text/css" rel="stylesheet" href="style/services.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>






  <?php
  include 'ext_php/connect.php';
  $sql = "SELECT * FROM catalog";
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
            <img src="images/dd_banner.gif" class="service_banner">

            <div class="text_container">
              <h6>Multiple Same-Day Parts Delivery Service</h6>
              <p>Our vast company-owned fleet of vehicles and drivers provide multiple same-day deliveries to most major metropolitan areas. This timely and consistent service has resulted in our customers increasing technician productivity while decreasing their inventory levels. The benefit of this personal service is increased revenue and decreased expenditures.</p>
              <br><br />
          
              <p class="img_p">On the leading edge of technology, our Electronic Delivery Verification System assures you prompt and accurate order fulfillment. When combined with the best overnight freight service, you can count on timely and dependable delivery of automotive products to virtually every address coast to coast.</p>
              
              <img src="images/dd_car.gif" class="img_car">

             <br />
             <ul>
                <li>Paperless delivery</li>
                <li>Increased order accuracy</li>
                <li>Provide estimated delivery times</li>
                <li>Digitally store proof of delivery</li>
                <li>Real-time Account Receivable updates</li>
              </ul>
             <h6>Nationwide Overnight Service</h6>
             <p>In addition to our own multiple same-day delivery service, WORLDPAC provides dependable and consistent overnight delivery to every address in North America.</p>
             <img src="images/mapdd.gif" class="img_map">
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
                    <a href="#" class="contact_us">Contact Us</a><br /><br>
                </div>
            </div>

    </div>
    

    <script src="script/script.js"></script>
</body>
</html>

