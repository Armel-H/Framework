<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Créer un blog</title>
    </head>
    <body>
        <form  action="/blog/store" method="post">
            <input type="text" name="titre"placeholder="titre"><br>
            <input type="text" name="auteur"placeholder="auteur"><br>
            <textarea name="articles" rows="8" cols="80"></textarea>
            <input type="submit" value="envoyer">
        </form>

    </body>
</html>
