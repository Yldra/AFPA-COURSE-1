<?php

namespace mvcobjet\model\Entities;

class Director
{
    private int $id_director;
    private string $first_name;
    private string $last_name;
    private string $photo;
    private string $birth_date;

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

    public function setId($id_director)
    {
        $this->id_director = $id_director;
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
        return $this->id_director;
    }

    public function getBirthDate()
    {
        return $this->birth_date;
    }
}

// Exemple d'utilisation de la classe director
// $director = new director();
// $director->setFirstName("John");
// $director->setLastName("Doe");
// $director->setPhoto("john.jpg");
// $director->setID(1);

// echo "director ID: " . $director->getID() . "<br>";
// echo "First Name: " . $director->getFirstName() . "<br>";
// echo "Last Name: " . $director->getLastName() . "<br>";
// echo "Photo: " . $director->getPhoto() . "<br>";
