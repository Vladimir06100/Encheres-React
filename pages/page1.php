<!-- Natalia Class.voiture -->

<?php
class Voiture{
public string $marque;
public string $modele;
public string $puissance;
public string $image;
public string $annee;
public string $prixDepart;

public function __construct($marque,$modele,$puissance,$image,$annee,$prixDepart)
{
$this->marque=$marque;
$this->modele=$modele;
$this->puissance=$puissance;
$this->image=$image;
$this->annee=$annee;
$this->prixDepart=$prixDepart;
}

//afficher les infos dans le navigateur, on l'appel dans create.php//
public function affichage()
{
  echo '<p>' . $this->marque . '</p>';
  echo '<p>' . $this->modele . '</p>';
  echo '<p>' . $this->puissance . '</p>';
  echo '<img src="' . $this->image . '" />';
  echo '<p>' . $this->annee . '</p>';
  echo '<p>' . $this->prixDepart . '</p>';
  echo "<button type='submit' name='voir+''> voir + </button>";
  echo "button type='submit' name='enregistrer'>Valider</button>";
}
} //end of class//