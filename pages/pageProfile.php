<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/Encheres/template/index.css" />
</head>

<body>
  <?php include_once '../template/header.php' ?>
  <div class="principale">
    <section class="sectionPrincipale">
      <h1>Bienvenue sur votre Profile </h1>
      <?php
      echo "<p> Votre nom :" . $_SESSION['nom'] . "</p></br>";
      echo "<p> Votre prenom :" . $_SESSION['prenom'] . "</p></br>";
      echo "<p> Votre email est :" . $_SESSION['email'] . "</p></br>";
      echo "<p> Votre mot de passe est :" . $_SESSION['password'] . "</p></br>";
      ?>
      <a class="btn-accueil" href="/Encheres/pages/CreateEnchere.php">cree un enchere</a>
      <a class="btn-accueil" href="../utils/logout.php">Deconnexion</a>
    </section>
  </div>
  <?php include_once '../template/footer.php' ?>
</body>

</html>