<?php

class File {

    public static function build_path($path_array) {
        // $ROOT_FOLDER (sans slash à la fin) vaut /Applications/MAMP/htdocs/Tuto php/TD4-5
        $DS = DIRECTORY_SEPARATOR;
        //  __DIR__ . $DS . ".." = /Applications/MAMP/htdocs/Tuto php/TD4-5 ===> ce qu'on veut
        //  __DIR__  = /Applications/MAMP/htdocs/Tuto php/TD4-5/lib ===> ce qu'on veut pas
        $ROOT_FOLDER = __DIR__ . $DS . "..";
        return $ROOT_FOLDER . $DS . join($DS, $path_array);
    }

}


?>