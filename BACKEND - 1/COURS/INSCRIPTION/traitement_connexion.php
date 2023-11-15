<?php
// Inclure le fichier de connexion à la base de données
require_once 'connect.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Récupérer les données du formulaire
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Requête pour récupérer l'utilisateur correspondant à l'email fourni
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $connexion->prepare($sql);
    $stmt->execute(['email' => $email]);
    $utilisateur = $stmt->fetch();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($utilisateur && password_verify($password, $utilisateur['password'])) {
        // Authentification réussie
        // Vous pouvez stocker les informations de l'utilisateur dans une session, par exemple $_SESSION['utilisateur'] = $utilisateur;
        // Ou rediriger vers une page d'accueil réservée aux membres, par exemple header("Location: accueil_membre.php");
        // Assurez-vous d'appeler session_start() au début de vos pages pour utiliser les sessions.

        // Rediriger l'utilisateur vers une page d'accueil réservée aux membres
        header("Location: home.php");
        exit();
    } else {
        // Échec de l'authentification
        // Vous pouvez rediriger vers la page de connexion avec un message d'erreur, par exemple header("Location: connexion.php?erreur=1");
        // Ou afficher un message d'erreur directement sur la page de connexion.
        // Vous pouvez également implémenter un mécanisme de verrouillage du compte après un certain nombre de tentatives infructueuses.
        // Assurez-vous d'échapper les données de sortie pour éviter les attaques XSS lors de l'affichage des messages d'erreur.

        // Rediriger l'utilisateur vers la page de connexion avec un message d'erreur
        header("Location: connexion.php?erreur=1");
        exit();
    }
}
?>
