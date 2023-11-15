<?php

/** Request to show all Actors **/
function listActor()
{
    require 'database.php';
    $req = ('SELECT * FROM acteur ');
    $sql = $pdo->prepare($req);
    $sql->execute();
    return $sql->fetchAll();
}

// Request to show one Actor
function oneActor($id)
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT * FROM acteur WHERE Id_Acteur = ?');
    $sql->execute([$id]);
    return $sql->fetch();
}

// Function for actor_film
function actorFilm($id)
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT * FROM acteur INNER JOIN joue ON acteur.Id_Acteur = joue.Id_Acteur WHERE joue.Id_Film = ?');
    $sql->execute([$id]);
    return $sql->fetchAll();
}

// Request to create a new Actor
function modelCreateActor($data)
{
    require 'database.php';
    $sql = $pdo->prepare('INSERT INTO acteur (prenom, nom, photo) VALUES (?, ?, ?)');
    $sql->execute([$data['prenom'], $data['nom'], $data['photo']]);
    header("location:http://localhost/cinema/ActorController/showActor");
}

// Request to edit an Actor
function modelEditActor($data)
{
    require 'database.php';
    $sql = $pdo->prepare('UPDATE acteur SET prenom = ?, nom = ?, photo = ? WHERE Id_Acteur = ?');
    $sql->execute([$data['prenom'], $data['nom'], $data['photo'], $data['id']]);
    // Redirect to the appropriate page
    header("location:http://localhost/cinema/ActorController/showActor");
    exit(); // Make sure to exit after the redirect
}

// Request to delete an Actor
function modelDeleteActor($delete)
{
    require 'database.php';
    $sql = $pdo->prepare('DELETE FROM acteur WHERE Id_Acteur = ?');
    $sql->execute([$delete['id']]);
    header("location:http://localhost/cinema/ActorController/showActor");
    exit();
}

function getFilmActors($filmId)
{

    try {
        require 'database.php';
        // Prepare and execute the query to fetch actor names for the given film
        $stmt = $pdo->prepare('
            SELECT acteur.*
            FROM acteur
            JOIN joue ON acteur.Id_Acteur = joue.Id_Acteur
            WHERE joue.Id_Film = ?'
        );

        $stmt->bindParam(1, $filmId, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch the actor names
        $actorNames = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($actorNames);

    } catch (PDOException $e) {
        // Handle database connection or query errors here
        return ['Database Error: ' . $e->getMessage()];
    }
}
