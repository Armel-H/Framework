<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier un contact</title>
    </head>
    <body>
        <form  action="/contact/update/?id=<?=$GLOBALS['contact']->id ?>" method="post">
            <input type="text" name="nom" value="<?= $GLOBALS['contact']->nom ?>" placeholder="nom"><br>
            <input type="text" name="prenom" value="<?= $GLOBALS['contact']->prenom ?>" placeholder="prénom"><br>
            <input type="text" name="phone" value="<?= $GLOBALS['contact']->phone ?>" placeholder="téléphone"><br>
            <input type="submit" value="envoyer">
        </form>
        
    </body>
</html>
