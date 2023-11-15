<?php

namespace mvcobjet\Controller;

use mvcobjet\Model\Services\ActorService;
use mvcobjet\Model\Services\DirectorService;
use mvcobjet\Model\Services\TypeService;

class BackController
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

    public function addActor($postData)
    {
        $this->actorService->createActor($postData);
        header('Location: ' . BASE . '/actors');
        exit;
    }

    public function updateActor($postData)
    {
        $this->actorService->editActor($postData);
        header('Location: ' . BASE . '/actors');
        exit;
    }

    public function deleteActor($id_actor)
    {
        $this->actorService->deleteActor($id_actor);
        header('Location: ' . BASE . '/actors');
        exit;
    }

    public function addDirector($postData)
    {
        $this->directorService->createDirector($postData);
        header('Location: ' . BASE . '/directors');
        exit;
    }

    public function updateDirector($postData)
    {
        $this->directorService->editDirector($postData);
        header('Location: ' . BASE . '/directors');
        exit;
    }

    public function deleteDirector($id_director)
    {
        $this->directorService->deleteDirector($id_director);
        header('Location: ' . BASE . '/directors');
        exit;
    }

    public function addType($postData)
    {
        $this->typeService->createType($postData);
        header('Location: ' . BASE . '/types');
        exit;
    }

    public function updateType($postData)
    {
        $this->typeService->editType($postData);
        header('Location: ' . BASE . '/types');
        exit;
    }

    public function deleteType($id_type)
    {
        $this->typeService->deleteType($id_type);
        header('Location: ' . BASE . '/types');
        exit;
    }
}
