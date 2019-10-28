<?php
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

    //un constructeur
    public function __construct($l,$n,$p){
        $this->login = $l;
        $this->nom = $n;
        $this->prenom = $p;
    }

    //une méthode d'affichage
    public function afficher(){
        echo" Utilisateur $this->login s'appelle $this->prenom  $this->nom ";
    }
    } 
?>
   