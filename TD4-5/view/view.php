<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <!--nav permet de faire la barre de menu en haut -->
        <nav class="crumbs">
            <ul>
                <li><a center='left-align' href='index.php?action=readAll'> Page d'accueil des voitures </a></li>
                <li><a center='center-align' href='index.php?action=readAll&controller=utilisataeur'> Page d'accueil des utilisateurs </a></li>
                <li><a right-align href='index.php?action=readAll&controller=trajet'> Page d'accueil des trajets </a></li>
            </ul>
        </nav>
<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
$filepath = File::build_path(array("view", $controller, "$view.php"));
require $filepath;
?>
<p style="border: 1px solid black;text-align:right;padding-right:1em;">
  Site de covoiturage de Marine Téroitin
</p>
    </body>
</html>