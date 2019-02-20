<?php
  require('config/db.php');

  // Create Query
  $query = 'SELECT * FROM product';

  // Get ibase_free_result
  $result = mysqli_query($conn, $query);

  //Fetch Data
  $plastic = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //var_dump($plastic);

  //Free Result
  mysqli_free_result($result);

  //Close connection
  mysqli_close($conn);
?>





<!-- HTML BEGINS -->

<!DOCTYPE html>
  <html>
    <head>
      <title>Front End Shopper</title>
      <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">

      <style>
      .thumb{
        border: 3px solid #73AD21;
        max-width:320px;
        height: 370px;
      }
      .photoframe{
        height:200px;
        width:auto;
      }
      </style>


    </head>
    <body>
    <h1>Products</h1>




    <!-- Thumbnails -->


    <?php foreach($plastic as $plastic) : ?>

      <div class="thumb">
        <h3><?php echo $plastic['product_name']; ?></h3>                                                  <!--  /* Title */ -->

        <img class="photoframe" src="<?php echo $plastic['image_link']; ?>"> </br>                                           <!--  /* Image link */    -->
        Price: <?php echo $plastic['price']; ?> Unit Price: <?php echo $plastic['unit_price']; ?></br>    <!--  /* Price */         -->
        Plastic Rating: <?php echo $plastic['plastic_rating']; ?></br>                                    <!--  /* Crunch plastic star rating */ -->
        <!-- <p><small>ID: <?php echo $plastic['ID']; ?></small></p> -->                                          <!--  /* Crunch ID */     -->
        </div>
      </br>

    <?php endforeach; ?>                                                                                  <!--  /* Repeat Printing */            -->


    <!-- End of thumbnails -->



    </body>
</html>
