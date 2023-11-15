<?php

function modelGetFilm($id)
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT film.* FROM film WHERE Id_Film=?');
    $sql->execute([$id]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function modelListFilm()
{
    require 'database.php';
    $sql = $pdo->prepare('SELECT film.Id_Film, film.titre, film.affiche FROM film');
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function modelCreateFilm($data)
{
    require 'database.php';
    $sql = $pdo->prepare('INSERT INTO film (titre, date_sortie, affiche) VALUES (?, ?, ?)');
    $sql->execute([$data['titre'], $data['date_sortie'], $data['affiche']]);
    header("location:http://localhost/cinema/FilmController/showFilm");
}
