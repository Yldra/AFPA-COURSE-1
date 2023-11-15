<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION D'ACTEUR</title>
</head>

<body>
    <form action="http://localhost/cinema/ActorController/editActor" method="POST">
        <input type="text" name="prenom" value="<?=$actor['prenom']?>"><br>
        <input type="text" name="nom" value="<?=$actor['nom']?>"><br>
        <input type="text" name="photo" value="<?=$actor['photo']?>"><br>
        <input type="hidden" name="id" value="<?=$actor['Id_Acteur']?>">
        <input type="submit" value="Valider"><br>
    </form>
</body>

</html>