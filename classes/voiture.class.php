<?php
class Voiture
{
  public string $id;
  private string $date;
  private int $enchere;
  private string $marque;
  private string $modele;
  private int $puissance;
  public string $image;
  private string $annee;
  private string $prix;

  public static function findAllArticles()
  {
    $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
    //preparer//
    $query = $dbh->prepare("SELECT * FROM voiture WHERE 1");
    //executer//
    $query->execute();
    //récupérer//
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);
    $article_database = [];
    foreach ($produits as $value) {
      $produits = new Voiture(
        $value['id'],
        $value['date'],
        $value['enchere'],
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
  public function __construct($id, $date, $enchere, $marque, $modele, $puissance, $image, $annee, $prix_depart)
  {
    $this->id = $id;
    $this->date = $date;
    $this->enchere = (int) $enchere;
    $this->marque = $marque;
    $this->modele = $modele;
    $this->puissance = $puissance;
    $this->image = $image;
    $this->annee = $annee;
    $this->prix = $prix_depart;
  }

  public function afficherToutesLesInformations()
  {
    echo "<p>" . $this->getMarque() . "</p>";
    echo "<p>" . $this->getModele() . "</p>";
    echo "<p>" . $this->getPuissance() . "</p>";
    echo "<img src=\"" . $this->image . "\" >";
    echo "<p>" . $this->getAnnee() . "</p>";
    echo "<p>" . $this->getPrix() . "</p>";
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
  public function getPrix()
  {
    return $this->prix . "€";
  }

  public function setPrix(float $value)
  {
    if ($value >= 0) {
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

  public function getDate()
  {
    return $this->date;
  }
  public function getDateFormat(string $format = 'l d F Y')
  {
    $date = new DateTime($this->date);
    return $date->format($format);
  }
  public function setDate(string $date)
  {
    $this->date = $date;
  }

  public function getEnchere()
  {
    return $this->enchere;
  }

  public function setEnchere($enchere)
  {
    $this->enchere = $enchere;
  }
}