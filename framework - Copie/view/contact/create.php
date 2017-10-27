<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Créer un contact</title>
    </head>
    <body>
        <form  action="/contact/store" method="post">
            <input type="text" name="nom"placeholder="nom"><br>
            <input type="text" name="prenom"placeholder="prenom"><br>
            <input type="text" name="phone"placeholder="phone"><br>
            <input type="submit" value="envoyer">
        </form>
        
    </body>
</html>