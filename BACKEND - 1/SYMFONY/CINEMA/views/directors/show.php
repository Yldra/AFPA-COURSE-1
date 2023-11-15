<?php
require __DIR__ . '/../header.php';
?>

<body>
    <p>==================================================</p>
    <h1>LISTE DE REALISATEURS</h1>

    <form action="http://localhost/cinema/DirectorController/showNewDirectorForm" method="post">
        <input type="submit" value="Create">
    </form>
    <p>==================================================</p>

    <?php
foreach ($directors as $director) {?>
            <h4><?=$director['prenom']?>
                <?=$director['nom']?></h4>
        <img src="http://localhost/cinema/views/pictures/<?=$director['photo']?>" height="189" width="126">

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

</html>