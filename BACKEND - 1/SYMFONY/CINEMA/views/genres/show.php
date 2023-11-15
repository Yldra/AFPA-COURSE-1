<?php
require __DIR__ . '/../header.php';
?>

<body>
    <p>==================================================</p>
    <h1>LISTE DE GENRES</h1>

    <form action="http://localhost/cinema/GenreController/showNewGenreForm" method="post">
        <input type="submit" value="Create">
    </form>
    <p>==================================================</p>

    <?php
foreach ($genres as $genre) {?>
            <h4><?=$genre['type']?></h4>

    <!-- Bouton Modifier -->
    <div>
        <br/>
        <form action="http://localhost/cinema/GenreController/showEditGenreForm/<?=$genre['Id_Genre']?>"
            method="post">
            <input type="hidden" name="Id_Genre" value="<?=$genre['Id_Genre']?>" />
            <input type="submit" value="Edit">
        </form>

    </div>
    <!-- Bouton Supprimer -->
    <div>
        <form action="http://localhost/cinema/GenreController/deleteGenre" method="post">

            <input type="hidden" name="id" value="<?=$genre['Id_Genre']?>" />
            <input type="submit" value="Delete">
        </form>
    </div>
    <p>==================================================</p>
    <?php }?>
</body>

</html>