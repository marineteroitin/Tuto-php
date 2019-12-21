<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v)
            echo '<p> Voiture d\'immatriculation <a href="index.php?action=read&immat=' . $v->getImmatriculation() . '">' . $v->getImmatriculation() . '</a>
            <a href="index.php?action=delete&immat=' . $v->getImmatriculation() . '"> Supprimer cette voiture </a></p>';
        
        ?>
    </body>
</html>