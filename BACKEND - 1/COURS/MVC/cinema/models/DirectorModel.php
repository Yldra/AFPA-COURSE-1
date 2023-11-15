<?php

/** Request to show all Directors **/
function listDirector()
{
    require 'database.php';
    $req = ('SELECT * FROM realisateur ');
    $sql = $pdo->prepare($req);
    $sql->execute();
    return $sql->fetchAll();
}

// Request to show one Director
function oneDirector($id)
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT * FROM realisateur WHERE Id_Realisateur = ?');
    $sql->execute([$id]);
    return $sql->fetch();
}

// Request to create a new Director
function modelCreateDirector($data)
{
    require 'database.php';
    $sql = $pdo->prepare('INSERT INTO realisateur (prenom, nom, photo) VALUES (?, ?, ?)');
    $sql->execute([$data['prenom'], $data['nom'], $data['photo']]);
    header("location:http://localhost/cinema/DirectorController/showDirector");
}

// Request to edit a Director
function modelEditDirector($data)
{
    require 'database.php';
    $sql = $pdo->prepare('UPDATE realisateur SET prenom = ?, nom = ?, photo = ? WHERE Id_Realisateur = ?');
    $sql->execute([$data['prenom'], $data['nom'], $data['photo'], $data['id']]);
    // Redirect to the appropriate page
    header("location:http://localhost/cinema/DirectorController/showDirector");
    exit(); // Make sure to exit after the redirect
}

// Request to delete a Director
function modelDeleteDirector($delete)
{
    require 'database.php';
    $sql = $pdo->prepare('DELETE FROM realisateur WHERE Id_Realisateur = ?');
    $sql->execute([$delete['id']]);
    header("location:http://localhost/cinema/DirectorController/showDirector");
    exit();
}

function getDirectorName($directorId)
{
    try {
        require 'database.php';

        // Prepare and execute the query to fetch director's name
        $stmt = $pdo->prepare('SELECT * FROM realisateur WHERE Id_Realisateur = ?');
        $stmt->bindParam(1, $directorId, PDO::PARAM_INT); // Use 1 as the parameter index
        $stmt->execute();

        // Fetch the director's name
        $directorInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the director info is available
        if ($directorInfo) {
            return $directorInfo;} 
        else {
            return 'Unknown Director';
        }
    } catch (PDOException $e) {
        // Handle database connection or query errors here
        return 'Database Error: ' . $e->getMessage();
    }
}
