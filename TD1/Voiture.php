<?php
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
        else echo "L'immatriculation doit être en 8 caractères!!"
        
    }

    //un constructeur
    public function __construct($m,$c,$i){
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    }

    //une méthode d'affichage
    public function afficher(){
        echo" Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur) "
    }
}
?>