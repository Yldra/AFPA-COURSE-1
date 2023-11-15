<?php

/**
 * URL http://localhost/cinema/DirectorController/showDirector
 * showDirector() est appelée par le controlleur et utilise la fonction listDirector() pour
 * parcourir la table 'realisateur' dans le fichier 'show.php'.
 * require('views/directors/show.php') permet d'afficher le formulaire.
// Function to show all directors */
function showDirector()
{
    require 'models/DirectorModel.php';
    $directors = listDirector();
    require 'views/directors/show.php';
}

/**
 * URL: http://localhost/cinema/DirectorController/showNewDirectorForm
 * showNewDirectorForm() est appelée par le controlleur qui ouvre le fichier 'create.php'
 * createDirector() fait appel au fichier 'DirectorModel.php' qui sera exécuter par le formulaire de 'create.php'
 * qui lui même execute la fonction modelCreateDirector($_POST)
 * La fonction modelCreateDirector($_POST), permet d'executer la requete SQL,
 * le $_POST permet de récuperer la valeur de name qui se trouve dans le formulaire du fichier create.php
// Function to create a new director (show the form) */
function showNewDirectorForm()
{
    require 'views/directors/create.php';
}
/**
 * URL: http://localhost/cinema/DirectorController/createActor
// Function to create a new director (form submission, after clicking "Submit" on the create form) */
function createDirector()
{
    require 'models/DirectorModel.php';
    modelCreateDirector($_POST);
}

/**
 * URL: http://localhost/cinema/DirectorController/showEditDirectorForm
 * showEditDirectorForm($id) est appelée par le controlleur, elle a pour paramettre ($id) qui permet de récupéré un identifiant,
 * Elle fait appel au fichier 'DirectorModel.php' et deux fonctions:
 *  - La fonction listDirector() est executée par le bouton submit dans le formulaire du fichier 'edit.php'
 *  - La fonction oneDirector($id) est utilisé dans le fichier 'edit.php',
 * Le ($id) permet de recupérer l'Id_Realisateur dans la table acteur
// Function to edit a director (show the edit form, assuming $id is the director's ID) */
function showEditDirectorForm($id)
{
    require 'models/DirectorModel.php';
    $director = oneDirector($id);
    require 'views/directors/edit.php';
}

/**
 * URL: http://localhost/cinema/DirectorController/editDirector
 * La fonction editDirector() fait appel au fichier DirectorModel.php
 * Cette fonction execute la fonction modelEditDirector($_POST),
 * La fonction modelEditDirector($_POST) est exécutée par le formulaire qui se trouve dans le fichier 'edit.php'
// Function to edit a director (form submission, after clicking "Update" on the edit form) */
function editDirector()
{
    require 'models/DirectorModel.php';
    modelEditDirector($_POST);
}

/**
 * deleteDirector($id) est appelée par le controlleur , elle a pour paramettre ($id) qui permet de récupéré un identifiant,
 * Elle fait appel au fichier 'DirectorModel.php' et une fonction:
 *  - La Fonction modelDeleteDirector($_POST) est exécuté par le bouton submit dans le formulaire du fichier 'show.php'
// Function to delete a director (assuming $id is the director's ID) */
function deleteDirector()
{
    require 'models/DirectorModel.php';
    modelDeleteDirector($_POST);
}
