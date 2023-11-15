<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION DE FILMS</title>
</head>

<body>
    <form action="http://localhost/cinema/FilmController/editFilm" method="POST">
        <input type="text" name="titre" value="<?=$film['titre']?>"><br>
        <input type="date" name="date_sortie" value="<?=$film['date_sortie']?>"><br>
        <input type="text" name="affiche" value="<?=$film['affiche']?>"><br>
        <input type="hidden" name="id" value="<?=$film['Id_Film']?>">
        <input type="submit" value="Valider"><br>
    </form>
</body>

</html>