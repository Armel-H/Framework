<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier un blog</title>
    </head>
    <body>
    
        <form  action="/blog/update/?id=<?=$GLOBALS['blog']->id ?>" method="post">
            <input type="text" name="titre" value="<?= $GLOBALS['blog']->titre ?>" placeholder="titre"><br>
            <input type="text" name="auteur" value="<?= $GLOBALS['blog']->auteur ?>" placeholder="auteur"><br>
            <textarea name="article"  rows="8" cols="80"><?= $GLOBALS['blog']->article ?></textarea>
            <input type="submit" value="envoyer">
        </form>

    </body>
</html>
