<?php require __DIR__ . '/../header.php';?>

    <!-- Create Button -->
    <div>
    <form action="<?=BASE?>/form-add-director" method="get">
        <input type="submit" value="Create">
    </form>
    </div>

    <?php if (!empty($directors)): ?>
    <h2>All Directors :</h2>
        <?php foreach ($directors as $director): ?>
            <div>
                <a href="<?=BASE?>/director/<?=$director->getId()?>">
                    <img src="<?=BASE?>/public/pictures/<?=$director->getPhoto()?>" width="150" height="205">
                    <br>
                    <?=$director->getFirstName() . ' ' . $director->getLastName()?>
                </a>
            </div>
            <hr>
        <?php endforeach;?>
    <?php else: ?>
        <p>No directors found.</p>
    <?php endif;?>

</body>
</html>
