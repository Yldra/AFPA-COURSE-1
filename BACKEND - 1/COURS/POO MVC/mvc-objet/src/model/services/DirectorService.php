<?php

namespace mvcobjet\Model\Services;

use mvcobjet\Model\Daos\DirectorDao;

class DirectorService
{
    private $directorDao;
    public function __construct()
    {
        $this->directorDao = new DirectorDao();
    }

    public function getAllDirectors()
    {
        $directors = $this->directorDao->findAll();
        // echo "<pre>";
        // var_dump($directors);
        return $directors;
    }

    public function getOneDirector($id_director)
    {
        return $this->directorDao->findOne($id_director);
    }

    public function createDirector($directorData)
    {

        $director = $this->directorDao->createObjectFromFields($directorData);
        $this->directorDao->createDirector($director);
    }

    public function editDirector($directorData)
    {

        $director = $this->directorDao->createObjectFromFields($directorData);
        $this->directorDao->editDirector($director);
    }

    public function deleteDirector($id_director)
    {

        $this->directorDao->deleteDirector($id_director);
    }
}
