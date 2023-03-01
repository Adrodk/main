<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wellness! Health & Wellbeing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
    include 'connect.php';
    
    $sql = "SELECT * FROM `database`";
    $result = $conn->query($sql);
    ?>
  
    <div class="container"> 
  <img src="images/Background.png" class="bg_img">
      
       
                <?php
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                
                ?>



                    <figure class="image">
                        <a href="recipes.php"><img src="item_images/<?php echo $row['image']; ?>" class="itemimage"></a>
                    </figure>
                   

              <?php
                }
                ?>


      
     
    </div>

  </body>
</html>