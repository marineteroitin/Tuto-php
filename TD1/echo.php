<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
    <body>
        Voici le résultat du script PHP :
        <?php
        // Ceci est un commentaire PHP sur une ligne
        /* Ceci est le 2ème type de commentaire PHP sur plusieurs lignes */

        // On met la chaine de caractères "hello" dans la variable 'texte'
        // Les noms de variables commencent pas $ en PHP
        $texte="hello world !";

        // On écrit le contenu de la variable 'texte' dans la page web
        echo $texte;

        $prenom='Marc';
        echo "Bonjour " .$prenom; 
        //echo "Bonjour $prenom";
        //echo 'Bonjour $prenom'; //n'affiche pas la valeur de $prenom car on utilise '' 

        //echo $prenom;
        //echo "$prenom";

        $marque='Nissan';
        $couleur='rouge';
        $immatriculation='ABCDEFG';
        //echo "<p> Voiture $immatriculation de marque $marque (couleur $couleur) </p>";
        
        $voiture=array(
            'marq' => 'Nissan',
            'coul' => 'rouge',
            'immat' => 'ABCDEFG' 
        );
        //je vérifie que j'ai rempli mon tableau, var_dump affiche les infos d'une variable
        //var_dump($voiture);
        echo ("<p> Voiture $voiture[immat] de marque $voiture[marq] (couleur $voiture[coul])</p>"); //ne pas mettre les clés entre ''

        $voiture0=array(
            'marque' => 'Nissan',
            'couleur' => 'rouge',
            'immatriculation' => 'ABCDEFG' 
        );
        $voiture1= array(
            'marque' => 'Méganne',
            'couleur' => 'blanche',
            'immatriculation' => 'AEIOUY' 
        );
        $voiture2=array(
            'marque' => 'Citroën',
            'couleur' => 'rouge',
            'immatriculation' => 'BCDFG' 
        );
        $voitureS=array(
            '0' => $voiture0,
            '1' => $voiture1,
            '2' => $voiture2
        );
        //vérifie que j'ai bien rempli $voitureS
        //var_dump($voitureS)
       echo "<ul>"; //ma balise en echo car je suis dans le php, balise ul pour une liste, on mettre balise li devant chq élément
        if (empty($voitureS)) {
            echo "Il n'y a aucune voiture";
         } else {
              foreach($voitureS as $cle => $valeur){
                  echo"<li> Voiture $valeur[immatriculation] de marque $valeur[marque] (couleur $valeur[couleur]) </li> \n"; //balise li pour avoir le point de liste
              }
         }
        echo "</ul>";
        ?>
     </body>
</html>