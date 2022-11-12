<?php
include 'article.class.php';
class Detail extends Voiture
{
  public ?string $nom = null;
  public ?string $prenom = null;

  public static function findAllArticles()
  {
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $dbh = new PDO("mysql:dbname=encheres;host=localhost", "root", "root");
      //preparer//
      //  if ($_GET['id']) {
      ///   $f = $_GET['id'];

     //$get = $_POST['voiture.id'];
       // echo $get;
        // $id = $_GET["id"];.....
        $query = $dbh->prepare("SELECT voiture.*, vendeur.* FROM voiture LEFT JOIN vendeur ON voiture.id_vendeur = vendeur.id ");
        //executer//
        $query->execute();
        //récupérer//
        $produits1 = $query->fetchAll(PDO::FETCH_ASSOC);
        $article_database = [];




        foreach ($produits1 as $value) {
          //echo $produit1['id'];..
          // $_SESSION['user_id'] = $produit1['id'];
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
          );
          array_push($article_database, $produits1);
        }
        return $article_database;
      }
    }
  

  public function __construct($id, $date, $enchere, $marque, $modele, $puissance, $image, $annee, $prix_depart, $nom, $prenom)
  {
    parent::__construct($id, $date, $enchere, $marque, $modele, $puissance, $image, $annee, $prix_depart);
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
