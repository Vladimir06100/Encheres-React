<?php

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
      <div>
        <h1>Ajoutez une nouvelle voiture</h1>
        <section>
          <form class="formEnchere" action="" method="POST">
            <input type="text" name="marque" placeholder="marque" />
            <input type="text" name="modele" placeholder="modele" />
            <input type="text" name="puissance" placeholder="puissance" />
            <input type="text" name="image" placeholder="url de l'image" />
            <input type="text" name="annee" placeholder="annee" />
            <input type="text" name="prix_depart" placeholder="prix_depart" />
            <input type="submit" name="enregistrer" />
          </form>
          <section>
      </div>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>