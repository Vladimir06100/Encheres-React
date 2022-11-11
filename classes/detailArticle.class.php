<?php
include 'article.class.php';
class Detail extends Voiture
{
  public ?string $nom = null;
  public ?string $prenom = null;

  public static function findAll()
  {
    $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
    //preparer//
    $query = $dbh->prepare("SELECT voiture.*, vendeur.* FROM voiture LEFT JOIN vendeur ON voiture.id_vendeur = vendeur.id");
    //executer//
    $query->execute();
    //récupérer//
    $produits1 = $query->fetchAll(PDO::FETCH_ASSOC);

    $article_database = [];
    foreach ($produits1 as $value) {
      $produits1 = new Detail(
        $value["marque"],
        $value["modele"],
        $value['puissance'],
        $value["image"],
        $value["annee"],
        $value["prix_depart"],
        $value["nom"],
        $value["prenom"],
      );
      array_push($article_database, $produits1);
    }
    return $article_database;
  }
  public function __construct($marque, $modele, $puissance, $image, $annee, $prix_depart, $nom, $prenom)
  {
    parent::__construct($marque, $modele, $puissance, $image, $annee, $prix_depart);
    $this->nom = $nom;
    $this->prenom = $prenom;
  }

  public function afficherToutesLesInformation()
  {
    parent::afficherToutesLesInformations();
    echo "<p>" . $this->nom . "</p>";
    echo "<p>" . $this->prenom . "</p>";
  }
}
