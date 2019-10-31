<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <?php require_once ("Model.php"); ?>
        
    </head>
    <body>
       <?php 
        $SQL='SELECT * FROM voiture'; //cette requette lit tous  les éléments de la table voiture
        $rep = Model::$pdo->query($SQL);
        //aficher toutes les voitures de ma base de données(BDD)
        $tab_voiture = $rep->fetchAll(PDO::FETCH_OBJ); //tableau d'objets où les attributs sont les champs de la BDD
        //var_dump($tab_voiture);
        foreach($tab_voiture as $clé=>$voiture){
            echo "immatriculation:$voiture->immatriculation \n";
            echo "couleur:$voiture->couleur \n";
            echo "marque:$voiture->marque \n";
        }
        ?>
    </body>
</html>