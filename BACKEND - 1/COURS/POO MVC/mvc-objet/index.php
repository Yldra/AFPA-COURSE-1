<?php
require_once "vendor/autoload.php";

define('BASE', 'http://localhost/MVC-objet');

use mvcobjet\Controller\BackController;
use mvcobjet\Controller\FrontController;

$fc = new FrontController();
$bc = new BackController();

$base = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$route = new \Klein\Klein();

// ! HOME SECTION
$route->respond('GET', '/home', function () use ($fc) {
    $fc->showHome();
});
// ! ACTOR SECTION
// ALL ACTORS
$route->respond('GET', '/actors', function () use ($fc) {
    $fc->showAllActors();
});
// ONE ACTOR
$route->respond('GET', '/actor/[:id_actor]', function ($request) use ($fc) {
    $fc->showOneActor($request->id_actor);
});
// FORM ADD ACTOR
$route->respond('GET', '/form-add-actor', function () use ($fc) {
    $fc->formAddActor();
});
// ADD ACTOR
$route->respond('POST', '/add-actor', function ($request) use ($bc) {
    $bc->addActor($request->paramsPost());
});
// FORM UPDATE ACTOR
$route->respond('GET', '/form-update-actor/[:id_actor]', function ($request) use ($fc) {
    $fc->formUpdateActor(($request->id_actor));
});
// UPDATE ACTOR
$route->respond('POST', '/update-actor', function ($request) use ($bc) {
    $bc->updateActor($request->paramsPost());
});
// DELETE ACTOR
$route->respond('POST', '/delete-actor', function ($request) use ($bc) {
    $bc->deleteActor($request->paramsPost());
});

// ! DIRECTOR SECTION
// ALL DIRECTORS
$route->respond('GET', '/directors', function () use ($fc) {
    $fc->showAllDirectors();
});
// ONE DIRECTOR
$route->respond('GET', '/director/[:id_director]', function ($request) use ($fc) {
    $fc->showOneDirector($request->id_director);
});
// FORM ADD DIRECTOR
$route->respond('GET', '/form-add-director', function () use ($fc) {
    $fc->faddDirector();
});
// ADD DIRECTOR
$route->respond('POST', '/add-director', function ($request) use ($bc) {
    $bc->addDirector($request->paramsPost());
});
// FORM UPDATE DIRECTOR
$route->respond('GET', '/form-update-director/[:id_director]', function ($request) use ($fc) {
    $fc->formUpdateDirector(($request->id_director));
});
// UPDATE DIRECTOR
$route->respond('POST', '/update-director', function ($request) use ($bc) {
    $bc->updateDirector($request->paramsPost());
});
// DELETE DIRECTOR
$route->respond('POST', '/delete-director', function ($request) use ($bc) {
    $bc->deleteDirector($request->paramsPost());
});

// ! TYPE SECTION
// ALL TYPES
$route->respond('GET', '/types', function () use ($fc) {
    $fc->showTypes(); // Affiche tous les types
});
// ONE TYPE
$route->respond('GET', '/type/[:id_type]', function ($request) use ($fc) {
    $fc->showTypes($request->id_type); // Affiche un type spécifique si l'id_type est fourni
});
// FORM ADD TYPE
$route->respond('GET', '/form-add-type', function () use ($fc) {
    $fc->faddType();
});
// ADD TYPE
$route->respond('POST', '/add-type', function ($request) use ($bc) {
    $bc->addType($request->paramsPost());
});
// FORM UPDATE TYPE
$route->respond('GET', '/form-update-type/[:id_type]', function ($request) use ($fc) {
    $fc->formUpdateType($request->id_type);
});
// UPDATE TYPE
$route->respond('POST', '/update-type', function ($request) use ($bc) {
    $bc->updateType($request->paramsPost());
});
// DELETE TYPE
$route->respond('POST', '/delete-type', function ($request) use ($bc) {
    $bc->deleteType($request->paramsPost());
});

// ! MOVIE SECTION
$route->respond('GET','/movie/[:id]', function($request) use($fc) {
    $fc->movie($request->id); 
 });

$route->dispatch();
