<?php
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

    //constructeur générique qui prend un tableau dont les index corresp aux attributs de la classe
    public function __construct($data) {
        $this->id = $data['id'];
        $this->depart = $data['depart'];
        $this->arrivee = $data['arrivee'];
        $this->date = $data['date'];
        $this->nbplaces = $data['nbplaces'];
        $this->prix = $data['prix'];
        $this->conducteur_login = $data['conducteur_login'];
    }
}
?>