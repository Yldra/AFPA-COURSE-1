<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>New type</h2>
    <form action="add-type" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="form-group">
            <input type="submit" value="Create">
        </div>
    </form>
</div>

</body>
</html>
