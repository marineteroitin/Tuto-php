<?php
class Conf {
    static private $databases = array(
        'hostname' => 'localhost',
        'database' => 'tutoPHP',
        'login' => 'root',
        'password' => 'root'
    );
    static public function getLogin(){
        //en PHP l'indice d'un tableau n'est pas forcément un chiffre
        return self::$databases['login'];
    }
    static public function getHostname(){
        return self::$databases['hostname'];
    }
    static public function getDatabase(){
        return self::$databases['database'];
    }
    static public function getPassword(){
        return self::$databases['password'];
    }

}
?>