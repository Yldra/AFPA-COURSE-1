<?php
require __DIR__ . '/../header.php';
?>

<section class="section">
<?php if (isset($movie)): ?>
    <h2>movie Details :</h2>
        <img src="<?=BASE?>/public/pictures/<?=$movie->getPoster()?>"/> <br>
            <p>Title: <?=$movie->getTitle();?></p>
            <p>Release Date: <?=$movie->getDate();?></p>

    <!-- Edit Button -->
    <form action="<?=BASE?>/form-update-movie/<?=$movie->getId()?>" method="get">
        <input type="hidden" name="id_movie" value="<?=$movie->getId()?>" />
        <input type="submit" value="Update">
    </form>

    <!-- Delete Button -->
    <form method="POST" action="<?=BASE?>/delete-movie">
        <input type="hidden" name="id_movie" value="<?=$movie->getId()?>">
        <input type="submit" value="Delete">
    </form>
    <!-- POST->type=hidden value=// GET->form value=// no hidden with GET -->

<?php endif;?>
</section>

</body>
</html>
