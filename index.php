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



<!DOCTYPE html>
  <html>
    <head>
      <title>Front End Shopper</title>
      <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    </head>
    <body>
    <h1>Products</h1>
    <?php foreach($plastic as $plastic) : ?>
      <div class="well">
        <h3><?php echo $plastic['product_name']; ?></h3>
        <small>Plastic Rating: <?php echo $plastic['plastic_rating']; ?> ID: <?php echo $plastic['ID']; ?></small>
        <p>Product category:<?php echo $plastic['product_category']?></p>
        </div>
    <?php endforeach; ?>
    </body>
</html>