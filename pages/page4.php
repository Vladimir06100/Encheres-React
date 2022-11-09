<?php

//inscription register version PDO et formulaire
$con = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", "");

if (isset($_POST['prenom'])) {

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];

  $insertuser = $con->prepare("INSERT INTO `utilisateur`(`id`,`nom`, `prenom`, `email`, `mdp`) VALUES (null,'$prenom','$nom','$email','$mdp')");
  $insertuser->execute();
}


?>




<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="index.css" />
</head>

<body>


  <div>
    <h1>Enregistrez-vous</h1>
    <section>
      <form action="" method="POST">

        <input type="text" name="prenom" placeholder="prenom" />
        <input type="text" name="nom" placeholder="nom" />
        <input type="text" name="email" placeholder="email" />
        <input type="text" name="mdp" placeholder="mot de pass" />
        <button type="submit" name="registuser">Valider</button>
      </form>
      <section>
  </div>

</body>

</html>