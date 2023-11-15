<?php

namespace App\Entity;

use App\Entity\Personne;
use App\Entity\Possede;
use App\Repository\PossedeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PossedeRepository::class)]
// @UniqueEntity(fields={"personne,"animal"})
class Possede
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'possedes')]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'possedes')]
    private ?Personne $personne = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): static
    {
        $this->animal = $animal;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): static
    {
        $this->personne = $personne;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }
}
