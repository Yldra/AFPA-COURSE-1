<?php
// Inclure le fichier de connexion à la base de données
require_once 'connect.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    // Vous pouvez ajouter des validations supplémentaires ici, par exemple, vérifier si l'email est unique, etc.

    // Insérer les données dans la base de données
    $sql = "INSERT INTO users (nom, prenom, email, nickname, password) VALUES (:nom, :prenom, :email, :nickname, :password)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'nickname' => $nickname,
        'password' => password_hash($password, PASSWORD_DEFAULT), // Hashage du mot de passe pour des raisons de sécurité
    ]);

    // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
    header("Location: confirmation_inscription.php");
    exit();
}
?>
