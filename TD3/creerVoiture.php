<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <?php require_once("Voiture.php"); ?> <!-- Ne pas oublier d'importer la classe voiture-->

    </head>
    <body>
   <?php    
    $voiture1 = new Voiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);
    //$_GET['nom variable'] permet de récupérer la valeur de nom du questionnaire si on avait mis <form method="get" dans le questionnaire. Cependant on a tout les paramètres du questionnaire dans l'URL, c'est pas ouf, donc on utilise <form method="post" et on récupère les valeurs avec *_POST['nom variable']
    $voiture1->save(); //attention pas $voiture1.fonction mais ->
    //j'insère dans ma BD la voiture saisie dans le formulaire

    ?>
    </body>
</html>