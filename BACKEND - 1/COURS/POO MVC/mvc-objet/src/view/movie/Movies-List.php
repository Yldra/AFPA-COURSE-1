<?php require __DIR__ . '/../header.php';?>

    <!-- Create Button -->
    <div>
    <form action="<?=BASE?>/form-add-movie" method="get">
        <input type="submit" value="Create">
    </form>
    </div>

    <?php if (!empty($movies)): ?>
    <h2>All movies :</h2>
        <?php foreach ($movies as $movie): ?>
            <div>
                <a href="<?=BASE?>/movie/<?=$movie->getId()?>">
                    <img src="<?=BASE?>/public/pictures/<?=$movie->getPoster()?>" width="150" height="205">
                    <br>
                    <?=$movie->getTitle() . ' ' . $movie->getDate()?>
                </a>
            </div>
            <hr>
        <?php endforeach;?>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif;?>

</body>
</html>
