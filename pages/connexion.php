<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dbh = new PDO("mysql:dbname=encheres;host=127.0.0.1;port=8889", "root", "root");
  $query = $dbh->prepare("SELECT users.email, users.password, FROM users WHERE email=? AND password=?");
  $query->execute([$_POST['email'], $_POST['password']]);
  //récupérer//
  $produits = $query->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($produit)) {
    header("Location http://localhost:8888/Encheres/pages/pageProfile.php");
  }
  echo "404";
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
      <section class="connexion">
        <h2 class="h2connexion">Connexion</h2>
        <form class="formConnexion" action="" method="POST">
          <input type="email" name="email" placeholder="email" required />
          <input type="password" name="password" placeholder="mot de passe" required />
          <button class="btn-accueil">Valider</button>
        </form>
        <div className="CreateNewUser">
          <h2 class="h2connexion">Inscription</h2>
          <div class="textInscription">
            <p>Si vous voulez participer aux Encheres</p>
            <a class="btn-accueil" href="./inscription.php">Inscription</a>
          </div>
        </div>
      </section>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>