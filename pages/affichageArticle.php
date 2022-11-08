<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/Encheres/template/index.css" />
</head>

<body>
  <div class="principale">
    <section class="sectionPrincipale">
      <?php
      $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
      //preparer//
      $query = $dbh->prepare("SELECT * FROM article WHERE 1 ");
      //executer//
      $query->execute();
      //récupérer//
      $voitures = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($voitures as $produit) { ?>
        <section class="affichageVoiture">
          <div class="textVoiture">
            <p><?php echo "Marque : " . $produit["modele"]; ?></p>
            <p><?php echo "Modèle : " . $produit["marque"]; ?></p>
            <p><?php echo "Prix : " . $produit["prix"]; ?></p>
          </div>
          <div class="textVoitureVendeur">
            <p>Vendu par : ici le nom du Vendeur</p>
          </div>
          <div class="textVoitureAcheteur">
            <p>Acheter par : ici le nom du Acheteur</p>
            <p>Le : ici la date d'achat</p>
            <p>Prix : ici prix d'achat</p>
          </div>
          <p><?php echo "<img class='img' src='" . $produit['img'] . "' />"; ?></p>
        </section>
      <?php }
      ?>
    </section>
  </div>
</body>

</html>