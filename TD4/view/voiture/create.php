<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="get" action="">
            <fieldset>
                <legend>Mon formulaire: </legend>
                <p> 
                    <!--for dans label doit contenir l'id d'un input pour qu'un clic sur le texte du label nous amène directement ds ce champ-->
                    <label for="immat_id">Immatriculation </label>:
                    <input type="text" placeholder="Ex: 256AB34" name="immat" id="immat_id" required/>
                </p> <!--placeholder sert à écrire une valeure par défaut-->

                <p>
                        <label for="marque_id">Marque</label>:
                        <input type="text" placeholder="Ex: Nissan" name="marque" id="marque_id" required/>
                    </p>
                <p>
                    <label for="couleur_id">Couleur</label>:
                    <input type="text" placeholder="Ex: Rouge" name="couleur" id="couleur_id" required />
                </p>
                
                <p>
                    <input type="hidden"  name='action' value="created" />
                    <input type="submit" value="Envoyer" />
                </p><!--quand l'utilisateur va cliquer sur Envoyer la page creerVoiture.php va se charger (chmp action) et les info vont être transmises dans le query string-->
            </fieldset>
        </form>

     </body>
</html>