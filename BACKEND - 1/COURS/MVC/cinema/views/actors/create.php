<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATION D'ACTEUR</title>
</head>

<body>
    <form action="<?= BASE ?>/ActorController/createActor" method="POST">
        <input type="text" name="prenom" placeholder="prenom"><br>
        <input type="text" name="nom" placeholder="nom"><br>
        <input type="text" name="photo" placeholder="photo"><br>
        <input type="submit" value="Valider"><br>
    </form>
</body>

</html>
