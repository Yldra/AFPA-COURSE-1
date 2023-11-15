<?php

namespace mvcobjet\Controller;

use mvcobjet\Model\Services\ActorService;
use mvcobjet\Model\Services\DirectorService;
use mvcobjet\Model\Services\TypeService;

class FrontController
{
    public $actorService;
    public $directorService;
    public $typeService;

    public function __construct()
    {
        $this->actorService = new ActorService();
        $this->directorService = new DirectorService();
        $this->typeService = new TypeService();
    }

    // ACTOR SECTION
    public function showAllActors()
    {
        $actors = $this->actorService->getAllActors();
        require __DIR__ . '../../view/actor/Actors-List.php';
        // echo $this->twig->render('actors.html.twig', ["actors" => $actors]);
    }

    public function showOneActor($id_actor)
    {
        $actor = $this->actorService->getOneActor($id_actor);
        require __DIR__ . '../../view/actor/Actor-Detail.php';
    }

    public function formAddActor()
    {
        require __DIR__ . '../../view/actor/Add-Actor.php';
    }

    public function formUpdateActor($id)
    {
        $actor = $this->actorService->getOneActor($id);
        require __DIR__ . '../../view/actor/Update-Actor.php';
    }

    // DIRECTOR SECTION
    public function showAllDirectors()
    {
        $directors = $this->directorService->getAlldirectors();
        require __DIR__ . '../../view/director/Directors-List.php';
    }

    public function showOneDirector($id_director)
    {
        $director = $this->directorService->getOnedirector($id_director);
        require __DIR__ . '../../view/director/Director-Detail.php';
    }

    public function faddDirector()
    {
        require __DIR__ . '../../view/director/Add-Director.php';
    }

    public function formUpdateDirector($id)
    {
        $director = $this->directorService->getOneDirector($id);
        require __DIR__ . '../../view/director/Update-Director.php';
    }

    // TYPE SECTION
    public function showTypes($id_type = null)
    {
        $types = $this->typeService->getAllTypes();
        if ($id_type !== null) {
            $type = $this->typeService->getOneType($id_type);
            require __DIR__ . '../../view/type/Type-Detail.php'; // Affiche les détails du type
        } else {
            require __DIR__ . '../../view/type/Types-List.php'; // Affiche la liste des types
        }
    }

    public function faddType()
    {
        require __DIR__ . '../../view/type/Add-Type.php';
    }

    public function formUpdateType($id)
    {
        $type = $this->typeService->getOneType($id);
        require __DIR__ . '../../view/type/Update-Type.php';
    }

    // HOME SECTION
    public function showHome()
    {
        require __DIR__ . '../../view/home/homepage.php';
    }

    // MOVIE SECTION

}
