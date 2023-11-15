<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>New movie</h2>
    <form action="add-movie" method="post">

        <div class="form-group">
            <label for="poster">Poster:</label>
            <input type="date" id="poster" name="poster">
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="release_date">Release Date:</label>
            <input type="text" id="release_date" name="release_date">
        </div>

        <div class="form-group">
            <input type="submit" value="Create">
        </div>
    </form>
</div>

</body>
</html>
