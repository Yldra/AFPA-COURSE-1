<?php

namespace mvcobjet\Model\Services;

use mvcobjet\Model\Daos\TypeDao;

class TypeService
{
    private $typeDao;
    public function __construct()
    {
        $this->typeDao = new TypeDao();
    }

    public function getAllTypes()
    {
        $types = $this->typeDao->findAll();
        // echo "<pre>";
        // var_dump($types);
        return $types;
    }

    public function getOneType($id_type)
    {
        return $this->typeDao->findOne($id_type);
    }

    public function createType($typeData)
    {

        $type = $this->typeDao->createObjectFromFields($typeData);
        $this->typeDao->createType($type);
    }

    public function editType($typeData)
    {

        $type = $this->typeDao->createObjectFromFields($typeData);
        $this->typeDao->editType($type);
    }

    public function deleteType($id_type)
    {

        $this->typeDao->deleteType($id_type);
    }
}
