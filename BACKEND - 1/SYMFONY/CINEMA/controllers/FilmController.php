<?php

// URL http://localhost/cinema/FilmController/showFilm
function showFilm($id)
{
    require 'models/FilmModel.php';
    require 'models/DirectorModel.php';
    require 'models/GenreModel.php';
    require 'models/ActorModel.php';

    $film = modelGetFilm($id);

    $director = getDirectorName($film['Id_Realisateur']);

    $genre = oneGenre($film['Id_Genre']);

    $actors = getFilmActors($film['Id_Film']);

    require 'views/films/show.php';

}

function listFilm()
{
    require 'models/FilmModel.php';
    $films = modelListFilm();
    require 'views/films/list.php';
}

// Function to create a new film (show the form) */
function createFilmForm()
{
    require 'views/films/create.php';
}

// Function to create a new film (form submission, after clicking "Submit" on the create form) */
function createFilm()
{
    require 'models/FilmModel.php';
    modelCreateFilm($_POST);
}
