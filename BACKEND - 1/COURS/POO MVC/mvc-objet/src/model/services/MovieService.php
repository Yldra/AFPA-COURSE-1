<?php

namespace mvcobjet\Model\Services;

class MovieService
{
    private $movieDao;
    private $actorDao;
    private $directorDao;
    private $typeDao;

    public function __construct()
    {
        $this->movieDao = new MovieDao();
        $this->actorDao = new ActorDao();
        $this->directorDao = new DirectorDao();
        $this->typeDao = new TypeDao();
    }

    public function getbyId($id)
    {
        // création de l'objet movie référencé par $movie
        $movie = $this->movieDao->findById($id); // recherche dans movieDao ( $id = id de movie )
        // renvoi de la liste des objets actors
        $actors = $this->actorDao->findByMovie($id); // recherche des acteurs pour 1 film
        foreach ($actors as $actor) {
            //fonction dans la classe Movie sans Entities
            $movie->addActor($actor);
        }

        $type = $this->typeDao->findByMovie($id);
        $movie->setType($type);

        $directors = $this->directorDao->findByMovie($id); // recherche des directeurs pour 1 film
        foreach ($directors as $director) {
            //fonction dans la classe Movie sans Entities
            $movie->addDirector($director);
        }
        // $comments = $this->commentDao->findByMovie($id);
        return $movie;
    }

}
