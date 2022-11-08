<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <?php
  $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
  //preparer//
  $query = $dbh->prepare("SELECT * FROM article WHERE 1 ON ");
  //executer//
  $query->execute();
  //récupérer//
  $voitures = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($voitures as $produit) {
    echo "Marque:" . $produit["modele"];
    echo "Modèle:" . $produit["marque"];
    echo "Prix:" . $produit["prix"];
    echo "Photo: <img class='img' src='" . $produit['img'] . "' />";
  }
  ?>
</body>

</html>