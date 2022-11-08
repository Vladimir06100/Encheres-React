<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../template/index.css">
</head>

<body>
  <?php include_once '../template/header.php' ?>
  <div class="principale">
    <section class="connexion">
      <h2>Connexion</h2>
      <form action="verification-connexion.php" method="POST">
        <input type="email" name="email" placeholder="email" required />
        <input type="password" name="password" placeholder="mot de passe" required />
        <button class="btn-accueil">Valider</button>
      </form>
      <div className="CreateNewUser">
        <a class="btn-accueil" href="/Encheres/index.php">Cree votre Enchere</a>
      </div>
    </section>
  </div>
  <?php include '../template/footer.php'; ?>
</body>

</html>