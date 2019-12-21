<?php
require_once ("Model.php");
require_once ("Utilisateur.php");
class Trajet {
    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;

    //getter générique, donne variable et return sa valeur
    public function get($nom_attribut) { 
        return $this->$nom_attribut;
    }
    //setters génériques
    public function set($nom_attribut,$valeur) { //nom attribut puis la new valeur
        $this->$nom_attribut = $valeur;
    }

    //constructeur générique qui prend un tableau dont les index corresp aux attributs de la classe , Null au cas où y ai pas de valeurs en paramètre
    public function __construct($data=NULL) {
        if(!is_null($l) && !is_null($n) && !is_null($p) ){ //si aucun null
        $this->id = $data['id']; 
        $this->depart = $data['depart'];
        $this->arrivee = $data['arrivee'];
        $this->date = $data['date'];
        $this->nbplaces = $data['nbplaces'];
        $this->prix = $data['prix'];
        $this->conducteur_login = $data['conducteur_login'];
        }
    }

    //une méthode d'affichage
    public function afficher(){
        echo" Trajet $this->id du $this->date a pour départ: $this->depart et pour arrivée:  $this->arrivee . Le conducteur $this->conducteur_login propose $this->nbplaces places, chacune au prix de $this->prix. ";
    }
    public static function getAllTrajets(){
        $SQL='SELECT * FROM trajet'; //cette requette lit tous  les éléments de la table trajet
        $rep = Model::$pdo->query($SQL); 
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet'); //tableau d'objets où les attributs sont les champs de la BDD,mais on précise la classe à laquelle ils appartiennent
        $tab_trajet = $rep->fetchAll();
        foreach($tab_trajet as $clé=>$trajet){
            $trajet->afficher();
        }
    }

    public static function findPassagers($id){
        //INNER JOIN permet de récupérer des données qui sont liées et dans 2 tables voir: https://www.w3schools.com/sql/sql_join.asp 
        $SQL="SELECT utilisateur.login, utilisateur.nom, utilisateur.prenom FROM utilisateur INNER JOIN passager ON utilisateur.login = passager.utilisateur_login INNER JOIN trajet ON trajet.id = passager.trajet_id AND trajet.id=:id";
        // si je met SELECT * j'aurai les données liées des 3 tables
        //autre requette qui donne directement que ce qu'n veut : utilisateur.login, utilisateur.nom, utilisateur.prenom
        //SELECT * FROM utilisateur WHERE utilisateur.login IN (SELECT passager.utilisateur_login FROM passager INNER JOIN trajet ON trajet.id=passager.trajet_id AND trajet.id=:id)
        $req_prep = Model::$pdo->prepare($SQL);
        $values = array(
            "id" => $id
        );
        // On donne les valeurs et on exécute la requête	 
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur'); //tableau d'objets où les attributs sont les champs de la BDD,mais on précise la classe à laquelle ils appartiennent
        $tab_utilisateur = $req_prep->fetchAll();
        foreach($tab_utilisateur as $clé=>$utilisateur){
            $utilisateur->afficher();
        }
    }
}
?>