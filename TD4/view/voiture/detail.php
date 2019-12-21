<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détail de la voiture</title>
    </head>
    <body>
        <?php
            echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';
            echo '<p> De couleur ' . $v->getCouleur() . '.</p>';
            echo '<p> Et de la marque ' . $v->getMarque() . '.</p>';
        ?>
    </body>
</html>