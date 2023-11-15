<?php

// Informations d'accès à la base de données
$hostname = 'localhost'; // Remplacez par l'adresse du serveur MySQL si nécessaire
$username = 'root'; // Remplacez par le nom d'utilisateur de la base de données
$password = ''; // Remplacez par le mot de passe de la base de données
$dbname = 'projet_perso'; // Remplacez par le nom de votre base de données

try {
    // Créez une instance de la classe PDO pour établir la connexion à la base de données
    $connexion = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

    // Configuration des options PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs sous forme d'exceptions
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Récupération des résultats sous forme de tableau associatif
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Désactivation de l'émulation des requêtes préparées

    // Vous pouvez ajouter d'autres options PDO si nécessaire, comme le jeu de caractères, etc.

} catch (PDOException $e) {
    // En cas d'échec de la connexion, affichez l'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
