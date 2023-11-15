<?php

require __DIR__ . '/../header.php';

?>

<p>==================================================</p>
    <h1>LISTE DES FILMS</h1>

    <form action="http://localhost/cinema/FilmController/showNewFilmForm" method="post">
        <input type="submit" value="Create">
    </form>
    <p>==================================================</p>

    <?php
foreach ($films as $film) {?>
            <h3><?=$film['titre']?></h3>
        <img src="http://localhost/cinema/views/pictures/<?=$film['affiche']?>" height="189" width="126"><br>
        <a href="<?=BASE?>/FilmController/showFilm/<?=$film['Id_Film']?>">Fiche du Film</a><br>

    <!-- Bouton Modifier -->
    <div>
        <br/>
        <form action="http://localhost/cinema/DirectorController/showEditDirectorForm/<?=$director['Id_Realisateur']?>"
            method="post">
            <input type="hidden" name="Id_Realisateur" value="<?=$director['Id_Realisateur']?>" />
            <input type="submit" value="Edit">
        </form>

    </div>
    <!-- Bouton Supprimer -->
    <div>
        <form action="http://localhost/cinema/DirectorController/deleteDirector" method="post">

            <input type="hidden" name="id" value="<?=$director['Id_Realisateur']?>" />
            <input type="submit" value="Delete">
        </form>
    </div>
    <p>==================================================</p>
    <?php }?>
</body>