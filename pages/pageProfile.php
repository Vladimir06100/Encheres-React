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
      echo "bonjour " . $_SESSION["email"];
      echo "test " . $_SESSION['user_id'];
      if(isset($_SESSION['users.id'])){
      echo "<p> Bienvenue monsieur " . $_SESSION['users.id'] . "</p>
      <ul>"
        . $_SESSION['users.id'] .
        '<li><a href="#">perfil</a></li>
        <li><a href="#">mis compras</a></li>
        <li><a href="#">mis ventas</a></li>
        <li><a href="logout.php">log out</a></li>
      </ul>';
      }?>
      <a class="btn-accueil" href="/Encheres/pages/CreateEnchere.php">cree un enchere</a>
    </section>
  </div>
  <?php include_once '../template/footer.php' ?>
</body>
</html>