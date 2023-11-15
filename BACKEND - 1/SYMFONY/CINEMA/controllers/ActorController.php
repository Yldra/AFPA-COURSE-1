<?php

/**
 * URL http://localhost/cinema/ActorController/showActor
 * showActor() est appelée par le controlleur et utilise la fonction listActor() pour
 * parcourir la table 'acteur' dans le fichier 'show.php'.
 * require('views/actors/show.php') permet d'afficher le formulaire.
// Function to show all actors */
function showActor()
{
    require 'models/ActorModel.php';
    $actors = listActor();
    require 'views/actors/show.php';
}

/**
 * URL: http://localhost/cinema/ActorController/showNewActorForm
 * showNewActorForm() est appelée par le controlleur qui ouvre le fichier 'create.php'
 * createActor() fait appel au fichier 'ActorModel.php' qui sera exécuter par le formulaire de 'create.php'
 * qui lui même execute la fonction modelCreateActor($_POST)
 * La fonction modelCreateActor($_POST), permet d'executer la requete SQL,
 * le $_POST permet de récuperer la valeur de name qui se trouve dans le formulaire du fichier create.php
// Function to create a new actor (show the form) */
function showNewActorForm()
{
    require 'views/actors/create.php';
}
/**
 * URL: http://localhost/cinema/ActorController/createActor
// Function to create a new actor (form submission, after clicking "Submit" on the create form) */
function createActor()
{
    require 'models/ActorModel.php';
    modelCreateActor($_POST);
}

/**
 * URL: http://localhost/cinema/ActorController/showEditActorForm
 * showEditActorForm($id) est appelée par le controlleur, elle a pour paramettre ($id) qui permet de récupéré un identifiant,
 * Elle fait appel au fichier 'ActorModel.php' et deux fonctions:
 *  - La fonction listActor() est executée par le bouton submit dans le formulaire du fichier 'edit.php'
 *  - La fonction oneActor($id) est utilisé dans le fichier 'edit.php',
 * Le ($id) permet de recupérer l'Id_Acteur dans la table acteur
// Function to edit an actor (show the edit form, assuming $id is the actor's ID) */
function showEditActorForm($id)
{
    require 'models/ActorModel.php';
    $actor = oneActor($id);
    require 'views/actors/edit.php';
}

/**
 * URL: http://localhost/cinema/ActorController/editActor
 * La fonction editActor() fait appel au fichier ActorModel.php
 * Cette fonction execute la fonction modelEditActor($_POST),
 * La fonction modelEditActor($_POST) est exécutée par le formulaire qui se trouve dans le fichier 'edit.php'
// Function to edit an actor (form submission, after clicking "Update" on the edit form) */
function editActor()
{
    require 'models/ActorModel.php';
    modelEditActor($_POST);
}

/**
 * deleteActor($id) est appelée par le controlleur , elle a pour paramettre ($id) qui permet de récupéré un identifiant,
 * Elle fait appel au fichier 'ActorModel.php' et une fonction:
 *  - La Fonction modelDeleteActor($_POST) est exécuté par le bouton submit dans le formulaire du fichier 'show.php'
// Function to delete an actor (assuming $id is the actor's ID) */
function deleteActor()
{
    require 'models/ActorModel.php';
    modelDeleteActor($_POST);
}
