<?php
include 'voiture.class.php';
class Detail extends Voiture
{
  public ?string $nom = null;
  public ?string $prenom = null;
  public ?string $nomUser = null;
  public ?string $prenomUser = null;
  public static function findAllArticles($id)
  {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
      //preparer//
      if (!isset($_GET['id_vendeur'])) {
        $query = $dbh->prepare("SELECT voiture.*, vendeur.*,users.id, users.nom AS nomUser, users.prenom AS prenomUser FROM voiture LEFT JOIN vendeur ON voiture.id_vendeur = vendeur.id LEFT JOIN users ON voiture.id_users=users.id WHERE voiture.id= ?");
        //executer//
        $query->execute([$id]);
        //récupérer//
        $produits1 = $query->fetchAll(PDO::FETCH_ASSOC);
        $article_database = [];
        foreach ($produits1 as $value) {
          $produits1 = new Detail(
            
            $value['id'],
            $value['date'],
            $value['enchere'],
            $value["marque"],
            $value["modele"],
            $value['puissance'],
            $value["image"],
            $value["annee"],
            $value["prix_depart"],
            $value["nom"],
            $value["prenom"],
            $value["nomUser"],
            $value["prenomUser"],
          );
          array_push($article_database, $produits1);
        }
        return $article_database;
      }
    }
  }
  public function __construct($id, $date, $enchere, $marque, $modele, $puissance, $image, $annee, $prix_depart, $nom, $prenom, $nomUser, $prenomUser)
  {
    parent::__construct($id, $date, $enchere, $marque, $modele, $puissance, $image, $annee, $prix_depart);

    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->nomUser = $nomUser;
    $this->prenomUser = $prenomUser;
  }

  public function afficherToutesLesInformation()
  {
    parent::afficherToutesLesInformations();
    echo "<p>" . $this->nom . "</p>";
    echo "<p>" . $this->prenom . "</p>";
    echo "<p>" . $this->nomUser . "</p>";
    echo "<p>" . $this->prenomUser . "</p>";
  }
}