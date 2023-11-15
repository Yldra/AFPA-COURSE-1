<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION DE GENRES</title>
</head>

<body>
    <form action="http://localhost/cinema/GenreController/editGenre" method="POST">
        <input type="text" name="type" value="<?=$genre['type']?>"><br>
        <input type="hidden" name="id" value="<?=$genre['Id_Genre']?>">
        <input type="submit" value="Valider"><br>
    </form>
</body>

</html>