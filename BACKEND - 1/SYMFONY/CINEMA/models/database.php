<?php
// Database configuration
$dbhost = "localhost"; // Replace with your database host
$dbname = "cinema"; // Replace with your database name
$dbuser = "root"; // Replace with your database username
$password = ""; // Replace with your database password

// Other configuration settings
$siteName = "Yldra Favorite Cinema"; // Replace with your site's name or title
$baseUrl = "http://localhost/cinema/views/actors/show.php"; // Replace with your site's base URL

// You can add more configuration settings here as needed

// Set timezone (example: change to your specific timezone)
date_default_timezone_set('Europe/Paris');

try {
    // Establish a database connection
    $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . ";charset=UTF8", $dbuser, $password);
    // Set PDO to throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection errors gracefully
    die("Database connection failed: " . $e->getMessage());
}
