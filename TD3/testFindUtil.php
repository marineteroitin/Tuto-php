<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
       
        <!--On inclut les fichiers de la classe PHP avec require_once pour éviter qu'ils soient inclus plusieurs fois-->
        <?php require_once("Trajet.php");?>
    </head>
    <body> 
        <?php
        //exo7 afficher tous les utilisateurs d'un trajet demandé dans le formulaire
           Trajet::findPassagers($_POST['idTrajet']);
        ?>
    </body>
</html>