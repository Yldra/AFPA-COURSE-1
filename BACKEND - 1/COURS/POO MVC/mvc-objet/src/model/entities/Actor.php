<?php

namespace mvcobjet\model\Entities;

class Actor
{
    private int $id_actor;
    private string $first_name;
    private string $last_name;
    private string $photo;
    public string $birth_date;

    // Définir les setters avec des paramètres
    public function setFirstName($fn)
    {
        $this->first_name = $fn;
    }

    public function setLastName($ln)
    {
        $this->last_name = $ln;
    }

    public function setPhoto($ph)
    {
        $this->photo = $ph;
    }

    public function setId($id_actor)
    {
        $this->id_actor = $id_actor;
    }

    public function setBirthDate($bd)
    {
        $this->birth_date = $bd;
    }

    // Définir les getters pour récupérer les valeurs
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getId()
    {
        return $this->id_actor;
    }

    public function getBirthDate()
    {
        return $this->birth_date;
    }
}
