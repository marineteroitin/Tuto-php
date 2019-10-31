<?php require_once ("Conf.php");

class Model {

    public static $pdo;


    public static function Init(){ //créer une connexion à notre base de donnée -> utiliser constructeur PDO
        //les variables se mettent dans la fonction !!! hein Debeir :P
        $hostname = Conf::getHostname();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();

        //try ... catch permert de lever les exeptions

        try{
            //connection à la base de données, le dernier argument sert à ce que tt les chaines de caractères en entrée et sortie de MySQL soit dans le codage UTF-8
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            //On active le mode d'affichage des erreurs, et le lancement d'exeptione en cas d'erreurs
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOExeption $e){
            echo $e->getMessage(); //affiche un message d'erreur
            die();
        }
          
    }
}
//on veut que Model soit initialisé juste après sa déclaration
Model::Init();
?>
