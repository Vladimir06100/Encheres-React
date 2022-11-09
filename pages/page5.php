`<?php

  // creation nouveau enchere (voiture)
  include("createdeux.php");
  //require './voiture.class.php';//
  //On verifie que la requete envoyé vient de post(formulaire//
  /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["marque"]!= null){
        $product = new Voiture(
            $_POST["marque"],
            $_POST["modele"],
            $_POST["puissance"],
            $_POST["image"],
        );
        var_dump($product)
        $product->affichage();
    }
}*/
  ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
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
</body>

</html>