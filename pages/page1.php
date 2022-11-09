<!-- Natalia Class.voiture -->

<?php


class Voiture{

public string $marque;
public string $modele;
public string $puissance;
public string $image;
public string $annee;
public string $prix_depart;

public function __construct($marque,$modele,$puissance,$image,$annee,$prix_depart)
{
$this->marque=$marque;
$this->modele=$modele;
$this->puissance=$puissance;
$this->image=$image;
$this->annee=$annee;
$this->prix_depart=$prix_depart;
}

//afficher les infos dans le navigateur, on l'appel dans create.php//
public function affichage()
{
  echo '<p>' . $this->marque . '</p>';
  echo '<p>' . $this->modele . '</p>';
  echo '<p>' . $this->puissance . '</p>';
  echo '<img src="' . $this->image . '" />';
  echo '<p>' . $this->annee . '</p>';
  echo '<p>' . $this->prix_depart . '</p>';
  echo '<button type='submit' name='voir+''> voir + </button>';
  <button type="submit" name="enregistrer">Valider</button>
}
} //end of class//






?>