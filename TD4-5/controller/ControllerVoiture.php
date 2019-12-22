<?php

require_once (File::build_path(array('model','ModelVoiture.php'))); // chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller = 'voiture';
        $view = 'list';
        $pagetitle = 'Liste des voitures';
        require File::build_path(array('view','view.php'));  //"redirige" vers la vue
    }
    public static function read($immat){
        $v = ModelVoiture::getVoitureByImmat($immat);
        $controller = 'voiture';
        if ($v == false) {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view','view.php')); 
        } else {
            $view = 'detail';
            $pagetitle = 'Détail d\'une voiture';
            require File::build_path(array('view','view.php')); 
        }
    }

    public static function create(){
        $controller = 'voiture';
        $view = 'create';
        $pagetitle = 'Création d\'une voiture';
        require File::build_path(array('view','view.php'));
    }

    public static function created($immat, $couleur, $marque){
        $voiture = new ModelVoiture($marque,$couleur,$immat);
        $voiture->save();
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller = 'voiture';
        $view = 'created';
        $pagetitle = 'Voiture créée avec succès';
        require File::build_path(array('view','view.php'));
    }

    public static function delete($immat){
        ModelVoiture::delete($immat);
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller = 'voiture';
        $view = 'deleted';
        $pagetitle = 'Voiture supprimée avec succès';
        require File::build_path(array('view','view.php'));
    }
    
    public static function update($immat){
        $v = ModelVoiture::getVoitureByImmat($immat);
        $controller = 'voiture';
        $view = 'update';
        $pagetitle = 'Modifier la voiture';
        require File::build_path(array('view','view.php'));

    }

    public static function updated($immat, $couleur, $marque){
        ModelVoiture::update($marque,$couleur,$immat);
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller = 'voiture';
        $view = 'updated';
        $pagetitle = 'Voiture modifiée avec succès';
        require File::build_path(array('view','view.php'));
    }
    
}
?>