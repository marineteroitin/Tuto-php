<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
       
        <!--On inclut les fichiers de la classe PHP avec require_once pour éviter qu'ils soient inclus plusieurs fois-->
        <?php require_once ("Conf.php");?>
    </head>
    <body> 
        <?php
            //On affiche le login de la base de données
            echo Conf::getLogin();
            //en PHP on appelle une méthode statique à partir du nom de sa classe comme en java mais avec :: au lieu de .
            // les méthodes classiques (non statiques) sont appellées avec -> en PHP
    
            //je test mes getters
            echo Conf::getHostname();
            echo Conf::getDAtabase();
            echo Conf::getPassword();
        ?>
    </body>
</html>