
        <?php
        //htmlspecialchars si on rentre des caractères protégés (<>&"' etc) html que ça écrive pas du code au lieu de la variable demandée
            echo '<p> Voiture d\'immatriculation ' . htmlspecialchars($v->getImmatriculation()) . '.</p>';
            echo '<p> De couleur ' . htmlspecialchars($v->getCouleur()) . '.</p>';
            echo '<p> Et de la marque ' . htmlspecialchars($v->getMarque()) . '.</p>';
        ?>
