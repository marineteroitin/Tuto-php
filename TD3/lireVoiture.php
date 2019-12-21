<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <?php require_once ("Model.php"); ?>
        <?php require_once ("Voiture.php"); 
                
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

        /*exo 8: j'appelle ma fonction qui se trouve dans la classe Voiture (j'ai recopié celle de l'exo 7 sans oublier d'importer Model.)

        Voiture::getAllVoitures();
        Utilisateur::getAllUtilisateurs();
        Trajet::getAllTrajets();
        */
        /*exo1 TD3 test fonction getVoitureByImmat 
        //ATTENTION pour les fonctions statiques il faut les appeler par rapport à la classe "Voiture" et non pas à partir de l'instance
        Voiture::getVoitureByImmat("HAOVSOET")->afficher(); //en paramètre une immat de ma BD, echo pour afficher
        Voiture::getVoitureByImmat("chocolat")->afficher(); //n'importe quoi en paramètre pour si ça retourne bien faut
        */

        //exo2 insérer une voiture dans la BD
        $voiture = new Voiture("Renault","Bleu","JLREHUFR");
        $voiture->save();
        ?>
    </body>
</html>