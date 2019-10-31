<?php
require_once ("../TD2/Model.php");
class Utilisateur {
    private $login;
    private $nom;
    private $prenom;
    //un getter
    public function getLogin(){
    return $this->login;
    }

    //un setter
    public function setLogin($login2){
    $this->login=$login2;
    }

    public function getNom(){
    return $this->nom;
    }

    public function setNom($nom2){
        $this->nom=$nom2;
    }

    public function getPrenom(){
     return $this->prenom;
    }

    public function setPrenom($prenom2){
      $this->prenom=$prenom2;
    }

    /*un constructeur du TP1
    public function __construct($l,$n,$p){
        $this->login = $l;
        $this->nom = $n;
        $this->prenom = $p;
    }
    */
    //constructeur, version TP2 (marche sans ou avec 3 arguments)
    //la syntaxe ...=NULL signifie que l'argument est optionnel
    //si un argument optionnel n'est pas fourni, alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($l=NULL,$n=NULL,$p=NULL){
        if(!is_null($l) && !is_null($n) && !is_null($p) ){
            //si aucun de $l,$n,$p sont nuls, c'est forcément qu'on les as fournis donc on retombe sur le constructeur à 3 arguments
            $this->login = $l;
            $this->nom = $n;
            $this->prenom = $p;
        }
    }

    //une méthode d'affichage
    public function afficher(){
        echo" Utilisateur $this->login s'appelle $this->prenom  $this->nom ";
    }

    public static function getAllUtilisateurs(){
        $SQL='SELECT * FROM utilisateur'; //cette requette lit tous  les éléments de la table utilisateur
        $rep = Model::$pdo->query($SQL); 
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur'); //tableau d'objets où les attributs sont les champs de la BDD,mais on précise la classe à laquelle ils appartiennent
        $tab_utilisateur = $rep->fetchAll();
        //var_dump($tab_utilisateur);
        foreach($tab_utilisateur as $clé=>$utilisateur){
            $utilisateur->afficher();
        }
    }
    } 
?>
   