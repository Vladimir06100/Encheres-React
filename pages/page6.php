<!DOCTYPE html>
<html>
<!-- PAge index NATALIA -->
<head>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <?php
  $dbh = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", "");
  require './voiture.class.php';

  //preparer//

  $query = $dbh->prepare("SELECT * FROM voiture WHERE 1");
  //executer//
  $query->execute();
  //recuperer//
  $voitures = $query->fetchAll(PDO::FETCH_ASSOC);
  $article_database = [];

  foreach ($voitures as $produit) {
    $produit = new voiture(

      $produit["marque"],
      $produit["modele"],
      $produit["puissance"],
      $produit["image"],
      $produit["annee"],
      $produit["prix_depart"]
    );
    array_push($article_database, $produit);

    $produit->affichage();
  }

  ?>
</body>

</html>