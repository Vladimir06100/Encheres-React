<?php


require '../classes/article.class.php';

//on appel la base de données//
if ($_SERVER["REQUEST_METHOD"] == "GET") {

  $con = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");

  if ($_GET['user.id']) {
    $filteredId = $_GET['user.id'];
    $query = $con->prepare("SELECT voiture.marque, voiture.modele, voiture.puissance, voiture.image, voiture.annee, voiture.prix_depart FROM voiture WHERE id=$filteredId");

    $query->execute();


    $voiture = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($voiture as $item) {
      $item = new voiture(
        $item["marque"],
        $item["modele"],
        $item["puissance"],
        $item["image"],
        $item["annee"],
        $item["prix_depart"]
      );


      $item->affichage();
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../template/index.css">
</head>

<body>
  <?php include_once '../template/header.php' ?>
  <div class="principale">
    <section class="sectionPrincipale">

    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>