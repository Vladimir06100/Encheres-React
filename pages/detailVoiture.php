<?php


require '../classes/article.class.php';

//on appel la base de données//
if ($_SERVER["REQUEST_METHOD"] == "GET") {

  $con = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");

  if ($_GET) {
    $id = $_GET['id'];
    $query = $con->prepare("SELECT * FROM voiture WHERE id=$id");
    $query->execute();
    $voiture = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($voiture as $item) {
      $item = new Voiture(
        $item["marque"],
        $item["modele"],
        $item["puissance"],
        $item["image"],
        $item["annee"],
        $item["prix_depart"]
      );


      $item->afficherToutesLesInformations();
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
      <?php  ?>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>