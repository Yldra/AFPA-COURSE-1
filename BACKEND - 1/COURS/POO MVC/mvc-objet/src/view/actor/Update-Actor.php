<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>Update Actor</h2>
    <form action="../update-actor" method="post">
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?=$actor->getFirstName()?>" required>
    </div>

    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?=$actor->getLastName()?>" required>
    </div>

    <div class="form-group">
        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" value="<?=$actor->getBirthDate()?>">
    </div>

    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?=$actor->getPhoto()?>">
    </div>

    <!-- Hidden field to send actor ID -->
    <input type="hidden" name="id_actor" value="<?=$actor->getId()?>" />

    <div class="form-group">
        <input type="submit" value="Update">
    </div>
</form>

</div>

</body>
</html>
