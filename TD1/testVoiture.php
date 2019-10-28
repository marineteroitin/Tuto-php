<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <?php require_once("Voiture.php"); ?>
        <?php require_once("Trajet.php"); ?>
       
    </head>
    <body>
    <?php    
    $voiture1 = new Voiture("Nissan","rouge","ALHSUBXO");
    $voiture1->afficher(); //attention pas $voiture1.fonction mais ->

    $data = array(
        'id' => '1',
        'depart' => 'Montpellier',
        'arrivee' => 'Monteux',
        'date' => '12/09/2000',
        'nbplaces' => '2',
        'prix' => '12',
        'conducteur_login' => 'marinet'
    );
    $trajet1 = new Trajet($data);
    var_dump($trajet1);
    $trajet1->set('arrivee','Loriol');
    var_dump($trajet1);
    $trajet1->get('arrivee');
    ?>
    </body>
</html>