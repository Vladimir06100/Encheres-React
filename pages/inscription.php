<?php
//inscription register version PDO et formulaire
$dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $register = $dbh->prepare("INSERT INTO `utilisateur`(`id`,`nom`, `prenom`, `email`, `mdp`) VALUES (null,'$prenom','$nom','$email','$mdp')");
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
          <input type="text" name="prenom" placeholder="prenom" required />
          <input type="text" name="nom" placeholder="nom" required />
          <input type="text" name="email" placeholder="email" required />
          <input type="text" name="mdp" placeholder="mot de pass" required />
          <button type="submit" name="inscription">Valider</button>
        </form>
        <section>
    </div>
  </div>
  <?php include_once '../template/footer.php' ?>

</body>

</html>