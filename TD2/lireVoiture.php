<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <?php require_once ("Model.php"); ?>
        <?php require_once ("../TD1/Voiture.php"); 
                require_once("../TD1/Utilisateur.php");
                require_once("../TD1/Trajet.php");
        ?> <!--attention Voiture.php n'est pas dans le même dossier-->
    </head>
    <body>
       <?php 
        /*exo6
        $SQL='SELECT * FROM voiture'; //cette requette lit tous  les éléments de la table voiture
        $rep = Model::$pdo->query($SQL);
        //aficher toutes les voitures de ma base de données(BDD)
        $tab_voiture = $rep->fetchAll(PDO::FETCH_OBJ); //tableau d'objets où les attributs sont les champs de la BDD
        //var_dump($tab_voiture);

        //j'affiche mes voitures 
        foreach($tab_voiture as $clé=>$voiture){
            echo "immatriculation:$voiture->immatriculation \n";
            echo "couleur:$voiture->couleur \n";
            echo "marque:$voiture->marque \n";
        }*/
        /*exo 7: j'affiche mes voiture avec la fonction afficher de la classe voiture
        $SQL='SELECT * FROM voiture'; //cette requette lit tous  les éléments de la table voiture
        $rep = Model::$pdo->query($SQL); 
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture'); //tableau d'objets où les attributs sont les champs de la BDD,mais on précise la classe à laquelle ils appartiennent
        $tab_voiture = $rep->fetchAll();
        //var_dump($tab_voiture);
        foreach($tab_voiture as $clé=>$voiture){
            $voiture->afficher();
        }*/

        //exo 8: j'appelle ma fonction qui se trouve dans la classe Voiture (j'ai recopié celle de l'exo 7 sans oublier d'importer Model.)

        Voiture::getAllVoitures();
        Utilisateur::getAllUtilisateurs();
        Trajet::getAllTrajets();


        ?>
    </body>
</html>