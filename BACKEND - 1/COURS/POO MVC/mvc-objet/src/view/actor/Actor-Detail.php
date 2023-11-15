<?php
require __DIR__ . '/../header.php';
?>

<section class="section">
<?php if (isset($actor)): ?>
    <h2>Actor Details :</h2>
        <img src="<?=BASE?>/public/pictures/<?=$actor->getPhoto()?>"/> <br>
            <p>First Name: <?=$actor->getFirstName();?></p>
            <p>Last Name: <?=$actor->getLastName();?></p>
            <p>Birth Date: <?=$actor->getBirthDate();?></p>
            <p>Current Media: PUT ANY FILM/SERIE HERE</p>

    <!-- Edit Button -->
    <form action="<?=BASE?>/form-update-actor/<?=$actor->getId()?>" method="get">
        <input type="hidden" name="id_actor" value="<?=$actor->getId()?>" />
        <input type="submit" value="Update">
    </form>

    <!-- Delete Button -->
    <form method="POST" action="<?=BASE?>/delete-actor">
        <input type="hidden" name="id_actor" value="<?=$actor->getId()?>">
        <input type="submit" value="Delete">
    </form>
    <!-- POST->type=hidden value=// GET->form value=// no hidden with GET -->

<?php endif;?>
</section>

</body>
</html>
