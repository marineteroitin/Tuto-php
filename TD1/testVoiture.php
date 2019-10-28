<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php require_once("Voiture.php"); ?>
       
    </head>
    <body>
    <?php    
    $voiture1 = new Voiture("Nissan","rouge","ALHSUBXO");
    $voiture1->afficher(); //attention pas $voiture1.fonction mais ->
    ?>
    </body>
</html>