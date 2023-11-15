<?php

namespace mvcobjet\Model\Entities;

class Movie
{
    private int $id_movie;
    private string $title;
    // private string $description;
    // private string $duration;
    private string $release_date;
    private string $poster;
    private Type $type;
    private array $directors;
    private array $actors;

    // SETTERS
    public function setId(int $id_movie): Movie
    {
        $this->id_movie = $id_movie;
        return $this;
    }

    public function setTitle(string $title): Movie
    {
        $this->title = $title;
        return $this;
    }

    // public function setDescription(string $description): Movie
    // {
    //     $this->description = $description;
    //     return $this;
    // }

    // public function setDuration(string $duration): Movie
    // {
    //     $this->duration = $duration;
    //     return $this;
    // }

    public function setDate(string $release_date): Movie
    {
        $this->release_date = $release_date;
        return $this;
    }

    public function setPoster(string $poster): Movie
    {
        $this->poster = $poster;
        return $this;
    }

    public function setType(Type $type): Movie
    {
        $this->type = $type;
        return $this;
    }

    public function setActors($actors): Movie
    {
        $this->actors = $actors;
        return $this;
    }

    public function setDirectors($directors): Movie
    {
        $this->directors = $directors;
        return $this;
    }

    // GETTERS
    public function getId(): int
    {
        return $this->id_movie;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    // public function getDescription(): string
    // {
    //     return $this->description;
    // }

    // public function getDuration(): string
    // {
    //     return $this->duration;
    // }

    public function getDate(): string
    {
        return $this->release_date;
    }

    public function getPoster(): string
    {
        return $this->poster;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function getDirectors()
    {
        return $this->directors;
    }
    // ELSE ACTOR
    public function addActor(Actor $actor): void
    {
        if (is_array($this->actors)) {
            foreach ($this->actors as $a) {
                if ($a->getId() == $actor->getId()) {
                    return;
                }
            }
        }
        $this->actors[] = $actor;
    }

    public function deleteActor(Actor $actor): void
    {
        $this->actors = array_filter($this->actors, function (Actor $a) use ($actor) {
            return $a->getId() != $actor->getId();
        });
    }

    // ELSE DIRECTOR
    public function addDirector(Director $director): void
    {
        if (is_array($this->directors)) {
            foreach ($this->directors as $a) {
                if ($a->getId() == $director->getId()) {
                    return;
                }
            }
        }
        $this->directors[] = $director;
    }

    public function deleteDirector(Director $director): void
    {
        $this->directors = array_filter($this->directors, function (director $a) use ($director) {
            return $a->getId() != $director->getId();
        });
    }
}
