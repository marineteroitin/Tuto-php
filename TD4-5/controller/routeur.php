<?php
require_once (File::build_path(array('controller','ControllerVoiture.php')));
// On recupère l'action passée dans l'URL
if (isset($_GET["action"])){ //si qq chose est écrit dans action
    if (in_array($_GET["action"],get_class_methods('ControllerVoiture'))){ //on vérifie que l'action existe
        $action = $_GET["action"];
    }
    else { //si l'ation demandée n'existe pas
        require_once File::build_path(array('view','voiture','error.php'));
    }
}else{ //si il n'y a rien dans action 
    $action = "readAll";
};

$immat = $_GET["immat"];
$couleur = $_GET["couleur"];
$marque = $_GET["marque"];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action($immat, $couleur, $marque); 
?>