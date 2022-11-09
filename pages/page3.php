``
<?php
//createdeux
// recuper post et inserer ledonnes voiture dans la bd
// version mysqli
//aqui incluimos la conexion a la base de datos//
include("con_db.php");


if (isset($_POST['enregistrer'])) {

  if (strlen($_POST['marque']) >= 1 && strlen($_POST['modele']) >= 1 && strlen($_POST['puissance']) >= 1 && strlen($_POST['image']) >= 1 && strlen($_POST['annee']) >= 1 && strlen($_POST['prix_depart']) >= 1) {

    $marque = ($_POST['marque']);
    $modele = ($_POST['modele']);
    $puissance = ($_POST['puissance']);
    $image = ($_POST['image']);
    $annee = ($_POST['annee']);
    $prix_depart = ($_POST['prix_depart']);

    //$image= ($_POST['image']);//
    $consult = "INSERT INTO voiture (`marque`, `modele`, `puissance` , `image`,`annee` ,`prix_depart`) VALUES ('$marque','$modele','$puissance' , '$image', '$annee', '$prix_depart' )";
    $result = mysqli_query($conex, $consult);

    if ($result) {

?>

      <h3>Sa voiture est bien enregistrée</h3>
    <?php
    } else {

    ?>
      <h3>Ups problemaaaa!!</h3>
<?php
    }
  }
}
?>