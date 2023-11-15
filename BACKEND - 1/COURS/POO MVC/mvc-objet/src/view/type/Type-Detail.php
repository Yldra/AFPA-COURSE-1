<?php
require __DIR__ . '/../header.php';
?>

<section class="section">
<?php if (isset($type)): ?>
    <h2>type Details :</h2>
            <p>Name: <?=$type->getName();?></p>

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

<?php endif;?>
</section>

</body>
</html>
