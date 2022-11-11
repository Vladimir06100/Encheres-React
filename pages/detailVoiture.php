<?php
session_start();
include '../classes/detailArticle.class.php';
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
      <?php
      //appeler static pour récupérer la list
      $produit_list = Detail::findAll();
      foreach ($produit_list as $produit1) {
      ?>

        <section class="affichageVoiture">
          <div class="textVoiture">
            <p><?php echo "Marque : " . $produit1->getMarque(); ?></p>
            <p><?php echo "Modèle : " . $produit1->getModele(); ?></p>
            <p><?php echo "Prix de depart : " . $produit1->getPrix(); ?></p>
            <p><?php var_dump($produit1); ?></p>
          </div>
          <p><?php echo "<img class='img' src='" . $produit1->image . "' />"; ?></p>
        </section>
      <?php } ?>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>