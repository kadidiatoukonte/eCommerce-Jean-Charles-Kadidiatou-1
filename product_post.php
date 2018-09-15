<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=site_eCommerce;charset=utf8', 'root', 'Strawberry591peaches', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$price = addslashes($_POST['price']);
$availability = addslashes($_POST['availability']);


if (isset($name) AND !empty($name) AND isset($description) AND !empty($description) AND isset($price) AND !empty($price) AND isset($availability) AND !empty($availability)) {

  $req = $bdd->prepare('INSERT INTO infos_articles (name, price, availability, description) VALUES(:name, :price, :availability, :description)');
  $req->execute(array(
      'name' => $name,
      'price' => $price,
      'availability' => $availability,
      'description' => $description
      ));
}

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
  if ($_FILES['image']['size'] <= 1000000){

      // Testons si l'extension est autorisée
      $infosimage = pathinfo($_FILES['image']['name']);//On récupère l'extension du fichier dans une variable
      $extension_upload = $infosimage['extension'];
      $extensions_autorisees = array('jpg');//Création d'un tableau avec les extensions q'uon autorise (la 1 seule)

      if (in_array($extension_upload, $extensions_autorisees)){//Comparer avec la fonction in_array

      $img_name = $_FILES['image']['name'];

        $req = $bdd->prepare('INSERT INTO images (img_name) VALUES(:img_name)');
        $req->execute(array('img_name' => $img_name));

      }
  }
}

echo 'Les infos produit et image ont bien été ajoutées !.';
header('refresh:3;url=http://localhost/php/boulot_semaine_12/site_e_commerce_jc/product_add.php');

?>
