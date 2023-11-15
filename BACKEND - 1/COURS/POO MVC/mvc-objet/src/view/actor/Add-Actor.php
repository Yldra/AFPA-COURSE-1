<?php require __DIR__ . '/../header.php';?>

<div class="container">
    <h2>New Actor</h2>
    <form action="add-actor" method="post">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>

        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date">
        </div>

        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="text" id="photo" name="photo">
        </div>

        <div class="form-group">
            <input type="submit" value="Create">
        </div>
    </form>
</div>

</body>
</html>
