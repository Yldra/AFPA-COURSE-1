<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>Update movie</h2>
    <form action="../update-movie" method="post">
    <div class="form-group">
        <label for="poster">Poster:</label>
        <input type="text" id="poster" name="poster" value="<?=$movie->getPoster()?>">
    </div>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?=$movie->getTitle()?>" required>
    </div>

    <div class="form-group">
        <label for="release_date">Release Date:</label>
        <input type="date" id="release_date" name="release_date" value="<?=$movie->getDate()?>">
    </div>

    <!-- Hidden field to send movie ID -->
    <input type="hidden" name="id_movie" value="<?=$movie->getId()?>" />

    <div class="form-group">
        <input type="submit" value="Update">
    </div>
</form>

</div>

</body>
</html>
