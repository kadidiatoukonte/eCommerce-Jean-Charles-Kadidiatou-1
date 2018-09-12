<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<?php include("header.php");?>

<?php include("products_array.php");?>

<main>

  <h2 class="text-center h4 mt-4">Sélection de la semaine</h2>

  <div class="row col-12 mx-auto d-flex justify-content-around">

      <?php
      foreach ($products as $key => $value) {
      ?>

      <div class="basketCard mt-3 border border-dark col-12 col-md-6 col-lg-3">
        <a href="product_page.php?index=<?php echo $key; ?>">
          <p class="cardTitle text-center pt-2 blackText"><?php echo $value['productName']; ?></p>
          <img class="cardImg w-100" src=<?php echo $value['image'];?> alt="basket_homme.jpg">
          <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText"><?php echo $value['price'];?></p>
        </a>
      </div>

      <?php
      }
      ?>

  </div>

</main>

<?php include("footer.php");?>

<?php include("scripts.php");?>

</body>

</html>
