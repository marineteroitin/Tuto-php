<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET["action"];
$immat = $_GET["immat"];
$couleur = $_GET["couleur"];
$marque = $_GET["marque"];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action($immat, $couleur, $marque); 
?>