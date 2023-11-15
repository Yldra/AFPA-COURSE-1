<?php

class Jambe
{
    private string $type;

    public function __construct(string $t)
    {
        $this->type = $t;
    }

    public function setType(string $t): void
    {
        $this->type = $t;
    }

    public function getType(): string
    {
        return $this->type;
    }

    // public function setCourtes(string $c): void
    // {
    //     $this->courtes = $c;
    // }

    // public function getCourtes(): string
    // {
    //     return $this->courtes;
    // }

    // public function setLongues(string $l): void
    // {
    //     $this->longues = $l;
    // }

    // public function getLongues(): string
    // {
    //     return $this->longues;
    // }
}
