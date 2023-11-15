<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION DE REALISATEUR</title>
</head>

<body>
    <form action="http://localhost/cinema/DirectorController/editDirector" method="POST">
        <input type="text" name="prenom" value="<?=$director['prenom']?>"><br>
        <input type="text" name="nom" value="<?=$director['nom']?>"><br>
        <input type="text" name="photo" value="<?=$director['photo']?>"><br>
        <input type="hidden" name="id" value="<?=$director['Id_Realisateur']?>">
        <input type="submit" value="Valider"><br>
    </form>
</body>

</html>