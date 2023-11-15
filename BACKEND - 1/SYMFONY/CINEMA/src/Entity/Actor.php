<?php

namespace App\Entity;

use App\Repository\ActorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Valid ;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

use DateTime;

/**
 * @ORM\Entity(repositoryClass=ActorRepository::class)
 * @Vich\Uploadable
 */
class Actor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Valid\Length(min=3,max=15,minMessage="il faut 3 caracteres",maxMessage="trop de caracteres")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    // /**
    //  * @Vich\UploadableField(mapping="actor_image", fileNameProperty="image")
    //  * @var File
    //  */
    // private $imageFile;

    /**
     * @ORM\ManyToMany(targetEntity=Movie::class, mappedBy="acteurs")
     */
    private $movies;

    // /**
    //  * @ORM\Column(type="datetime")
    //  */
    // private $update_at;

    public function __construct()
    {
        $this->movies = new ArrayCollection();
    }

    // public function setImageFile(?File $imageFile = null): self
    // {    
    //     $this->update_at = new DateTime('now');
    //     $this->imageFile = $imageFile;

	//     return $this; 
    // }

    // public function getImageFile(): ?File
    // {
    //     return $this->imageFile;
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Movie[]
     */
    public function getMovies(): Collection
    {
        return $this->movies;
    }

    public function addMovie(Movie $movie): self
    {
        if (!$this->movies->contains($movie)) {
            $this->movies[] = $movie;
            $movie->addActeur($this);
        }

        return $this;
    }

    public function removeMovie(Movie $movie): self
    {
        if ($this->movies->removeElement($movie)) {
            $movie->removeActeur($this);
        }

        return $this;
    }

    // public function getUpdateAt(): ?\DateTimeImmutable
    // {
    //     return $this->update_at;
    // }

    // public function setUpdateAt(\DateTimeImmutable $update_at): self
    // {
    //     $this->update_at = $update_at;

    //     return $this;
    // }
}
