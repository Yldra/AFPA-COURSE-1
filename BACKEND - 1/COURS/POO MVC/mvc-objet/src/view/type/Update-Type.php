<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>Update type</h2>
    <form action="../update-type" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?=$type->getName()?>">
    </div>

    <!-- Hidden field to send type ID -->
    <input type="hidden" name="id_type" value="<?=$type->getId()?>" />

    <div class="form-group">
        <input type="submit" value="Update">
    </div>
</form>

</div>

</body>
</html>
