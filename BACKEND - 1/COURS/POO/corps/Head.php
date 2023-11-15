<?php

class Head
{
    private string $yeux;
    private string $nez;
    private string $bouche;

    public function __construct(string $y, string $n, string $b)
    {
        $this->yeux = $y;
        $this->nez = $n;
        $this->bouche = $b;
    }

    public function setEyeColor(string $y): void
    {
        $this->yeux = $y;
    }

    public function getEyeColor(): string
    {
        return $this->yeux;
    }

    public function setNez(string $n): void
    {
        $this->nez = $n;
    }

    public function getNez(): string
    {
        return $this->nez;
    }

    public function setBouche(): void
    {
        $this->bouche = $b;
    }

    public function getBouche(): string
    {
        return $this->bouche;
    }
}
