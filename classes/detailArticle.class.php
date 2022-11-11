<?php
class Voiture
{
  private string $marque;
  private string $modele;
  private int $puissance;
  public string $image;
  private string $annee;
  private string $prix;

  public int $vendeur;



  public static function findAllArticles()
  {
    $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
    //preparer//
    $query = $dbh->prepare("SELECT * FROM voiture");
    //executer//
    $query->execute();
    //récupérer//
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    $article_database = [];
    foreach ($produits as $value) {
      $produits = new Voiture(
        $value["marque"],
        $value["modele"],
        $value['puissance'],
        $value["image"],
        $value["annee"],
        $value["prix_depart"],
      );
      array_push($article_database, $produits);
    }
    return $article_database;
  }
  public function __construct($marque, $modele, $puissance, $image, $annee, $prix_depart)
  {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->puissance = $puissance;
    $this->image = $image;
    $this->annee = $annee;
    $this->prix = $prix_depart;
    // a chaque fois que j'ajoute un produit, je vais incrémenter ma variable static counter
    //self::$counter = self::$counter + 1;
  }

  public function afficherToutesLesInformations()
  {
    echo "<p>" . $this->getModele() . "</p>";
    echo "<p>" . $this->getMarque() . "</p>";
    echo "<p>" . $this->getPrix() . "</p>";
    echo "<img src=\"" . $this->image . "\" >";
  }

  public function getMarque()
  {
    return $this->marque;
  }

  public function setMarque($marque)
  {
    if ($marque != "") {
      $this->marque = $marque;
    }
  }

  public function getAnnee()
  {
    return 'annee' . $this->annee;
  }

  public function setAnnee($annee)
  {
    if ($annee != "") {
      $this->annee = $annee;
    }
  }

  public function getPuissance()
  {
    return $this->puissance . 'Chevaux';
  }

  public function setPuissance($puissance)
  {
    if ($puissance != "") {
      $this->puissance = $puissance;
    }
  }
  // on affiche le prix 
  public function getPrix()
  {
    return $this->prix . "€";
  }

  public function setPrix(float $value)
  {
    // Si ma valeur est supérieur ou égale a 0
    if ($value >= 0) {
      // Je met a jour ma valeur
      $this->prix = number_format($value, 2);
    }
  }

  public function getModele()
  {
    return $this->modele;
  }

  public function setModele($modele)
  {
    if ($modele != "") {
      $this->modele = $modele;
    }
  }
}
