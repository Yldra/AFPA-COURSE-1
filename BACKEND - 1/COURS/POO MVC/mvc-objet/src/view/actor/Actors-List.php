<?php require __DIR__ . '/../header.php';?>

    <!-- Create Button -->
    <div>
    <form action="<?=BASE?>/form-add-actor" method="get">
        <input type="submit" value="Create">
    </form>
    </div>

    <?php if (!empty($actors)): ?>
    <h2>All Actors :</h2>
        <?php foreach ($actors as $actor): ?>
            <div>
                <a href="<?=BASE?>/actor/<?=$actor->getId()?>">
                    <img src="<?=BASE?>/public/pictures/<?=$actor->getPhoto()?>" width="150" height="205">
                    <br>
                    <?=$actor->getFirstName() . ' ' . $actor->getLastName()?>
                </a>
            </div>
            <hr>
        <?php endforeach;?>
    <?php else: ?>
        <p>No actors found.</p>
    <?php endif;?>

</body>
</html>
