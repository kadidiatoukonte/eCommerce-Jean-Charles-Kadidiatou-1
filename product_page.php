
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php include("header.php");?>

  <?php
  $products = array(
      array(
          'productName' => 'Victoria Deportivo Pu Contraste',
          'price' => 'A partir de 68 euros',
          'image' => 'img/basket_homme.jpg',
          'availability' => 'Oui',
          'description' => 'Description 1'),

      array(
          'productName' => 'Vans Old Skool W',
          'price' => 'A partir de 74,99 € euros',
          'image' => 'img/basket_femme.jpg',
          'availability' => 'Non',
          'description' => 'Description 2'),

      array(
          'productName' => 'Veja Esplar Small Velcro',
          'price' => 'A partir de 70 euros',
          'image' => 'img/basket_fille.jpg',
          'availability' => 'Oui',
          'description' => 'Description 3'),

      array(
          'productName' => 'Geox J Kommodor B.C J825Pc',
          'price' => 'A partir de 75 euros',
          'image' => 'img/basket_garcon.jpg',
          'availability' => 'Non',
          'description' => 'Description 4')

  );

  // print_r($products);
  // print_r($products[$_GET['index']]['productName']);
  ?>

  <main>
    <div class="container">
      <div class="productImageAndDetails my-5 row col-12 mx-auto">

          <div class="productImage col-12 col-lg-6  mx-auto mb-3">
              <p class="productName my-0 d-lg-none text-center font-weight-bold"><?php echo $products[$_GET['index']]['productName'];?></p>
              <img class="d-block mx-auto h-100" src="<?php echo $products[$_GET['index']]['image'];?>" alt="basket_homme.jpg">
          </div>

          <div class="productDetails col-12 col-lg-6  mx-auto">
              <p class="text-center d-none d-lg-block font-weight-bold mt-2 mb-4"><?php echo $products[$_GET['index']]['productName'];?></p>

              <p class="mx-auto d-flex justify-content-between">
                <label for="color" class="font-weight-bold">Choisissez votre couleur :</label>
                <select name="color" id="color">
                    <option value="black">Noir</option>
                    <option value="red">Rouge</option>
                    <option value="green">Vert</option>
                    <option value="blue">Bleu</option>
                </select>
              </p>

              <p class="mx-auto d-flex justify-content-between">
                <label for="size" class="font-weight-bold">Choisissez votre pointure :</label>
                <select name="size" id="size">
                    <option value="45">45</option>
                    <option value="40">40</option>
                    <option value="35">35</option>
                    <option value="30">30</option>
                </select>
              </p>

              <p><span class="price font-weight-bold">Prix : </span><?php echo $products[$_GET['index']]['price'];?></p>

              <p><span class="availability font-weight-bold">Disponibilité : </span><?php echo $products[$_GET['index']]['availability'];?></p>

              <p class="description text-nowrap">
              <span class="font-weight-bold">Descriptif : </span><?php echo $products[$_GET['index']]['description'];?>
              </p>
        </div>
      </div>
    </div>
  </main>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
