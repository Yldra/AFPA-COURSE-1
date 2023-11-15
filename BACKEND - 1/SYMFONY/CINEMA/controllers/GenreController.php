<?php

/**
 * URL http://localhost/cinema/GenreController/showGenre
// Function to show all genres */
function showGenre()
{
    require 'models/GenreModel.php';
    $genres = listGenre();
    require 'views/genres/show.php';
}

/**
 * URL: http://localhost/cinema/GenreController/showNewGenreForm
// Function to create a new genre (show the form) */
function showNewGenreForm()
{
    require 'views/genres/create.php';
}

/**
 * URL: http://localhost/cinema/GenreController/createGenre
// Function to create a new genre (form submission, after clicking "Submit" on the create form) */
function createGenre()
{
    require 'models/GenreModel.php';
    modelCreateGenre($_POST);
}

/**
 * URL: http://localhost/cinema/GenreController/showEditGenreForm
// Function to edit a director (show the edit form, assuming $id is the director's ID) */
function showEditGenreForm($id)
{
    require 'models/GenreModel.php';
    $genre = oneGenre($id);
    require 'views/genres/edit.php';
}

/**
 * URL: http://localhost/cinema/GenreController/editGenre
// Function to edit a genre (form submission, after clicking "Update" on the edit form) */
function editGenre()
{
    require 'models/GenreModel.php';
    modelEditGenre($_POST);
}

/**
// Function to delete a genre (assuming $id is the genre ID) */
function deleteGenre()
{
    require 'models/GenreModel.php';
    modelDeleteGenre($_POST);
}
