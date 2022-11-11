<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
  $query = $dbh->prepare("SELECT users.email, users.password FROM users WHERE email= ? AND password= ? ");
  $query->execute([$_POST['email'], $_POST['password']]);
  //récupérer//
  $produits = $query->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($produits)) {
    header("Location: http://localhost:8888/Encheres/pages/pageProfile.php");
  } else {
    '<label>Email ou mot de passe Incorrect!!</label>';
  }
}
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
          <form action="" method="POST">
            <input type="text" name="marque" placeholder="marque" />
            <input type="text" name="modele" placeholder="modele" />
            <input type="text" name="puissance" placeholder="puissance" />
            <input type="text" name="image" placeholder="url de l'image" />
            <input type="text" name="annee" placeholder="annee" />
            <input type="text" name="prix_depart" placeholder="prix_depart" />
            <button type="submit" name="enregistrer">Valider</button>
          </form>
          <section>
      </div>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>