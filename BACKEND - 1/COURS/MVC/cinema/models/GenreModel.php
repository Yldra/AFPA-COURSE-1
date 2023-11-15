<?php

/** Request to show all Genres **/
function listGenre()
{
    require 'database.php';
    $req = ('SELECT * FROM genre ');
    $sql = $pdo->prepare($req);
    $sql->execute();
    return $sql->fetchAll();
}

// Request to show one Genre
function oneGenre($id)
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT * FROM genre WHERE Id_Genre = ?');
    $sql->execute([$id]);
    return $sql->fetch();
}

// Request to create a new Genre
function modelCreateGenre($data)
{
    require 'database.php';
    $sql = $pdo->prepare('INSERT INTO genre (type) VALUES (?)');
    $sql->execute([$data['type']]);
    header("location:http://localhost/cinema/GenreController/showGenre");
}

// Request to edit a Genre
function modelEditGenre($data)
{
    require 'database.php';
    $sql = $pdo->prepare('UPDATE genre SET type = ? WHERE Id_Genre = ?');
    $sql->execute([$data['type'], $data['id']]);
    // Redirect to the appropriate page
    header("location:http://localhost/cinema/GenreController/showGenre");
    exit(); // Make sure to exit after the redirect
}

// Request to delete a Genre
function modelDeleteGenre($delete)
{
    require 'database.php';
    $sql = $pdo->prepare('DELETE FROM genre WHERE Id_Genre = ?');
    $sql->execute([$delete['id']]);
    header("location:http://localhost/cinema/GenreController/showGenre");
    exit();
}
