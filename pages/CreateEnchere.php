<?php session_start();
//je verifie si l'utilisateur est connecté
//si il ne les pas je redirige ailleurs

// sinon je le laisse aller sur la page

$dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
if (isset($_POST['marque'])) {
  $enchere = $_POST['enchere'];
  $marque = $_POST['marque'];
  $modele = $_POST['modele'];
  $puissance = $_POST['puissance'];
  $image = $_POST['image'];
  $annee = $_POST['annee'];
  $prix_depart = $_POST['prix_depart'];
  //preparer//
  $query = $dbh->prepare("INSERT INTO voiture (`enchere`, `marque`, `modele`, `puissance` , `image`,`annee` ,`prix_depart`) VALUES ('$enchere','$marque','$modele','$puissance' , '$image', '$annee', '$prix_depart' )");
  $query->execute();
  header("Location: http://localhost:8888/Encheres/pages/pageProfile.php");
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
          <form class="formEnchere" action="" method="POST">
            <label>date fin Enchere</label>
            <input type="date" name="enchere" placeholder="date finale enchere" />
            <label>Marque</label>
            <input type="text" name="marque" placeholder="marque" />
            <label>Modele</label>
            <input type="text" name="modele" placeholder="modele" />
            <label>Puissance (uniquement Chiffres)</label>
            <input type="text" name="puissance" placeholder="puissance" />
            <label>Photo(URL)</label>
            <input type="text" name="image" placeholder="url de l'image" />
            <label>Annee (uniquement Chiffres)</label>
            <input type="text" name="annee" placeholder="annee" />
            <label>Prix de depart (uniquement Chiffres)</label>
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