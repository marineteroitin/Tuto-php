
        <?php
        foreach ($tab_v as $v)
        //rawurlencode permet de régler les pb si l'utilisateur rentre des = & etc qui changeraient le sens de l'url
            echo '<p> Voiture d\'immatriculation <a href="index.php?action=read&immat=' . rawurlencode($v->getImmatriculation()) . '">' . htmlspecialchars($v->getImmatriculation()) . '</a>
            <a href="index.php?action=update&immat=' . rawurlencode($v->getImmatriculation()) . '"> Modifier cette voiture </a>
            <a href="index.php?action=delete&immat=' . rawurlencode($v->getImmatriculation()) . '"> Supprimer cette voiture </a></p>';
        
        ?>
