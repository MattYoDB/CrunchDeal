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
meta charset="utf-8">
<title>Super Shopper</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
  <?php foreach($plastic as $plastic) : ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Super Shopper<img src="s.png" width="40px" height="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="#">About crunch</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="#">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col-md-3-col-sm-6">
      <div class="product-grid">
        <div class="product-image">
          <a href="#">
<div class="main">
    <h2>Bananas</h2>
            <img class="pic-1" src="fresh2.jpg">
            <img class="pic-2" src="fresh.jpg">
          </a>
          <span class="product-trend-label">New</span>
          <ul class="social">
            <li><a href="#" data-tip = "Add to cart"><i class="fas fa-cart-plus"></i></a></li>
            <li><a href="#" data-tip = "compare"><i class="fas fa-compress"></i></a></li>
            <li><a href="#" data-tip = "share"><i class="fas fa-share-alt"></i></a></li>

        </div>
      </div>
      <dir class="product-content">
        <h3 class="title"><a href="#"> Bananas</a></h3>
        <div class="price">$4</div>
        <div class="unit price">unit price : $44/100g</div>
        Plastic Rating: <?php echo $plastic['plastic_rating']; ?></br>
    </div>
  </div>
</div>
<?php foreach
<div class="col-md-3-col-sm-6">
      <div class="product-grid">
        <div class="product-image">
          <a href="#">
            <div class="main">
    <h2>chewing gum</h2>
              <img class="pic-3" src="mentos.jpg">
          </a>
          <span class="product-trend-label">hot  </span>
          <ul class="social">
            <li><a href="#" data-tip = "Add to cart"><i class="fas fa-cart-plus"></i></a></li>
            <li><a href="#" data-tip = "compare"><i class="fas fa-compress"></i></a></li>
            <li><a href="#" data-tip = "share"><i class="fas fa-share-alt"></i></a></li>

        </div>
      </div>
      <dir class="product-content">
        <h3 class="title"><a href="#"> chewing gum </a></h3>
        <div class="price">$4</div>
        <div class="unit price">unit price : </span>$44/100g</div>
    </div>
  </div>
</div>
  <?php endforeach; ?>
</body>
<footer>
  <p>&copy;Copyright 2019 by crunch developers All Right Reserved   ////////.

</html>
