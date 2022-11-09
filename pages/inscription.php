<?php
//inscription register version PDO et formulaire
$dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $register = $dbh->prepare("INSERT INTO `users`(`id`, `nom`, `prenom`, `email`, `password`) VALUES (NULL,'$nom','$prenom','$email','$password')");
  $register->execute();
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../template/index.css" />
</head>

<body>
  <?php include_once '../template/header.php' ?>
  <div class="principale">

    <div class="sectionPrincipale">
      <h1>Enregistrez-vous</h1>
      <section>
        <form action="" method="POST">
          <input type="text" name="nom" placeholder="nom" required />
          <input type="text" name="prenom" placeholder="prenom" required />
          <input type="email" name="email" placeholder="email" required />
          <input type="text" name="password" placeholder="mot de pass" required />
          <button type="submit" name="inscription">Valider</button>
        </form>
        <section>
          <?php if ($register) {
            echo "felicitation";
          ?>
            <h3>Vous êtes bien enregistrée</h3>

          <?php
          } else {
          ?>
            <h3>Ups problème!!</h3>
          <?php  } ?>
    </div>
  </div>
  <?php include_once '../template/footer.php' ?>

</body>

</html>