<?php
  require('config/config.php');
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





<!-- HTML BEGINS from
<body> -->

      <div class="container">
        <h1>Products</h1>




        <!-- Thumbnails -->
        <?php include('inc/header.php'); ?>
        <?php foreach($plastic as $plastic) : ?>

          <div class="thumb">
            <h3><?php echo $plastic['product_name']; ?></h3>                                                  <!--  /* Title */ -->

            <img class="photoframe" src="<?php echo $plastic['image_link']; ?>"> </br>                                           <!--  /* Image link */    -->
            Price: <?php echo $plastic['price']; ?> Unit Price: <?php echo $plastic['unit_price']; ?></br>    <!--  /* Price */         -->
            Plastic Rating: <?php echo $plastic['plastic_rating']; ?></br>                                    <!--  /* Crunch plastic star rating */ -->
            <!-- <p><small>ID: <?php echo $plastic['ID']; ?></small></p> -->
            <a class="btn btn-default" href="http://localhost/phpbox/product.php?id=<?php echo $plastic['id']; ?>">Read More</a>   <!-- ** TO DO ** Compress link with config.php -->
                                                  <!--  /* Crunch ID */     -->
          </div>
          </br>
        <?php endforeach; ?>
    <!--  /* Repeat Printing */            -->
    </div>
    <!-- End of thumbnails -->
    <!-- </body -->
    <?php include('inc/footer.php'); ?>
