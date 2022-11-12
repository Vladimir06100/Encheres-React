<?php session_start(); ?>
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
      $produit_list = Voiture::findAllArticles();
      foreach ($produit_list as $produit) {
        
      ?>

        <section class="affichageVoiture">
          <div class="textVoiture">
            <p><?php echo "Marque : " . $produit->getMarque(); ?></p>
            <a class="btn-detail" href="/Encheres/pages/detailVoiture.php">Voir les Detail</a>
          </div>
          <p><?php echo "<img class='img' src='" . $produit->image . "' />"; ?></p>
        </section>
      <?php } ?>
    </section>
  </div>
</body>

</html>