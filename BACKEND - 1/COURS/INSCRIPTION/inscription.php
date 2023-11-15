<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
</head>
<body>

    <h2>Inscription</h2>
    <form action="traitement_inscription.php" method="post">

        <label for="id_role">Role :</label>
        <select name="role" required>
            <option value="">--Choose a Role--</option>
            <option value="admin">ADMIN</option>
            <option value="visitor">VISITOR</option>
        </select><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="password">MdP :</label>
        <input type="password" name="password" required><br>

        <label for="nickname">Pseudo :</label>
        <input type="text" name="nickname" required><br>

        <input type="submit" value="Inscription">
    </form>

</body>
</html>
