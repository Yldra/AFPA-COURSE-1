<?php
require __DIR__ . '/../header.php';
?>

<body>
    <p>==================================================</p>
    <h1>LISTE D'ACTEURS</h1>

    <form action="http://localhost/cinema/ActorController/showNewActorForm" method="post">
        <input type="submit" value="Create">
    </form>
    <p>==================================================</p>

    <?php
foreach ($actors as $actor) {?>
            <h4><?=$actor['prenom']?>
            <?=$actor['nom']?></h4>
        <img src="http://localhost/cinema/views/pictures/<?=$actor['photo']?>" height="189" width="126">

    <!-- Bouton Modifier -->
    <div>
        <br/>
        <form action="http://localhost/cinema/ActorController/showEditActorForm/<?=$actor['Id_Acteur']?>" method="post">
            <input type="hidden" name="Id_Acteur" value="<?=$actor['Id_Acteur']?>" />
            <!-- Other form fields go here -->
            <input type="submit" value="Edit">
        </form>

    </div>
    <!-- Bouton Supprimer -->
    <div>
        <form action="http://localhost/cinema/ActorController/deleteActor" method="post">

            <input type="hidden" name="id" value="<?=$actor['Id_Acteur']?>" />
            <input type="submit" value="Delete">
        </form>
    </div>
    <p>==================================================</p>
    <?php }?>
</body>

</html>