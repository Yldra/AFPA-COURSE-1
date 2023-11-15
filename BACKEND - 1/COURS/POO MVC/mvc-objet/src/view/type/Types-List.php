<?php require __DIR__ . '/../header.php';?>

    <!-- Create Button -->
    <div>
    <form action="<?=BASE?>/form-add-type" method="get">
        <input type="submit" value="Create">
    </form>
    </div>

    <?php if (!empty($types)): ?>
    <h2>All types :</h2>
        <?php foreach ($types as $type): ?>
            <div>
                <a href="<?=BASE?>/type/<?=$type->getId()?>">
                    <?=$type->getName();?>
                </a>
                    <!-- Edit Button -->
    <form action="<?=BASE?>/form-update-type/<?=$type->getId()?>" method="get">
        <input type="hidden" name="id_type" value="<?=$type->getId()?>" />
        <input type="submit" value="Update">
    </form>

    <!-- Delete Button -->
    <form method="POST" action="<?=BASE?>/delete-type">
        <input type="hidden" name="id_type" value="<?=$type->getId()?>">
        <input type="submit" value="Delete">
    </form>
    <!-- POST->type=hidden value=// GET->form value=// no hidden with GET -->
            </div>
            <hr>
        <?php endforeach;?>
    <?php else: ?>
        <p>No types found.</p>
    <?php endif;?>

</body>
</html>