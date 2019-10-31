<?php
require_once ("../TD2/Model.php");
class Voiture {
    private $marque;
    private $couleur;
    private $immatriculation;

    //un getter
    public function getMarque(){
        return $this->marque;
    }

    //un setter
    public function setMarque($marque2){
        $this->marque=$marque2;
    }

    public function getCouleur(){
        return $this->couleur;
    }

    public function setCouleur($couleur2){
        $this->couleur=$couleur2;
    }

    public function getImmatriculation(){
        return $this->immatriculation;
    }
 //immatriculation doit être de taille 8 -> strlen pour savoir la taille d'une chaîne de caractères
    public function setImmatriculation($immatriculation2){
        if (strlen($immatriculation2)==8){
            $this->immatriculation=$immatriculation2;}
        else echo "L'immatriculation doit être en 8 caractères!!";
        
    }

    //un constructeur (celui du TP1)
    /*public function __construct($m,$c,$i){
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    }
    */
    //constructeur, version TP2 (marche sans ou avec 3 arguments)
    //la syntaxe ...=NULL signifie que l'argument est optionnel
    //si un argument optionnel n'est pas fourni, alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($m=NULL,$c=NULL,$i=NULL){
        if(!is_null($m) && !is_null($c) && !is_null($i) ){
            //si aucun de $m,$c,$i sont nuls, c'est forcément qu'on les as fournis donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }
    //plus propre et concis de faire un constructeur __construct($data) comme dans le TD1


    //une méthode d'affichage
    public function afficher(){
        echo" Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur) ";
    }

    public static function getAllVoitures(){
        $SQL='SELECT * FROM voiture'; //cette requette lit tous  les éléments de la table voiture
        $rep = Model::$pdo->query($SQL); 
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture'); //tableau d'objets où les attributs sont les champs de la BDD,mais on précise la classe à laquelle ils appartiennent
        $tab_voiture = $rep->fetchAll();
        //var_dump($tab_voiture);
        foreach($tab_voiture as $clé=>$voiture){
            $voiture->afficher();
        }
    }
}
?>