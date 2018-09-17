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


if (isset($name) AND !empty($name) AND isset($description) AND !empty($description) AND isset($price) AND !empty($price) AND isset($availability) AND !empty($availability)
AND isset($_FILES['image']) AND !empty($_FILES['image']) AND $_FILES['image']['error'] == 0) {

  $req = $bdd->prepare('INSERT INTO infos_articles (name, price, availability, description) VALUES(:name, :price, :availability, :description)');
  $req->execute(array(
      'name' => $name,
      'price' => $price,
      'availability' => $availability,
      'description' => $description
      ));

  $last_id = $bdd->lastInsertId();

  if ($_FILES['image']['size'] <= 1000000){

      // Testons si l'extension est autorisée
      $infosimage = pathinfo($_FILES['image']['name']);//On récupère l'extension du fichier dans une variable
      $extension_upload = $infosimage['extension'];
      $extensions_autorisees = array('jpg', 'png');//Création d'un tableau avec les extensions q'uon autorise (la 1 seule)

      if (in_array($extension_upload, $extensions_autorisees)){//Comparer avec la fonction in_array

      $img_name = $_FILES['image']['name'];

        $req = $bdd->prepare('INSERT INTO images (img_name, id_article) VALUES(:img_name, :id_article)');
        $req->execute(
          array(
            'img_name' => $img_name,
            'id_article' => $last_id
          ));
      }else {
        echo 'Le type d\'image n\'est pas bon !.';
      }
  }
  echo 'Les infos produit et image ont bien été ajoutées !.';
  header('refresh:1;url=product_add.php');
}else {
  echo 'Veuillez réessayer !.';
  header('refresh:1;url=product_add.php');
}

?>
