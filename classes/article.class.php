<?php
class Article
{
  //compteur de produit
  public static int $counter = 0;

  // Nom du Article
  private string $modele;

  // Nom du Marque
  private string $marque;

  // Prix Article
  protected string $prix;

  //Photo
  public string $img;


  public static function findAllArticles()
  {
    $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
    //preparer//
    $query = $dbh->prepare("SELECT a.*, v.* FROM article a LEFT JOIN vendeur v ON a.id_vendeur = v.id");
    //executer//
    $query->execute();
    //récupérer//
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    $article_database = [];
    foreach ($produits as $value) {
      $produit = new Article(
        $value["marque"],
        $value["modele"],
        $value["prix"],
        $value["img"],
      );
      array_push($article_database, $produit);
    }
    return $article_database;
  }
  public function __construct($modele, $marque, $prix, $img)
  {
    $this->modele = $modele;
    $this->marque = $marque;
    $this->prix = $prix;
    $this->img = $img;
    // a chaque fois que j'ajoute un produit, je vais incrémenter ma variable static counter
    //self::$counter = self::$counter + 1;
  }

  public function afficherToutesLesInformations()
  {
    echo "<p>" . $this->getModele() . "</p>";
    echo "<p>" . $this->getMarque() . "</p>";
    echo "<p>" . $this->getPrix() . "</p>";
    echo "<img src=\"" . $this->img . "\" >";
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
