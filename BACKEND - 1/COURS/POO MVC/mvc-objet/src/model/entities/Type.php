<?php

namespace mvcobjet\model\Entities;

class Type
{
    private int $id_type;
    private string $name;

    // Définir les setters avec des paramètres
    public function setId($id_type)
    {
        $this->id_type = $id_type;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Définir les getters pour récupérer les valeurs
    public function getId()
    {
        return $this->id_type;
    }

    public function getName()
    {
        return $this->name;
    }
}

// Exemple d'utilisation de la classe type
// $type = new type();
// $type->setType("Action");
// $type->setId(1);
