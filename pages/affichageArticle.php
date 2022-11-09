<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/Encheres/template/index.css" />
</head>

<body>
  <?php require_once './classes/article.class.php'; ?>
  <div class="principale">
    <section class="sectionPrincipale">
      <?php
      //appeler static pour récupérer la list
      $produit_list = Article::findAllArticles();
      foreach ($produit_list as $produit) {
      ?>

        <section class="affichageVoiture">
          <div class="textVoiture">
            <p><?php echo "Marque : " . $produit->getMarque(); ?></p>
            <p><?php echo "Modèle : " . $produit->getMarque(); ?></p>
            <p><?php echo "Prix : " . $produit->getPrix(); ?></p>
          </div>
          <p><?php echo "<img class='img' src='" . $produit->img . "' />"; ?></p>
          <div class="textVoitureVendeur">
            <p>Vendu par : ici le Nom vendeur</p>
          </div>
          <div class="textVoitureAcheteur">
            <p>Acheter par : ici le nom du Acheteur</p>
            <p>Le : ici la date d'achat</p>
            <p>Prix : ici prix d'achat</p>
          </div>
        </section>
      <?php } ?>
    </section>
  </div>
</body>

</html>