<?php

class Tronc
{
    private string $genre;

    public function __construct(string $g)
    {
        $this->genre = $g;
    }

    public function setGenre(string $f): void
    {
        $this->genre = $g;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }
}
