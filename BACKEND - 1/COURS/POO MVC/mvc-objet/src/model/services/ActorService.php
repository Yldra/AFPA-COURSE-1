<?php

namespace mvcobjet\Model\Services;

use mvcobjet\Model\Daos\ActorDao;

class ActorService
{
    private $actorDao;
    public function __construct()
    {
        $this->actorDao = new ActorDao();
    }

    public function getAllActors()
    {
        $actors = $this->actorDao->findAll();
        // echo "<pre>";
        // var_dump($actors);
        return $actors;
    }

    public function getOneActor($id_actor)
    {
        return $this->actorDao->findOne($id_actor);
    }

    public function createActor($actorData)
    {

        $actor = $this->actorDao->createObjectFromFields($actorData);
        $this->actorDao->createActor($actor);
    }

    public function editActor($actorData)
    {

        $actor = $this->actorDao->createObjectFromFields($actorData);
        $this->actorDao->editActor($actor);
    }

    public function deleteActor($id_actor)
    {
      
        $this->actorDao->deleteActor($id_actor);
    }

}
